<?php
use App\Http\Controllers\Pages;
use App\Http\Controllers\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OnlinePayment;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WishlistController;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\Offers\OfferController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\PaymentProviderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!cart.list
|
*/
Route::get('about-us', [Pages::class, 'aboutus'])->name('about-us');
Route::get('blog-details',[Pages::class, 'blogdetails'])->name('blog-details');
Route::get('blog-details-audio', [Pages::class, 'blogdetailsaudio'])->name('blog-details-audio');
Route::get('blog-details-gallery', [Pages::class, 'blogdetailsgallery'])->name('blog-details-gallery');
Route::get('blog-details-link', [Pages::class, 'blogdetailslink'])->name('blog-details-link');
Route::get('blog-details-quote', [Pages::class, 'blogdetailsquote'])->name('blog-details-quote');
Route::get('blog-details-standard', [Pages::class, 'blogdetailsstandard'])->name('blog-details-standard');
Route::get('blog-details-video', [Pages::class, 'blogdetailsvideo'])->name('blog-details-video');
Route::get('blog-left-sidebar', [Pages::class, 'blogleftsidebar'])->name('blog-left-sidebar');
Route::get('blog-masonry', [Pages::class, 'blogmasonry'])->name('blog-masonry');
Route::get('blog-no-sidebar', [Pages::class, 'blognosidebar'])->name('blog-no-sidebar');
Route::get('blog-right-sidebar', [Pages::class, 'blogrightsidebar'])->name('blog-right-sidebar');
Route::get('cart-page', [Pages::class, 'cartpage'])->name('cart-page');
Route::get('checkout',[Pages::class, 'checkout'])->name('checkout');
Route::get('contact',[Pages::class, 'contact'])->name('contact');
Route::get('index', [Pages::class, 'index'])->name('index');
Route::get('index-2', [Pages::class, 'index2'])->name('index-2');
Route::get('login-register', [Pages::class, 'loginregister'])->name('login-register');
Route::get('my-account', [Pages::class, 'myaccount'])->name('my-account');
Route::get('product-details', [Pages::class, 'productdetails'])->name('product-details');
Route::get('shop', [Pages::class, 'shop'])->name('shop');
Route::get('shop-list', [Pages::class, 'shoplist'])->name('shop-list');
Route::get('wishlist', [Pages::class, 'wishlist'])->name('wishlist');

// ==================================================website routes===================================================
Route::get('details/product/{id}', [Products::class, 'showDetails'])->name("showDetails");
Route::post('comment/{product_id}/{name}', [Products::class, 'comment'])->name("comment");

Route::get('FashonKing', [Products::class, 'FashonKing'])->name("FashonKing");


// <<<<<<<<<<<<<<<<<<<<<<all categories>>>>>>>>>>>>>>>>>

Route::get('Categorie/AllProducts', [Products::class, 'AllProducts'])->name("AllProducts");

// <<<<<<<<<<<<<<<<<<<<<<male categories>>>>>>>>>>>>>>>>>

Route::get('Categorie/MaleJeans', [Products::class, 'MaleJeans'])->name("MaleJeans");
Route::get('Categorie/MaleTeShirt', [Products::class, 'MaleTeShirt'])->name("MaleTeShirt");
Route::get('Categorie/MaleShoes', [Products::class, 'MaleShoes'])->name("MaleShoes");
// <<<<<<<<<<<<<<<<<<<<<<female categories>>>>>>>>>>>>>>>>>

Route::get('Categorie/WomenJeans', [Products::class, 'WomenJeans'])->name("WomenJeans");
Route::get('Categorie/WomenTeShirt', [Products::class, 'WomenTeShirt'])->name("WomenTeShirt");
Route::get('Categorie/WomenShoes', [Products::class, 'WomenShoes'])->name("WomenShoes");
// <<<<<<<<<<<<<<<<<<<<<<kids categories>>>>>>>>>>>>>>>>>

Route::get('Categorie/KidsJeans', [Products::class, 'KidsJeans'])->name("KidsJeans");
Route::get('Categorie/KidsTeShirt', [Products::class, 'KidsTeShirt'])->name("KidsTeShirt");
Route::get('Categorie/KidsShoes', [Products::class, 'KidsShoes'])->name("KidsShoes");

