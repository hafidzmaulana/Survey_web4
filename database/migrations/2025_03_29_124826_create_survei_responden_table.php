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
        Schema::create('survei_responden', function (Blueprint $table) {
            $table->id();
            $table->foreignId('survei_id')->constrained('surveis')->onDelete('cascade');
            $table->foreignUuid('responden_id')->nullable()->constrained('responden')->onDelete('cascade');
            $table->timestamp('tanggal_mengisi');
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survei_responden');
    }
};
