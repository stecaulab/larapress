<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions_roles', function (Blueprint $table) {
            $table->unsignedBigInteger('permissions_id');
            $table->foreign('permissions_id','fk_permissionrole_peermission')
                ->references('id')->on('permissions')->onDelete('cascade')
                ->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('roles_id','fk_permissionrole_role')->on('roles')
                ->references('id')->onDelete('cascade')->onDelete('restrict');
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
        Schema::dropIfExists('permissions_roles');
    }
}
