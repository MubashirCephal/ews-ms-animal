<?php

use App\Enums\Identification;
use App\Enums\IdentificationType;
use App\Enums\RegistrationType;
use App\Enums\Unit;
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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('weqaa_record_id')->nullable()->onDelete('cascade');
            $table->foreignId('owner_id')->nullable()->onDelete('cascade');
            $table->foreignId('facility_id')->nullable()->onDelete('set null');
            $table->foreignId('species_id')->constrained()->onDelete('set null');
            $table->foreignId('breed_id')->constrained()->onDelete('set null');
            $table->enum('registration_type', RegistrationType::cases())->nullable();
            $table->integer('age')->nullable();
            $table->string('sex')->nullable();
            $table->string('status')->nullable();
            $table->string('remarks')->nullable();

            $table->foreignId('country_id')->nullable()->nullOnDelete();
            $table->foreignId('province_id')->nullable();
            $table->string('area')->nullable();

            $table->string('nickname')->nullable();
            $table->string('scientific_name')->nullable();
            
            $table->enum('identification', Identification::cases())->nullable();
            $table->string('rfid')->nullable();
            $table->string('branding')->nullable();
            $table->string('ear_tag')->nullable();
            
            $table->string('microchip')->nullable();
            $table->string('pedigree')->nullable();
            $table->boolean('is_exotic')->nullable();

            $table->integer('number_of_males')->comment('only for batch')->nullable();
            $table->integer('number_of_females')->comment('only for batch')->nullable();
            $table->integer('total_number')->comment('only for batch')->nullable();
            $table->enum('unit', Unit::cases())->comment('only for batch')->nullable();
            $table->integer('unit_value')->comment('only for batch')->nullable();
            $table->string('service_id')->nullable();
            $table->boolean('is_consignment_approved')->default(true);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
