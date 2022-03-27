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
        Schema::create('indicators_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ID_PERSON_FK')->unsigned();
            $table->integer('ID_HEALTHY_INDICATORS_FK')->unsigned();
            $table->integer('VALUE_INDICATOR')->nullable();
            
            $table->foreign('ID_PERSON_FK')->references('id')->on('people');
            $table->foreign('ID_HEALTHY_INDICATORS_FK')->references('id')->on('healthy_indicators');
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
