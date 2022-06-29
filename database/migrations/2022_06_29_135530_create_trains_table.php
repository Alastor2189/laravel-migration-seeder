<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', '20');
            $table->string('departure_station', '20');
            $table->string('arrival_stazion', '20');
            $table->time('departure_time', '4');
            $table->time('arrive_time', '4');
            $table->string('race_ID', '5');
            $table->unsignedTinyInteger('wagon_num');
            $table->boolean('punctual')->default(1);
            $table->time('delay', '4');
            $table->boolean('cancelled')->default(0);
            $table->timestamps();
        });
    }

    //     Azienda
    // Stazione di partenza
    // Stazione di arrivo
    // Orario di partenza
    // Orario di arrivo
    // Codice Treno
    // Numero Carrozze
    // In orario
    // Cancellato

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
