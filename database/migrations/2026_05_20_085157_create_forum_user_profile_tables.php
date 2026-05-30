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
        Schema::create('forum_ranks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->unsignedInteger('min_posts')->nullable();
            $table->boolean('is_special')->default(false);
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });

        Schema::create('forum_user_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained()->cascadeOnDelete();
            $table->foreignId('rank_id')->nullable()->constrained('forum_ranks')->nullOnDelete();
            $table->unsignedInteger('posts_count')->default(0);
            $table->unsignedInteger('topics_count')->default(0);
            $table->unsignedInteger('warnings_count')->default(0);
            $table->unsignedInteger('warning_points')->default(0);

            $table->boolean('auto_subscribe_topics')->default(true);
            $table->boolean('auto_subscribe_replies')->default(true);
            $table->boolean('email_topic_notifications')->default(true);
            $table->boolean('email_forum_notifications')->default(true);
            $table->boolean('show_online_status')->default(true);

            $table->timestamp('forum_banned_until')->nullable();
            $table->timestamp('forum_muted_until')->nullable();
            $table->timestamp('last_forum_activity_at')->nullable();
            $table->timestamps();
        });

        Schema::create('forum_user_ranks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('forum_rank_id')->constrained('forum_ranks')->cascadeOnDelete();
            $table->foreignId('assigned_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('assigned_at')->nullable();
            $table->timestamps();

            $table->unique(['user_id', 'forum_rank_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forum_user_ranks');
        Schema::dropIfExists('forum_user_profiles');
        Schema::dropIfExists('forum_ranks');
    }
};
