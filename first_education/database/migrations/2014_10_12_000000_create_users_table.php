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
        Schema::create('Authentications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('login_id')->unique();
            $table->enum('auth_type',['INSTITUTE','STUDENT','ADMIN','PARTNER']);
            $table->string('username')->unique();
            $table->string('password');
            $table->boolean('auth_status');
            $table->enum('login_medium',['APP','WEB']);
            $table->dateTime('last_login');
            $table->dateTime('login_expiry');
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