// <<<<<<<<<<<<<<<<<<<<<<<language>>>>>>>>>>>>>>>>>
Route::get('bestSale', [Products::class, 'bestSale'])->name("bestSale");
Route::get('welcome', function () {
    return view('welcome');
});
Route::get('indexEN', [Products::class, 'indexEN'])->name("indexEN");
Route::get('indexAR', [Products::class, 'indexAR'])->name("indexAR");
Route::get('getVideo', [Products::class, 'getVideo'])->name("getVideo");
// Route::get('index/{lang}', function ($lang) {
//     App::setLocale($lang);
//     $products = DB::table('product')->get();
//     return view("product",compact('products')) ;
// });

// <<<<<<<<<<<<<<<<<<<<<<<auth-middelwares>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

// 'AdminAuthenticated:admins'->middleware('AdminAuthenticated:admins')

Auth::routes(['verify'=>true]);
Route::get('/home', [HomeController::class, 'index'])->name('home');


////////////////admin/////////////////////////////////////////////////////////
//Route::resource('/wishlist', 'WishlistController', ['except' => ['create', 'edit', 'show', 'update']]);
// Route::post('store', [WishlistController::class, 'store'])->name('store');
Route::post('/logout', function(){
    Auth::logout();
    return Redirect::route('FashonKing');
 })->name('logoutt');


///////////////////////////////////////////// dash/////////////////////////////////////////>>>>>>>>>>>>>>>>>>>>
Route::middleware([adminstration::class])->group(function () {
Route::get('dash',DashController::class)->name('dash');
Route::get('dash/create',[ProductController::class,'create'])->name('dash.create');
Route::get('dash/index',[ProductController::class,'index'])->name('dash.index');
Route::get('dash/edit/{id}',[ProductController::class,'edit'])->name('dash.edit');
Route::post('dash/store',[ProductController::class,'store'])->name('dash.store');
Route::put('dash/update/{id}',[ProductController::class,'update'])->name('dash.update');
Route::delete('dash/delete/{id}',[ProductController::class,'delete'])->name('dash.delete');
 });


///////////////////////////////////////////// adminstration/////////////////////////////////////////>>>>>>>>>>>>>>>>>>>>
Route::get('adminstrationlogin', [Products::class, 'adminstrationlogin'])->name('adminstrationlogin');
 Route::get('checkAdminstration', [Products::class, 'checkAdminstration'])->name('checkAdminstration');
 Route::get('WelcomeAdminStration', [Products::class, 'WelcomeAdminStration'])->name('WelcomeAdminStration')->middleware('adminstration');
 Route::post('logoutadminstration', [Products::class, 'logoutadminstration'])->name('logoutadminstration');

///////////////////////////////////////////// cart/////////////////////////////////////////>>>>>>>>>>>>>>>>>>>>
Route::middleware([Authenticate::class])->group(function () {
 Route::get('ppp', [CartController::class, 'productList'])->name('products.list');
Route::get('cartList', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::match(['put', 'patch','post'],'update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::get('remove/{id}', [CartController::class, 'removeCart'])->name('cart.remove');
Route::get('cartStore', [CartController::class, 'cartStore'])->name('cart.cartStore');
Route::get('clear/{id}', [CartController::class, 'clearAllCart'])->name('cart.clear');

Route::get('getTotalPrice', [CartController::class, 'getTotalPrice'])->name('getTotalPrice');
Route::get('getTotalItem', [CartController::class, 'getTotalItem'])->name('getTotalItem');
Route::post('onlinePayment', [OnlinePayment::class, 'getCheckOutId'])->name('cart.onlinePayment');
################Begin paymentGateways Routes ########################
Route::get('stripe/', [StripePaymentController::class, 'stripe'])->name('offers.checkout');
Route::post('stripe/post', [StripePaymentController::class, 'stripePost'])->name('stripe.post');
Route::get('productscart/{price}', [productscart::class, 'productscart'])->name('productscart');
});

