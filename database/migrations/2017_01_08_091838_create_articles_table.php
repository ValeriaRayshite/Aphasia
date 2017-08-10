<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('slug');
            $table->string('section');
	    $table->boolean('en')->default(false);
	    $table->boolean('ru')->default(false);
            $table->string('title_en')->nullable()->unique();
            $table->string('title_ru')->nullable()->unique();
            $table->mediumText('content_en')->nullable();
            $table->mediumText('content_ru')->nullable();
            
            $table->boolean('published')->default(false);

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
