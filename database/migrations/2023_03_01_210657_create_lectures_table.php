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
        Schema::create('lectures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('speaker_id');
            $table->foreignId('sc_event_id')->constrained();
            $table->string('topic');
            $table->string('slug')->unique();
            $table->string('lecture_day')->nullable();
            $table->enum('lecture_session', ['morning', 'afternoon', 'evening'])->default('morning');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lectures');
    }
};
