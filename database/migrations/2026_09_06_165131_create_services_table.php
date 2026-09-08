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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            // Relasi Foreign Key ke tabel users (Mahasiswa penyedia jasa)
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            // Relasi Foreign Key ke tabel categories
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->decimal('price', 12, 2);
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};