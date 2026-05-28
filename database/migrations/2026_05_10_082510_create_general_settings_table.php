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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->nullable();
            $table->string('site_tagline')->nullable();
            $table->string('description')->nullable();
            $table->text('footer_text')->nullable();
            $table->string('founded')->nullable();
            $table->string('focus')->nullable();
            $table->string('commitment')->nullable();
            $table->string('language')->nullable();
            $table->string('timezone')->nullable();
            $table->string('recruiting')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_settings');
    }
};
