<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_roles', function (Blueprint $table) {
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id','fk_usersrol_user')
                ->references('id')->on('users')->onDelete('cascade')->onUpdate('restrict');
            $table->foreign('roles_id','fk_usersrol_role')->on('roles')
                ->references('id')->onDelete('cascade')->onUpdate('restrict');
            $table->unsignedBigInteger('roles_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_roles');
    }
}
