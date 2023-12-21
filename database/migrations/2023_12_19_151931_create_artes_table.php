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
        Schema::create('artes', function (Blueprint $table) {
            $table->id();
            $table->integer('objectID')->unique();
            $table->string('title');
            $table->string('constituentID');
            // $table->foreign('artist')->references('displayName')->on('artists');
            // $table->foreign('constituentID')->references('constituentID')->on('artistas');
            // $table->foreign('artistBio')->references('artistBio')->on('artists');
            // $table->foreign('nationality')->references('nationality')->on('artists');
            // $table->foreign('beginDate')->references('beginDate')->on('artists');
            // $table->foreign('endDate')->references('endDate')->on('artists');
            // $table->foreign('gender')->references('gender')->on('artists');
            $table->string('date')->nullable();
            $table->string('medium')->nullable();
            $table->string('dimensions')->nullable();
            $table->string('creditLine')->nullable();
            $table->string('accessionNumber');
            $table->string('classification')->nullable();
            $table->string('department');
            $table->string('dateAcquired')->nullable();
            $table->string('cataloged');
            $table->string('url')->nullable();
            $table->string('thumbnailUrl')->nullable();
            $table->float('circumference')->nullable();
            $table->float('depth')->nullable();
            $table->float('diameter')->nullable();
            $table->float('height')->nullable();
            $table->float('length')->nullable();
            $table->float('weight')->nullable();
            $table->float('width')->nullable();
            $table->float('seatHeight')->nullable();
            $table->integer('duration')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artes');
    }
};
