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
        Schema::create('persons_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ID_PRINCIPAL_PERSON_FK')->unsigned();
            $table->integer('ID_PERSON_IN_CHARGUE_FK')->unsigned();

            $table->foreign('ID_PRINCIPAL_PERSON_FK')->references('id')->on('people');
            $table->foreign('ID_PERSON_IN_CHARGUE_FK')->references('id')->on('people');
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
