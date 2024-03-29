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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->string('tarifa');
            $table->unsignedBigInteger('place_id');
            $table->unsignedBigInteger('lenguage_id');
            $table->foreign('place_id')->references('id')->on('places')->onDelete('cascade');
            $table->foreign('lenguage_id')->references('id')->on('lenguages')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
