<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNationalidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nationalids', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('nationalid');
            $table->timestamp('created_at')->useCurrent();
        });

        Schema::table('nationalids', function (Blueprint $table) {
            $table->unique('nationalid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nationalids');
    }
}

