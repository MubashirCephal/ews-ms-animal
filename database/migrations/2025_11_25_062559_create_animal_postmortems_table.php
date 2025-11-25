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
        Schema::create('animal_postmortems', function (Blueprint $table) {
            $table->id();
            $table->date('date_of_post_mortem');
            $table->integer('no_of_animals_screened');
            $table->integer('no_of_animals_organs_collected');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal_postmortems');
    }
};
