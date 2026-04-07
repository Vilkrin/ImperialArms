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
        Schema::create('user_org_roles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('org_role_id')->constrained('org_roles')->cascadeOnDelete();
            $table->boolean('confirmed')->default(false); // user must accept
            $table->timestamps();

            // Prevent duplicate role assignments for the same user
            $table->unique(['user_id', 'org_role_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_org_roles');
    }
};
