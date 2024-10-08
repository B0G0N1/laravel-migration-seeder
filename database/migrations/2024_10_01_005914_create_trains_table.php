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
        // Crea la tabella 'trains' con i campi necessari
        Schema::create('trains', function (Blueprint $table) {
            $table->id(); // Chiave primaria auto-incrementante
            $table->string('company');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code');
            $table->integer('number_of_carriages');
            $table->boolean('on_time')->default(true);
            $table->boolean('cancelled')->default(false);
            $table->timestamps(); // Timestamp per 'created_at' e 'updated_at'
        });
    }    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Elimina la tabella 'trains' se esiste
        Schema::dropIfExists('trains');
    }
};
