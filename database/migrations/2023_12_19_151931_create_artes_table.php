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
            $table->integer('objectID');
            $table->primary('objectID');
            $table->string('title');
            $table->unsignedBigInteger('artist_id');
            // $table->foreign('artist')->references('displayName')->on('artists');
            $table->foreign('artist_id')->references('constituentID')->on('artistas');
            // $table->foreign('artistBio')->references('artistBio')->on('artists');
            // $table->foreign('nationality')->references('nationality')->on('artists');
            // $table->foreign('beginDate')->references('beginDate')->on('artists');
            // $table->foreign('endDate')->references('endDate')->on('artists');
            // $table->foreign('gender')->references('gender')->on('artists');
            $table->string('date');
            $table->string('medium')->nullable();
            $table->string('dimensions')->nullable();
            $table->string('creditLine');
            $table->string('acessionNumber');
            $table->string('classification');
            $table->string('department');
            $table->string('dateAcquired');
            $table->string('cataloged');
            $table->string('url')->nullable();
            $table->string('thumbnailUrl')->nullable();
            $table->float('circumference');
            $table->float('depth');
            $table->float('diameter');
            $table->float('height');
            $table->float('length');
            $table->float('weight');
            $table->float('width');
            $table->float('seatHeight');
            $table->integer('duration');

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
