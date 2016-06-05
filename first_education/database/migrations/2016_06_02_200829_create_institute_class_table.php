<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstituteClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institute_classes', function (Blueprint $table) {
            $table->bigInteger('institute_id')->unsigned();;
            $table->foreign('institute_id')->references('id')->on('institutes');
            $table->bigInteger('class_id')->unsigned();;
            $table->foreign('class_id')->references('id')->on('classes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('institute_classes');
    }
}
