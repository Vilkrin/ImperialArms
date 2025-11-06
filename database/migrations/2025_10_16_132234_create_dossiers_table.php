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
        Schema::create('dossiers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Core org details
            $table->string('rank')->nullable();                  // e.g. Captain, Ensign, etc.
            $table->string('division')->nullable();              // e.g. Command, Engineering, Medical
            $table->string('status')->default('Active');         // e.g. Active, Reserve, Retired

            // Leadership-only fields
            $table->text('leadership_notes')->nullable();       // Private notes from org leadership

            // Record keeping
            $table->json('service_record')->nullable();         // Promotion / mission history
            $table->json('commendations')->nullable();          // Awards / achievements
            $table->json('disciplinary_actions')->nullable();   // Warnings / infractions

            // Optional metadata
            $table->date('enlistment_date')->nullable();
            $table->date('discharge_date')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dossiers');
    }
};
