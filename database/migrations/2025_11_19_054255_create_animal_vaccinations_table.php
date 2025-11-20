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
        Schema::create('animal_vaccinations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('animal_id')->constrained()->onDelete('cascade');
            $table->foreignId('vaccination_id')->onDelete('set null');
            $table->foreignId('facility_id')->nullable();
            $table->boolean('is_done')->default(false);
            // $table->boolean('is_done')->nullable()->default(null)->change();
            $table->date('vaccination_done_on_date')->nullable();
            $table->date('due_date')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal_vaccinations');
    }
};
