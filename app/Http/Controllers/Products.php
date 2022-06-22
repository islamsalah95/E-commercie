<?php

namespace App\Http\Controllers;
use Validator;
use App\Models\User;
use App\Models\Viewer;
use Illuminate\Http\Request;
use App\Mail\MailNewproducts;
use App\Mail\sendMailNewOffer;
use App\traits\ProductsTraits;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use App\Events\IncreaseVideoEvents;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Unique;
use App\Http\Requests\validationRequest;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Products extends Controller
{
    public function showDetails($id)
    {
        $products = DB::table('products')->select('id', 'name_en', 'name_ar','name_' . LaravelLocalization::getCurrentLocale() . ' as name',
         'quantity', 'old_price', 'sale', 'price', 'desc_en', 'desc_ar','desc_' . LaravelLocalization::getCurrentLocale() . ' as desc', 'code',
          'image', 'secondimage', 'status', 'id_subcategorie', 'id_brand', 'created_at',
           'updated_at'
        )->where('id', $id)->paginate(PaginationCount);

        $comments = DB::table('comments')->where('product_id',$id)->paginate(PaginationCount);

        return view('website.product-details', compact('products'), compact('comments'));

    }

    public function comment(Request $request,$product_id,$name)
    {
        $request->validate(['message' => 'required|max:255']);
        DB::table('comments')->insert([
            'name' => $name,
            'message'=>$request->message,
            'product_id'=>$product_id
        ]);
        return redirect()->back()->with('success','add comment succsessful');
    }
// <<<<<<<<<<<<<<<<<<<<<<all products>>>>>>>>>>>>>>>>>
public function AllProducts()
    {
        // $products = DB::table('product')->select('id','name','price','details_'.LaravelLocalization::getCurrentLocale().'as details')->paginate(PaginationCount);
        $products = DB::table('products')->select('id', 'name_en', 'name_ar','name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'quantity', 'old_price', 'sale', 'price', 'desc_en', 'desc_ar','desc_' . LaravelLocalization::getCurrentLocale() . ' as desc', 'code',
         'image', 'secondimage', 'status', 'id_subcategorie', 'id_brand', 'created_at',
          'updated_at'
       )->paginate(PaginationCount);
        return view("website.AllProducts", compact('products'));

    }

// <<<<<<<<<<<<<<<<<<<<<<male categories>>>>>>>>>>>>>>>>>
    public function MaleJeans()
    {


        $products = DB::table('products')
        ->select('products.id', 'products.name_en', 'products.name_ar','products.name_' . LaravelLocalization::getCurrentLocale() . ' as name',
         'products.quantity', 'products.old_price', 'products.sale', 'products.price', 'products.desc_en', 'products.desc_ar','products.desc_' . LaravelLocalization::getCurrentLocale() . ' as desc', 'products.code',
          'products.image', 'products.secondimage', 'products.status', 'products.id_subcategorie', 'products.id_brand', 'products.created_at',

        )

        ->join('subcategories', 'subcategories.id', '=', 'products.id_subcategorie')
        ->where('subcategories.id', '=', 1)
        ->paginate(PaginationCount);
        return view("website.MaleJeans", compact('products'));

    }







    public function MaleTeShirt()
    {


        $products = DB::table('products')
        ->select('products.id', 'products.name_en', 'products.name_ar','products.name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'products.quantity', 'products.old_price', 'products.sale', 'products.price', 'products.desc_en', 'products.desc_ar','products.desc_' . LaravelLocalization::getCurrentLocale() . ' as desc', 'products.code',
         'products.image', 'products.secondimage', 'products.status', 'products.id_subcategorie', 'products.id_brand', 'products.created_at',

       )        ->join('subcategories', 'subcategories.id', '=', 'products.id_subcategorie')
        ->where('subcategories.id', '=', 2)
        ->paginate(PaginationCount);
        return view("website.maleTeShirt", compact('products'));

    }
    public function MaleShoes()
    {

        $products = DB::table('products')
        ->select('products.id', 'products.name_en', 'products.name_ar','products.name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'products.quantity', 'products.old_price', 'products.sale', 'products.price', 'products.desc_en', 'products.desc_ar','products.desc_' . LaravelLocalization::getCurrentLocale() . ' as desc', 'products.code',
         'products.image', 'products.secondimage', 'products.status', 'products.id_subcategorie', 'products.id_brand', 'products.created_at',

       )        ->join('subcategories', 'subcategories.id', '=', 'products.id_subcategorie')
        ->where('subcategories.id', '=', 3)
        ->paginate(PaginationCount);
        return view("website.maleShoes", compact('products'));
        // view("website.maleShoes")

    }


// <<<<<<<<<<<<<<<<<<<<<<Women categories>>>>>>>>>>>>>>>>>

    public function WomenJeans()
    {


        $products = DB::table('products')
        ->select('products.id', 'products.name_en', 'products.name_ar','products.name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'products.quantity', 'products.old_price', 'products.sale', 'products.price', 'products.desc_en', 'products.desc_ar','products.desc_' . LaravelLocalization::getCurrentLocale() . ' as desc', 'products.code',
         'products.image', 'products.secondimage', 'products.status', 'products.id_subcategorie', 'products.id_brand', 'products.created_at',

       )        ->join('subcategories', 'subcategories.id', '=', 'products.id_subcategorie')
        ->where('subcategories.id', '=', 4)
        ->paginate(PaginationCount);
        return view("website.WomenJeans", compact('products'));

    }



    public function WomenTeShirt()
    {

        $products = DB::table('products')
        ->select('products.id', 'products.name_en', 'products.name_ar','products.name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'products.quantity', 'products.old_price', 'products.sale', 'products.price', 'products.desc_en', 'products.desc_ar','products.desc_' . LaravelLocalization::getCurrentLocale() . ' as desc', 'products.code',
         'products.image', 'products.secondimage', 'products.status', 'products.id_subcategorie', 'products.id_brand', 'products.created_at',

       )        ->join('subcategories', 'subcategories.id', '=', 'products.id_subcategorie')
        ->where('subcategories.id', '=', 5)
        ->paginate(PaginationCount);
        return view("website.WomenTeShirt", compact('products'));

    }
    public function WomenShoes()
    {


        $products = DB::table('products')
        ->select('products.id', 'products.name_en', 'products.name_ar','products.name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'products.quantity', 'products.old_price', 'products.sale', 'products.price', 'products.desc_en', 'products.desc_ar','products.desc_' . LaravelLocalization::getCurrentLocale() . ' as desc', 'products.code',
         'products.image', 'products.secondimage', 'products.status', 'products.id_subcategorie', 'products.id_brand', 'products.created_at',

       )        ->join('subcategories', 'subcategories.id', '=', 'products.id_subcategorie')
        ->where('subcategories.id', '=', 6)
        ->paginate(PaginationCount);
        return view("website.WomenShoes", compact('products'));

    }


// <<<<<<<<<<<<<<<<<<<<<<Kids categories>>>>>>>>>>>>>>>>>


    public function KidsJeans()
    {


        $products = DB::table('products')
        ->select('products.id', 'products.name_en', 'products.name_ar','products.name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'products.quantity', 'products.old_price', 'products.sale', 'products.price', 'products.desc_en', 'products.desc_ar','products.desc_' . LaravelLocalization::getCurrentLocale() . ' as desc', 'products.code',
         'products.image', 'products.secondimage', 'products.status', 'products.id_subcategorie', 'products.id_brand', 'products.created_at',

       )        ->join('subcategories', 'subcategories.id', '=', 'products.id_subcategorie')
        ->where('subcategories.id', '=', 7)
        ->paginate(PaginationCount);
        return view("website.KidsJeans", compact('products'));

    }



    public function KidsTeShirt()
    {


        $products = DB::table('products')
        ->select('products.id', 'products.name_en', 'products.name_ar','products.name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'products.quantity', 'products.old_price', 'products.sale', 'products.price', 'products.desc_en', 'products.desc_ar','products.desc_' . LaravelLocalization::getCurrentLocale() . ' as desc', 'products.code',
         'products.image', 'products.secondimage', 'products.status', 'products.id_subcategorie', 'products.id_brand', 'products.created_at',

       )        ->join('subcategories', 'subcategories.id', '=', 'products.id_subcategorie')
        ->where('subcategories.id', '=', 8)
        ->paginate(PaginationCount);
        return view("website.KidsTeShirt", compact('products'));

    }
    public function KidsShoes()
    {


        $products = DB::table('products')
        ->select('products.id', 'products.name_en', 'products.name_ar','products.name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'products.quantity', 'products.old_price', 'products.sale', 'products.price', 'products.desc_en', 'products.desc_ar','products.desc_' . LaravelLocalization::getCurrentLocale() . ' as desc', 'products.code',
         'products.image', 'products.secondimage', 'products.status', 'products.id_subcategorie', 'products.id_brand', 'products.created_at',

       )        ->join('subcategories', 'subcategories.id', '=', 'products.id_subcategorie')
        ->where('subcategories.id', '=', 9)
        ->paginate(PaginationCount);
        return view("website.KidsShoes", compact('products'));

    }


    public function FashonKing()
    {

        $products = DB::table('products')
        ->select('products.id', 'products.name_en', 'products.name_ar','products.name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'products.quantity', 'products.old_price', 'products.sale', 'products.price', 'products.desc_en', 'products.desc_ar','products.desc_' . LaravelLocalization::getCurrentLocale() . ' as desc', 'products.code',
         'products.image', 'products.secondimage', 'products.status', 'products.id_subcategorie', 'products.id_brand', 'products.created_at',

       )
        ->orderBy('created_at', 'desc')->limit(6)->get();



        $bestSaleProducts = DB::table('products')->orderBy('sale', 'desc')->limit(3)->get();
        return view("website.index", compact('products'), compact('bestSaleProducts'));



    }



    public function salemail()
    {

        $details = DB::table('products')
        ->select('products.id', 'products.name_en', 'products.name_ar','products.name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'products.quantity', 'products.old_price', 'products.sale', 'products.price', 'products.desc_en', 'products.desc_ar','products.desc_' . LaravelLocalization::getCurrentLocale() . ' as desc', 'products.code',
         'products.image', 'products.secondimage', 'products.status', 'products.id_subcategorie', 'products.id_brand', 'products.created_at',

       )
        ->orderBy('sale', 'desc')->limit(2)->paginate(PaginationCount);
        return view("salemail",compact('details'));
    }



    public function sendMailNewProducts()

{
    // Mail::to($request->user())->send(new OrderShipped($order));
    $products = DB::table('products')
    ->select('products.id', 'products.name_en', 'products.name_ar','products.name_' . LaravelLocalization::getCurrentLocale() . ' as name',
    'products.quantity', 'products.old_price', 'products.sale', 'products.price', 'products.desc_en', 'products.desc_ar','products.desc_' . LaravelLocalization::getCurrentLocale() . ' as desc', 'products.code',
     'products.image', 'products.secondimage', 'products.status', 'products.id_subcategorie', 'products.id_brand', 'products.created_at',

   )
    ->orderBy('created_at', 'desc')->limit(1)->paginate(PaginationCount);
    $emails=User::pluck('email')->toArray();
    foreach( $emails as  $email){

        Mail::To($email)->send(new MailNewproducts($products));
    }

     return redirect()->back()->with("mailSent","mail sent success") ;


}



public function sendMailNewOffer(Request $request)

{

$validated=$request->validate([
    'title'=>'required',
    'message'=>'required',
]);

$data=[
    'title'=>$request->title,
    'message'=>$request->message,

];

$emails=User::pluck("email")->toArray();

foreach ($emails as $email) {
    Mail::to($email)->send(new sendMailNewOffer($data));
}
return redirect()->back()->with("mailSent","mail sent success") ;



}






    // public function bestSale()
    // {

    //     $bestSaleProducts = DB::table('products')
    //     ->select('products.*')
    //     ->paginate(PaginationCount);
    //     return view("website.index", compact('bestSaleProducts'));


    // }

    // public function indexEN ($lang="en") {
    //     App::setLocale($lang);
    //     $products = DB::table('product')->paginate(PaginationCount);
    //     return view("product",compact('products')) ;
    // }
    // public function indexAR ($lang="ar") {
    //     App::setLocale($lang);
    //     $products = DB::table('product')->paginate(PaginationCount);
    //     return view("product",compact('products')) ;
    // }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/');
    }



