<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('keranjangbelanja', function (Blueprint $table) {
            $table->id();
            $table->string('KodeBarang');
            $table->string('NamaBarang');
            $table->integer('Jumlah');
            $table->decimal('Harga', 10, 2);         // untuk menyimpan format harga seperti 20000.00
            $table->decimal('TotalHarga', 12, 2);    // untuk total harga dengan format Rpxx.xxx
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('keranjangbelanja');
    }
};
