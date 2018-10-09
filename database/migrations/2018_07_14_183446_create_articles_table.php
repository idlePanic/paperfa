<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fa_name')->unique();
            $table->string('eng_name')->unique();
            $table->string('author');
            $table->string('supercat_name');
            $table->integer('cat_id')->unsigned()->index();
            $table->string('cat_name');
            $table->float('price');
            $table->string('logo')->default('default.png');
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
        Schema::drop('articles');
    }
}
