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
        Schema::create('org_role_spatie_role', function (Blueprint $table) {
            $table->id();
            $table->foreignId('org_role_id')->constrained('org_roles')->cascadeOnDelete();
            $table->foreignId('role_id')->constrained('roles')->cascadeOnDelete(); // Spatie roles table
            $table->timestamps();

            // Don’t map the same org_role to the same spatie role twice
            $table->unique(['org_role_id', 'role_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('org_role_spatie_role');
    }
};
