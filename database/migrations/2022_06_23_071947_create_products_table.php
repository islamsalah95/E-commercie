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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_subcategories');
            $table->char('name_en');
            $table->char('name_ar');
            $table->integer('quantity');
            $table->decimal('old_price');
            $table->decimal('sale');
            $table->decimal('price');
            $table->char('desc_en');
            $table->char('desc_ar');
            $table->integer('code')->unique();
            $table->char('image');
            $table->char('secondimage');
            $table->tinyInteger('status')->default('1');
            $table->bigInteger('id_brand');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreign('id_subcategories')->references('id')->on('subcategories');

        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};

