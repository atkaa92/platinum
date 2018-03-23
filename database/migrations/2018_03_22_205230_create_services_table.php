<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hy_title')->nullable();
            $table->string('hy_desc_title')->nullable();
            $table->longText('hy_desc')->nullable();
            $table->string('hy_features_title')->nullable();
            $table->longText('hy_features')->nullable();
            $table->string('en_title')->nullable();
            $table->string('en_desc_title')->nullable();
            $table->longText('en_desc')->nullable();
            $table->string('en_features_title')->nullable();
            $table->longText('en_features')->nullable();
            $table->string('ru_title')->nullable();
            $table->string('ru_desc_title')->nullable();
            $table->longText('ru_desc')->nullable();
            $table->string('ru_features_title')->nullable();
            $table->longText('ru_features')->nullable();
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
        Schema::dropIfExists('services');
    }
}
