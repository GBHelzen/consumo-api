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
        Schema::create('arte_artista', function (Blueprint $table) {
            $table->id();
            $table->integer('artista_constituentID');
            $table->integer('arte_objectID');
            
            $table->foreign('artista_constituentID')->references('constituentID')->on('artistas');
            $table->foreign('arte_objectID')->references('objectID')->on('artes');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arte_artistas');
    }
};
