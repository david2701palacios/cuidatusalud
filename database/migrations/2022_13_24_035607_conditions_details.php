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
        Schema::create('conditions_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ID_PERSON_FK')->unsigned();
            $table->integer('ID_HEALTHY_CONDITIONS_FK')->unsigned();

            $table->foreign('ID_PERSON_FK')->references('id')->on('people');
            $table->foreign('ID_HEALTHY_CONDITIONS_FK')->references('id')->on('healthy_conditions');
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
