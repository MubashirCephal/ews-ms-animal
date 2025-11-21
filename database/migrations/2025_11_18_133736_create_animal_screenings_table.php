<?php

use App\Enums\ScreeningResult;
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
        Schema::create('animal_screenings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('animal_id');
            $table->enum('screening_result', ScreeningResult::cases());
            $table->string('remarks')->nullable();
            $table->timestamps();
        });
    }

/**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal_screenings');
    }
};
