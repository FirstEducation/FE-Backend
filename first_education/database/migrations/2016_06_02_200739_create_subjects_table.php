<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('class_id')->unsigned();
            $table->foreign('class_id')->references('id')->on('classes');
            $table->boolean('status');
            $table->string('subject_name');
            $table->longText('syllabus');
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
        Schema::drop('class_subjects');
    }
}
