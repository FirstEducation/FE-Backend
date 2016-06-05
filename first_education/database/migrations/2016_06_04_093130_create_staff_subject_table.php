<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_subject', function (Blueprint $table) {
            $table->integer('staff_id');
            $table->foreign('staff_id')->reference('id')->on('staff');
            $table->integer('subject_id');
            $table->foreign('subject_id')->reference('id')->on('class_subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('staff_subject');
    }
}
