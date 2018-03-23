<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('products', function (Blueprint $table) {
//            $table->increments('id');
//            $table->string('en_name');
//            $table->string('ru_name');
//            $table->string('uk_name');
//            $table->string('desc_name');
//            $table->string('desc_name');
//            $table->timestamps();
//        });
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
}
