<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_firstname',50);
            $table->string('student_lastname',50);
            $table->string('student_email',50)->unique();
            $table->mediumInteger('student_mobile')->unique();
            $table->string('student_short_address',100);
            $table->string('student_father_name',50);
            $table->string('student_mother_name',50);
            $table->boolean('student_status');
            $table->mediumInteger('emergency_number');
            $table->enum('KYC_tpe', ['PANCARD','ADHARCARD','DRIVING LICENCE','VOTER CARD','INSTITUTE REGISTRATION CARD','OTHER']);
            $table->string('KYC_number',100);
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
        Schema::drop('students');
    }
}
