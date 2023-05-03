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
        Schema::create('perangkatdesas', function (Blueprint $table) {
            $table->id();
            $table->string('fotoperangkat');
            $table->string('nama');
            $table->string('jabatan');
            $table->string('masajabatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perangkatdesas');
    }
};
