<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('category')->nullable();
            $table->string('image')->nullable();
            $table->string('descriptiom')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
