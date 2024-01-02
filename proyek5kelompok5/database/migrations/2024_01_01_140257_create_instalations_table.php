<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('installations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('capacity')->nullable();
            $table->string('storage')->nullable();
            $table->string('nama');
            $table->string('kota');
            $table->string('hp');
            $table->string('daya');
            $table->text('pesan');
            $table->string('status')->default('pending'); // Add 'status' column with a default value
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('installations');
    }
};
