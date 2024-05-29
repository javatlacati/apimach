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
        Schema::create('cell_details', function (Blueprint $table) {
            $table->id();
            $table->string('street');
            $table->string('label');
            $table->foreignId('lat_lng_expression_id')->constrained()->onDelete('cascade');
            $table->foreignId('cell_location_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cell_details');
    }
};
