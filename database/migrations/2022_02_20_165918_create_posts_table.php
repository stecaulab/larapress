<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id','fk_comment_user')
                    ->references('id')->on('users')->onDelete('cascade')->onUpdate('restrict');
            $table->string('titolo',150);
            $table->string('slug',150)->unique();
            $table->string('description',255);
            $table->text('content');
           //$table->foreign('posts_id','fk_post_user')
                    //->references('id')->on('user')->onDelete('cascade')->onUpdate('restrict');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('posts');
    }
}
