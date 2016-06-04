<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('institute_name',100);
            $table->string('institute_short_name',20);
            $table->enum('institute_type', ['SCHOOL','COLLEGE','COACHING']);
            $table->mediumInteger('institute_poc');
            $table->string('institute_email',50);
            $table->string('institute_short_address',100);
            $table->string('institute_registration',50);
            $table->string('institute_website',50);
            $table->mediumInteger('institute_contact');
            $table->string('institute_owner_name',50);
            $table->string('institute_owner_email',50);
            $table->integer('institute_parent');
            $table->mediumInteger('institute_owner_mobile');
            $table->boolean('institute_status');
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
        Schema::drop('institutes');
    }
}
