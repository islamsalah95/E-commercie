<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Unique;

class ProductController extends Controller
{
    function create (){

        $subcategories = DB::table('subcategories')->get();

        $brands = DB::table('brands')->get();

        return view("dash/layouts/products/create",compact('subcategories','brands')) ;


    }

/**
 * Store a new blog post.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
    public function store(Request $request)
    {
        // dd(public_path('assets\images\products'));
        // dd($request->all());
        $validated = $request->validate([
            'name_en' => ['required', 'max:255'],
            'name_ar' => ['required', 'max:255'],
            'code' => ['required','unique'],
            'price' => ['required', 'numeric'],
            'quantity' => ['nullable', 'integer', 'max:999'],
            'desc_en' => ['required', 'max:255'],
            'desc_ar' => ['required', 'max:255'],
            'id_brand' => ['nullable', 'integer'],
            'id_subcategorie' => ['nullable', 'integer'],
            'image'=> ['required','max:100']
        ]);
$data =$request->except('_token','image');
if ($request->hasFile('image')) {
    $image = $request->file('image');
    $destination_path =$request->file('image')->move(public_path('assets\images\products'),$image);;
    $image_name = $image->GetClientOriginName();
    $path = $request->file('image')->storeAs($destination_path,$image_name);
    $input['image']=$image_name;
    }
    // $image =$data['image'];
        // $ProductImage = uniqid() . '.' . $request->file('image')->extension();
        // $request->file('image')->move(public_path('assets\images\products'),$ProductImage);
        // $data =$request->except('_token','image');
        // $data['image'] = $ProductImage;
        DB::table("products")->insert($data);
        return redirect(route('dash.index'))->with('success', 'product add successful');
    }





    function index (){

        $products = DB::table('products')->get();
        return view("dash/layouts/products/index",compact('products')) ;


    }



    function edit ($id){
        $subcategories = DB::table('subcategories')->get();
        $brands = DB::table('brands')->get();
        $product = DB::table('products')->where('id',$id)->first();

        return view("dash/layouts/products/edit",compact('subcategories','brands','product')) ;


    }

    public function update(Request $request,$id)
    {

        $validated = $request->validate([
            'name_en' => ['required', 'max:255'],
            'name_ar' => ['required', 'max:255'],
            'code' => ['required',"unique:products,code,$id,id"],
            'price' => ['required', 'numeric'],
            'quantity' => ['nullable', 'integer', 'max:999'],
            'desc_en' => ['required', 'max:255'],
            'desc_ar' => ['required', 'max:255'],
            'id_brand' => ['nullable', 'integer'],
            'id_subcategorie' => ['nullable', 'integer'],
            'image'=> ['nullable','max:100']



        ]);




        $product = DB::table('products')->find($id);
        $data =$request->except('_token','image','_method');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $destination_path =$request->file('image')->move(public_path('assets\images\products'),$image);
            $image_name = $image->GetClientOriginName();
            $path = $request->file('image')->storeAs($destination_path,$image_name);
           $RemovePhotoPath = public_path( "assets\images\products\\{$product->image} ");
           if (file_exists( $RemovePhotoPath)) {
               unlink( $RemovePhotoPath);}



        }

        DB::table("products")->where('id',$id)->update($data);
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
