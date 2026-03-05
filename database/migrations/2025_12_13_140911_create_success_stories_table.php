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
        Schema::create('success_stories', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Titlul poveștii
            $table->text('content'); // Am schimbat din 'story' în 'content' ca să se potrivească cu eroarea ta
            $table->string('author_email'); // Folosim email-ul pentru a identifica autorul, e mai simplu
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('success_stories');
    }
};