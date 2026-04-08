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
        Schema::create('ships', function (Blueprint $table) {
            $table->id();
            $table->string('manufacturer');
            $table->string('model');
            $table->string('class')->nullable();
            $table->string('role')->nullable();
            $table->string('size')->nullable();
            $table->unsignedSmallInteger('crew_required')->nullable();
            $table->unsignedInteger('cargo_capacity')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();

            $table->unique(['manufacturer', 'model']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ships');
    }
};
