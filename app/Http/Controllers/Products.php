<?php

namespace App\Http\Controllers;
use Validator;
use App\Models\Viewer;
use Illuminate\Http\Request;
use App\traits\ProductsTraits;
use Illuminate\Support\Facades\DB;
use App\Events\IncreaseVideoEvents;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Unique;
use App\Http\Requests\validationRequest;
use Illuminate\Http\JsonResponse;


class Products extends Controller
{


    public function showDetails($id)
    {
        $products = DB::table('products')->where('id', $id)->get();

        $comments = DB::table('comments')->where('product_id',$id)->get();

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
        // $products = DB::table('product')->select('id','name','price','details_'.LaravelLocalization::getCurrentLocale().'as details')->get();
        $products = DB::table('products')->get();
        return view("website.AllProducts", compact('products'));

    }

// <<<<<<<<<<<<<<<<<<<<<<male categories>>>>>>>>>>>>>>>>>
    public function MaleJeans()
    {


        $products = DB::table('products')
        ->select('products.*')

        ->join('subcategories', 'subcategories.id', '=', 'products.id_subcategorie')
        ->where('subcategories.id', '=', 1)
        ->get();
        return view("website.MaleJeans", compact('products'));

    }







    public function MaleTeShirt()
    {


        $products = DB::table('products')
        ->select('products.*')
        ->join('subcategories', 'subcategories.id', '=', 'products.id_subcategorie')
        ->where('subcategories.id', '=', 2)
        ->get();
        return view("website.maleTeShirt", compact('products'));

    }
    public function MaleShoes()
    {

        $products = DB::table('products')
        ->select('products.*')
        ->join('subcategories', 'subcategories.id', '=', 'products.id_subcategorie')
        ->where('subcategories.id', '=', 3)
        ->get();
        return view("website.shopJeansMale", compact('products'));

    }


// <<<<<<<<<<<<<<<<<<<<<<Women categories>>>>>>>>>>>>>>>>>

    public function WomenJeans()
    {


        $products = DB::table('products')
        ->select('products.*')
        ->join('subcategories', 'subcategories.id', '=', 'products.id_subcategorie')
        ->where('subcategories.id', '=', 4)
        ->get();
        return view("website.shopJeansMale", compact('products'));

    }



    public function WomenTeShirt()
    {

        $products = DB::table('products')
        ->select('products.*')
        ->join('subcategories', 'subcategories.id', '=', 'products.id_subcategorie')
        ->where('subcategories.id', '=', 5)
        ->get();
        return view("website.shopJeansMale", compact('products'));

    }
    public function WomenShoes()
    {


        $products = DB::table('products')
        ->select('products.*')
        ->join('subcategories', 'subcategories.id', '=', 'products.id_subcategorie')
        ->where('subcategories.id', '=', 6)
        ->get();
        return view("website.shopJeansMale", compact('products'));

    }


// <<<<<<<<<<<<<<<<<<<<<<Kids categories>>>>>>>>>>>>>>>>>


    public function KidsJeans()
    {


        $products = DB::table('products')
        ->select('products.*')
        ->join('subcategories', 'subcategories.id', '=', 'products.id_subcategorie')
        ->where('subcategories.id', '=', 7)
        ->get();
        return view("website.shopJeansMale", compact('products'));

    }



    public function KidsTeShirt()
    {


        $products = DB::table('products')
        ->select('products.*')
        ->join('subcategories', 'subcategories.id', '=', 'products.id_subcategorie')
        ->where('subcategories.id', '=', 8)
        ->get();
        return view("website.shopJeansMale", compact('products'));

    }
    public function KidsShoes()
    {


        $products = DB::table('products')
        ->select('products.*')
        ->join('subcategories', 'subcategories.id', '=', 'products.id_subcategorie')
        ->where('subcategories.id', '=', 9)
        ->get();
        return view("website.shopJeansMale", compact('products'));

    }


    public function FashonKing()
    {

        $products = DB::table('products')->orderBy('created_at', 'desc')->limit(3)->get();



        $bestSaleProducts = DB::table('products')->orderBy('sale', 'desc')->limit(2)->get();
        return view("website.index", compact('products'), compact('bestSaleProducts'));








    }

    // public function bestSale()
    // {

