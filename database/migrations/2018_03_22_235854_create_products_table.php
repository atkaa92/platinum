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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->text('hy_desc');
            $table->text('ru_desc');
            $table->text('en_desc');
            $table->string('interior')->nullable();
            $table->string('fuel')->nullable();
            $table->string('gearbox');
            $table->string('body');
            $table->integer('manufacture');
            $table->enum('location',['armenia','usa']);
            $table->integer('year');
            $table->integer('price');
            $table->integer('doors');
            $table->integer('odometer');
            $table->timestamps();
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
}
