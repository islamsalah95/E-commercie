<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Unique;
use App\Http\Requests\validationRequest;
use App\Http\Requests\validationRequestUpdate;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ProductController extends Controller
{

    function create (){

        $subcategories = DB::table('subcategories')->get();

        // $brands = DB::table('brands')->get();
// return dd( $subcategories);
        return view("dash/layouts/products/create",compact('subcategories')) ;


    }

/**
 * Store a new blog post.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
    public function store(validationRequest $request)
    {

if ($request->hasFile('image')) {
       $file_extension=$request->file('image')->getClientOriginalExtension();
        $file_name=time().'.'.$file_extension;
        $request->image->move(public_path('website/assets/img/product/'),$file_name); }

        DB::table("products")->insert([
                    'name_en' =>$request->name_en,
                    'name_ar' =>$request->name_ar,
                    'status' =>$request->status,
                    'code' => $request->code,
                    'price' => $request->price,
                    'quantity' =>$request->quantity,
                    'desc_en' => $request->desc_en,
                    'desc_ar' => $request->desc_ar,
                    'id_subcategorie'=>$request->id_subcategorie,
                    'image'=>$file_name
]);

        return redirect(route('dash.index'))->with('success', 'product add successful');
    }





    function index (){

        $products = DB::table('products')->
        select('id', 'name_en', 'name_ar','name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'quantity', 'old_price', 'sale', 'price', 'desc_en', 'desc_ar','desc_' . LaravelLocalization::getCurrentLocale() . ' as desc', 'code',
         'image', 'secondimage', 'status', 'id_subcategorie', 'id_brand', 'created_at',
          'updated_at'
       )->paginate(PaginationCount);
        return view("dash/layouts/products/index",compact('products')) ;


    }



    function edit ($id){
        $subcategories = DB::table('subcategories')->get();
        // $brands = DB::table('brands')->get();
        $products = DB::table('products')
        ->
        select('id', 'name_en', 'name_ar','name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'quantity', 'old_price', 'sale', 'price', 'desc_en', 'desc_ar','desc_' . LaravelLocalization::getCurrentLocale() . ' as desc', 'code',
         'image', 'secondimage', 'status', 'id_subcategorie', 'id_brand', 'created_at',
          'updated_at'
       )
        ->where('id',$id)->get();

        return view("dash/layouts/products/edit",compact('subcategories','products')) ;


    }

    public function update(validationRequestUpdate $request,$id)
    {

        if ($request->hasFile('image')) {
            $file_extension=$request->file('image')->getClientOriginalExtension();
             $file_name=time().'.'.$file_extension;
             $request->image->move(public_path('website/assets/img/product/'),$file_name); }

             DB::table("products")
             ->
             select('id', 'name_en', 'name_ar','name_' . LaravelLocalization::getCurrentLocale() . ' as name',
             'quantity', 'old_price', 'sale', 'price', 'desc_en', 'desc_ar','desc_' . LaravelLocalization::getCurrentLocale() . ' as desc', 'code',
              'image', 'secondimage', 'status', 'id_subcategorie', 'id_brand', 'created_at',
               'updated_at'
            )
             ->where('id',$id)->update([
                         'name_en' =>$request->name_en,
                         'name_ar' =>$request->name_ar,
                         'status' =>$request->status,
                         'code' => $request->code,
                         'price' => $request->price,
                         'quantity' =>$request->quantity,
                         'desc_en' => $request->desc_en,
                         'desc_ar' => $request->desc_ar,
                         'id_subcategorie'=>$request->id_subcategorie,
                         'image'=>$file_name
     ]);

     return redirect()->route('dash.index')->with('success', 'product update successful');

    }


    public function delete($id)
    {


        $product = DB::table('products')->find($id);
        if (is_null($product)) {
            abort(404);
        }

           $RemovePhotoPath = public_path( "assets\images\products\\{$product->image} ");
           if (file_exists( $RemovePhotoPath)) {
               unlink( $RemovePhotoPath);}


        DB::table("products")->where('id',$id)->delete();
        return redirect()->route('dash.index')->with('success', 'product delete successful');
    }





}
