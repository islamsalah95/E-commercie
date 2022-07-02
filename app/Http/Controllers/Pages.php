<?php

namespace App\Http\Controllers;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\App;
// use App\Http\Controllers\Controller;


class Pages extends Controller
{

    public function aboutus(){return view("website.about-us") ; }
    public function blogdetails(){return view("website.blog-details") ; }
    public function blogdetailsaudio(){return view("website.blog-details-audio") ; }
    public function blogdetailsgallery(){return view("website.blog-details-gallery") ; }
    public function blogdetailslink(){return view("website.blog-details-link") ; }
    public function blogdetailsquote(){return view("website.blog-details-quote") ; }
    public function blogdetailsstandard(){return view("website.blog-details-standard") ; }
    public function blogdetailsvideo(){return view("website.blog-details-video") ; }
    public function blogleftsidebar(){return view("website.blog-left-sidebar") ; }
    public function blogmasonry(){return view("website.blog-masonry") ; }
    public function blognosidebar(){return view("website.blog-no-sidebar") ; }
    public function blogrightsidebar(){return view("website.blog-right-sidebar") ; }
    public function cartpage(){return view("website.cart-page") ; }
    public function checkout(){return view("website.checkout") ; }
    public function contact(){return view("website.contact") ; }
    public function index(){return view("website.index") ; }
    public function index2(){return view("website.index-2") ; }
    public function loginregister(){return view("website.login-register") ; }
    public function myaccount(){return view("website.my-account") ; }
    public function productdetails(){return view("website.product-details") ; }
    public function shop(){return view("website.shop") ; }
    public function shoplist(){return view("website.shop-list") ; }



    public function wishlist(){return view("website.wishlist") ; }


}

