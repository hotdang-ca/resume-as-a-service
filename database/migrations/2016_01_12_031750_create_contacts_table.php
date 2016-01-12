<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactsets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone');
            $table->string('email');
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('skype')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('googleplus')->nullable();
            $table->integer('resume_id')->unsigned();
            $table->foreign('resume_id')->references('id')->on('resumes');
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
        Schema::drop('contactsets');
    }
}
