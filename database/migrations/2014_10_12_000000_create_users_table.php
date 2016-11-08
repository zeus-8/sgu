<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('ci')->unique()->unsigned();
            $table->integer('telef1')->unsigned();
            $table->integer('telef2')->unsigned();
            $table->string('email')->unique();
            $table->string('direccion');
            $table->string('password');
            $table->string('name_user');
            $table->boolean('active')->default(true); //con este campo se activa o desactiva al usuario
            $table->integer('rol'); //con este campo el usuario obtiene los permisos para el sistema
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
