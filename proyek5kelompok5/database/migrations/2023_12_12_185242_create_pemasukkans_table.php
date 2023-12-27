<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    
    public function up(): void
    {
        Schema::create('pemasukkans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->decimal('uang_masuk', 15, 2);
            $table->decimal('uang_keluar', 15, 2);
            $table->decimal('jumlah_sisa_uang_masuk', 15, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pemasukkans');
    }
};