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
        Schema::create('lecture_docs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lecture_id')->constrained();
            $table->string('filename');
            $table->string('filetype')->nullable();
            $table->string('filesize')->nullable();
            $table->boolean('available')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecture_docs');
    }
};
