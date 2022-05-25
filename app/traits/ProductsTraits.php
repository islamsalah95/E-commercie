<?php
namespace App\traits;

use Illuminate\Support\Facades\DB;

trait ProductsTraits
{
public function SavePhoto ($path,$photo){
$file_extension=$photo->getClientOriginalExtension();
$file_name=time().'.'.$file_extension;
$photo->move($path,$file_name);

}



public function DeletePhoto($id,$table,$path)
{

        $products =  DB::table($table)->find($id,$columns=['photo']);
         unlink($path.$products->photo);

}

}
