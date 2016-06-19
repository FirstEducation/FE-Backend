<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthenticationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authentication', function (Blueprint $table) {
            $table->increments('id');
            $table->string('authentication_type',100);
            $table->bigInteger('loginId'); 
            $table->string('userName')
            $table->string('passWord')
            $table->dateTime('lastLogin')
            $table->string('sessionId');
            $table->string('loginMedium');
            $table->dateTime('loginExpiryDate');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('authentication');
    }
}
