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
        Schema::create('artistas', function (Blueprint $table) {
            $table->string('constituentID');
            $table->primary('constituentID');
            $table->string('displayName');
            $table->string('artistBio')->nullable();
            $table->string('nationality')->nullable();
            $table->string('gender')->nullable();
            $table->string('beginDate');
            $table->string('endDate');
            $table->string('wikiQID')->nullable();
            $table->integer('ULAN')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artistas');
    }
};
