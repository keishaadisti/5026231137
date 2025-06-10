<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mouse', function (Blueprint $table) {
            $table->id();
            $table->string('merkmouse', 25);
            $table->integer('hargamouse');
            $table->boolean('tersedia');
            $table->float('berat');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mouse');
    }
};
