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
        Schema::create('sc_events', function (Blueprint $table) {
            $table->id();
            $table->string('token')->unique();
            $table->string('theme');
            $table->string('sub_theme')->nullable();
            $table->string('badge')->nullable();
            $table->string('address');
            $table->string('city')->nullable();
            $table->foreignId('country_id')->default(162);
            $table->date('event_date')->nullable();
            $table->integer('days')->nullable();
            $table->time('event_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sc_events');
    }
};
