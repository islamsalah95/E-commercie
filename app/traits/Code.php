<?php
namespace App\traits;

use Illuminate\Support\Arr;

class Code
{
    public function code(){
    $charss = ['a','b','H','c','I','d','K','e','L','f','g'];
    $chars1 =Arr::random($charss);
    $chars2 =Arr::random($charss);
    $chars3 =Arr::random($charss);
    $chars4 =Arr::random($charss);
    $nums =rand(8,1000000000);
    $Code= $chars1.$chars2.$nums.$chars3.$chars4.$nums.$chars3;
return $Code;
}
}
