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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            //type 
            $table->string('type');
            //Ring
            $table->string('ring');
            //Sensor
            $table->string('sensor');
            //Status
            $table->enum('status',['Détecté','Non Détecté']);
            //Current Area
            $table->string('current_area');
            //Detection
            $table->dateTime('detection');
            //Site
            $table->string('site');
            //State of the material
            $table->enum('state',['Conforme','À réviser']);
            //Next Control
            $table->date('next_control');
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
        Schema::dropIfExists('materials');
    }
};
