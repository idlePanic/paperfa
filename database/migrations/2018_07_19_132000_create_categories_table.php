<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fa_name');
            $table->string('eng_name');
            $table->string('type');
            $table->string('logo')->default('default.png');
            $table->timestamps();
        });
//        Schema::create('article_category', function (Blueprint $table) {
//            $table->integer('article_id')->unsigned()->index();
//            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade')->onUpdate('cascade');
//            $table->integer('category_id')->unsigned()->index();
//            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories');
    }
}
