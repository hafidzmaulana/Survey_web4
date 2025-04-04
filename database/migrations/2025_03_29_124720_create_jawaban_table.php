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
        Schema::create('jawaban', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('responden_id')->nullable()->constrained('responden')->onDelete('cascade');
            $table->foreignId('pertanyaan_id')->constrained('pertanyaan')->onDelete('cascade');
            $table->text('jawaban');
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jawaban');
    }
};
