<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CarsModelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models', function (Blueprint $table){
            $table->increments('id');
            $table->string('hy_name');
            $table->string('ru_name');
            $table->string('en_name');
            $table->integer('mark_id')->unsigned();

            $table->foreign('mark_id')
                ->references('id')->on('manufacturers')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
