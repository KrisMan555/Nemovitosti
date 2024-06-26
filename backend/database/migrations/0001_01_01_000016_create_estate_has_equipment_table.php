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
        Schema::create('estate_has_equipment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('estate_id')->constrained('estates')->onDelete('cascade');;
            $table->foreignId('equipment_id')->constrained('estate_additional_equipment');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estate_has_equipment');
    }
};