    //     $bestSaleProducts = DB::table('products')
    //     ->select('products.*')
    //     ->get();
    //     return view("website.index", compact('bestSaleProducts'));


    // }

    // public function indexEN ($lang="en") {
    //     App::setLocale($lang);
    //     $products = DB::table('product')->get();
    //     return view("product",compact('products')) ;
    // }
    // public function indexAR ($lang="ar") {
    //     App::setLocale($lang);
    //     $products = DB::table('product')->get();
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



    // use ProductsTraits ;

    // public function store(Request $request)
    // {



    //     // $validator = Validator::make($request->all(), [
    //     //     'name' => 'required|max:255',
    //     //     'price' => 'required','numeric']

    //     // );


    //     // if( $validator->fails()){
    //     //  return  redirect()->back()->withErrors($validator);
    //     // }

    //     // else{
    //     //     return redirect()->back()->with([
    //     //         "success"=>"add successful"
    //     //   ]);
    //     // }

    //     $file_extension=$request->file('image')->getClientOriginalExtension();
    //     $file_name=time().'.'.$file_extension;
    //     $request->image->move('images',$file_name);

    //     // return $this->SavePhoto( $path='images',$photo=$request->file('image'));
    //     // $file_name=time().'.'.$photo->getClientOriginalExtension();

    //     DB::table('product')->insert([
    //         'name' => $request->name,
    //         'price' => $request->price,
    //         'photo'=>$file_name



    //     ]);


    //     // return dd($request->hasFile('image'));

    // }



    // public function delete(validationRequest $request)
    // {

    //     DB::table('product')->where('id', '=', $request->id)->delete();
    // }

    // public function update(validationRequest $request, $id)
    // {

    //     DB::table('product')->where('id', '=', $request->id)->update([

    //         'name' => $request->name,
    //         'price' => $request->price

    //     ]);
    // }


    // public function edit(int $id)
    // {
    //     //     $products = DB::table('product')->select('id','name','price')->get();
    //     // return view("edit",compact('products')) ;

    //     $product = DB::table('product')->where('id', $id)->get();
    //     return view('edit', compact('product'));
    //     //return $id;

    // }


    // public function updatee(Request $request, $id)
    // {

    //     DB::table('product')->where('id','=',$request->id)->update([

    //         'name' => $request->name,
    //         'price' => $request->price

    //     ]);
    // }



    // public function deletee(int $id)
    // {

    //     // $products =  DB::table('product')->find($id,$columns=['photo']);
    //     // unlink('images/'.$products->photo);
    //     return $this->DeletePhoto($id,$table='product',$path='images/');

    //      DB::table('product')->where('id', '=',  $id)->delete();
    //     return redirect()->back()->with([
    //         "deltee" => "delet successful"
    //     ]);



    // }

    // public function getVideo()
    // {

//        $video=Viewer::first();
// return view("product")->with( 'video',$video);
//$videos = DB::table('viewers')->get();
// $videos = Viewer::select("viewers")->get();
// event(new IncreaseVideoEvents($videos));


// DB::table('viewers')->increment('viewers', 1);
// $videos = Viewer::select("viewers")->get();
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


//     public function loginAdmin()
//     {
// return view("auth.loginAdmin");

//     }


//     public function loginProfessors()
//     {
// return view("auth.loginProfessors");

//     }



//     public function checkAdmin(Request $request)
//     {

//         $this->validate($request, [
//             'email' => 'required|email',
//             'password' => 'required',
//         ]);
//         if (auth()->guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
//         {
//             $admin = auth()->guard('admin')->user();

//             return redirect()->route('nodverifyed');

//         } else {
//             return back()->with('error','your username and password are wrong.');
//         }




// }
//     public function checkProfessors(Request $request)
//     {

//         $this->validate($request, [
//             'email' => 'required|email',
//             'password' => 'required',
//         ]);
//         if (auth()->guard('professor')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
//         {
//             $admin = auth()->guard('professor')->user();

//             return redirect()->route('nodverifyed2');

//         } else {
//             return back()->with('error','your username and password are wrong.');
//         }






// }





// public function logout(Request $request)
// {   Auth::guard('web')->logout();
//    // Auth::guard('admin')->logout();
//     //Auth::guard('professor')->logout();
//     $request->session()->invalidate();
//     $request->session()->regenerateToken();

//     return redirect(route('index'));
// }




