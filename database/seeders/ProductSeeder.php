<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker ;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
$fake=Faker::create();
        foreach(range(1,10) as $index){
        DB::table('products')->insert([
          'name_en' =>$this->faker->name(),
            'name_ar' =>$this->faker->name(),
            'code' => '123456',
            'old_price' =>'50',
            'sale' => '10',
            'price' =>'100',
            'quantity' =>'9',
            'desc_en' =>$this->faker->sentence(),
            'desc_ar' =>$this->faker->sentence(),
            'id_subcategorie'=>$this->faker->number(9),
            'L' =>'10',
            'XL' =>'10',
            'XXL' =>'10',
            'image'=>'1656735837.jpg',


        ]);

        }
    }
}

