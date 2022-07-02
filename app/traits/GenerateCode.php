<?php

namespace App\Traits;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
trait GenerateCode
{
public function newCode(){
    $charss = ['a','b','H','c','I','d','K','e','L','f','g'];
    $chars1 =Arr::random($charss);
    $chars2 =Arr::random($charss);
    $chars3 =Arr::random($charss);
    $chars4 =Arr::random($charss);
    $nums =rand(8,1000000000);
    $Code= $chars1.$chars2.$nums.$chars3.$chars4.$nums.$chars3;
     return $Code;  }






}
