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
        Schema::create('member_ships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ship_id')->constrained('ships')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('name'); // Org-given ship name (e.g., ICS Solaris)
            $table->boolean('is_owner')->default(true);
            $table->string('role_on_ship')->nullable(); // e.g., Pilot, Engineer
            $table->timestamps();

            // A user shouldn’t have duplicate entries for the same ship type
            $table->unique(['user_id', 'ship_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_ships');
    }
};
