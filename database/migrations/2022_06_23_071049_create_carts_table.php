<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('quantity');
            $table->string('name', 100);
            $table->decimal('price', $precision = 8, $scale = 2);
            $table->char('image', 100);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();        });

        // Schema::table('carts', function (Blueprint $table) {
        //         // $table->foreign('product_id')->references('id')->on('products');
        //         $table->foreign('user_id')->references('id')->on('users');


        // });
        Schema::table('carts', function (Blueprint $table) {

            $table->foreign('user_id')->references('id')->on('users');
        //    $table->foreign('product_id')->references('id')->on('products');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
};




