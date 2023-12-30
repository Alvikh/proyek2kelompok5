<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstallationsTable extends Migration
{
    public function up()
    {
        Schema::create('installations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('capacity')->nullable();
            $table->integer('storage')->nullable();
            $table->string('nama');
            $table->string('kota');
            $table->string('hp');
            $table->string('daya');
            $table->text('pesan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('installations');
    }
}
