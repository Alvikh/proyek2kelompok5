<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolarPanelCapacitiesTable extends Migration
{
    public function up()
    {
        Schema::create('solar_panel_capacities', function (Blueprint $table) {
            $table->id();
            $table->string('capacity');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('solar_panel_capacities');
    }
}