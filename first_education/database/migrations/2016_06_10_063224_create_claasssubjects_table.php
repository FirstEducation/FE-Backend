<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaasssubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classsubjects', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('classId')->references('id')->on('Classes');
            $table->string('Subject name',50);
            $table->text('syllabus',100);            
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
        Schema::drop('classsubjects');
    }
}
