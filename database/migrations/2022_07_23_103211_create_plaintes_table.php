<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaintesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plaintes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plaignant_id')->constrained()
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('numéro_rp');
            $table->string('objet');
            $table->date('date_prejudice');
            $table->string('nom_susp')->nullable();
            $table->string('prenom_susp')->nullable();
            $table->string('pseudo_susp')->nullable();
            $table->string('docimile_susp')->nullable();
            $table->string('contact_susp')->nullable();
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
        Schema::dropIfExists('plaintes');
    }
}
