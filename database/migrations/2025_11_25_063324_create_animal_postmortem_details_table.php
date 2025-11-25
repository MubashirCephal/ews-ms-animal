<?php

use App\Enums\ExaminedOrgan;
use App\Enums\Observation;
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
        Schema::create('animal_postmortem_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('animal_postmortem_id')->constrained();
            $table->foreignId('animal_id')->constrained();
            $table->string('comments')->nullable();
            $table->enum('examined_organ', ExaminedOrgan::cases());
            $table->enum('observation', Observation::cases());
            $table->enum('carcass_condemnation', ['NA', 'Partial', 'Full']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal_postmortem_details');
    }
};
