<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaignantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plaignants', function (Blueprint $table) {
            $table->id();
            $table->string('civilite');
            $table->string('nom');
            $table->string('prenoms');
            $table->date('date_naiss');
            $table->string('lieu_naiss');
            $table->string('address_geo');
            $table->string('num_phone1');
            $table->string('num_phone2')->nullable();
            $table->string('email');
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
        Schema::dropIfExists('plaignants');
    }
}
