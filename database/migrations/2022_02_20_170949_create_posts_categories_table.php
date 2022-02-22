<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('posts_id');
            $table->foreign('posts_id','fk_postcategories_post')
                ->references('id')->on('posts')->onDelete('cascade')->onUpdate('restrict');
            $table->foreign('categories_id','fk_postcategories_categories')
                ->references('id')->on('categories')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('categories_id');
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
        Schema::dropIfExists('posts_categories');
    }
}
