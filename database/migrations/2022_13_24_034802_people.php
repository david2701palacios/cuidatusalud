<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NAME_PERSON')->nullable();
            $table->string('LAST_NAME_PERSON')->nullable();
            $table->string('GENDER')->nullable();
            $table->integer('AGE')->nullable();
            $table->integer('ID_USER_FK')->unsigned();

            $table->foreign('ID_USER_FK')->references('id')->on('users');
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
        //
    }
};
