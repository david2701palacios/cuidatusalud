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
        Schema::create('medical_controls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NAME_DOCTOR')->nullable();
            $table->string('ROL_DOCTOR')->nullable();
            $table->date('DATE_CONTROL')->nullable();
            $table->string('OBSERVATIONS')->nullable();
            $table->integer('ID_PERSON_FK')->unsigned();

            $table->foreign('ID_PERSON_FK')->references('id')->on('people');
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
