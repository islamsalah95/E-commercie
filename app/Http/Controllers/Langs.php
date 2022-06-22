<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Langs extends Controller
{
    public function langs(){
// $lang="en";
App::setLocale('en');
// return view("test");
return redirect()->back();

    }


    //     public function indexEN ($lang="en") {
    //     App::setLocale($lang);
    //     $products = DB::table('product')->get();
    //     return view("product",compact('products')) ;
    // }
}