//===========================================Admin
//     public function loginAdmin()
//     {
// return view("auth.loginAdmin");

//     }
//////////////////=================adminstration////////////////////////=======================///////////////////////
    public function checkAdminstration(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (auth()->guard('adminstration')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
        {
            $adminstration = auth()->user();

            return redirect()->route('dash');

        } else {
            return back()->with('error','your username and password are wrong.');
        }


    }


    public function adminstrationlogin()
    {
return view("auth.adminstrationlogin");

    }



    public function WelcomeAdminStration()
    {
return view("WelcomeAdminStration");

    }


    public function logoutadminstration(Request $request)
    {
        if(Auth::guard('adminstration')->check()) // this means that the admin was logged in.
        {
            Auth::guard('adminstration')->logout();
            return redirect()->route('adminstrationlogin');
        }

        $this->guard()->logout();
        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/');
    }
//////////////////=================////////////////////////=======================///////////////////////

}



    // public function getVideo()
    // {

//        $video=Viewer::first();
// return view("product")->with( 'video',$video);
//$videos = DB::table('viewers')->paginate(PaginationCount);
// $videos = Viewer::select("viewers")->paginate(PaginationCount);
// event(new IncreaseVideoEvents($videos));


// DB::table('viewers')->increment('viewers', 1);
// $videos = Viewer::select("viewers")->paginate(PaginationCount);
// return view("Viewers", compact('videos'));

//     }

//     public function nodverifyed()
//     {
// return view("nodverifyed");

//     }

//     public function nodverifyed2()
//     {
// return view("nodverifyed2");

//     }
// public function logout(Request $request)
// {   Auth::guard('web')->logout();
//    // Auth::guard('admin')->logout();
//     //Auth::guard('professor')->logout();
//     $request->session()->invalidate();
//     $request->session()->regenerateToken();

//     return redirect(route('index'));
// }




