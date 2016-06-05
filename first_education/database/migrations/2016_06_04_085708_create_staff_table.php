<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id');
            $table->string('staff_name',50);
            $table->string('staff_email',50);
            $table->dateTime('staff_joining_date');
            $table->string('staff_contact');
            $table->string('staff_address',100);
            $table->integer('designation_id');
            $table->string('image',100);
            $table->integer('institute_id');
            $table->foreign('institute_id')->references('id')->on('institutes');
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
        Schema::drop('users');
    }
}
