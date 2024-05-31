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
        Schema::create('achivements', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('name');
            $table->string('title');
            $table->string('description');
            $table->integer('image'); // $table->string('image');
            $table->integer('age');
//            $table->string('link');
            $table->foreignId('categoria_logro_id')->constrained()->onDelete('cascade');
            $table->integer('quantity');
            $table->boolean('isMale');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achivements');
    }
};
