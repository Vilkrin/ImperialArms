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
        Schema::create('forum_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('forums', function (Blueprint $table) {
            $table->id();
            $table->foreignId('forum_category_id')->constrained('forum_categories')->cascadeOnDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('icon')->nullable();
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->boolean('is_locked')->default(false);
            $table->unsignedInteger('topics_count')->default(0);
            $table->unsignedInteger('posts_count')->default(0);
            $table->foreignId('last_post_id')->nullable();
            $table->timestamp('last_post_at')->nullable();
            $table->timestamps();
        });

        Schema::create('forum_permission_overrides', function (Blueprint $table) {
            $table->id();

            $table->foreignId('forum_category_id')
                ->nullable()
                ->constrained('forum_categories')
                ->cascadeOnDelete();

            $table->foreignId('forum_id')
                ->nullable()
                ->constrained('forums')
                ->cascadeOnDelete();

            $table->foreignId('role_id')
                ->nullable()
                ->constrained('roles')
                ->cascadeOnDelete();

            $table->string('guest_key')->nullable();

            $table->string('permission');
            $table->boolean('allowed')->default(false);

            $table->timestamps();

            $table->index([
                'forum_category_id',
                'forum_id',
                'role_id',
                'guest_key',
            ], 'forum_permission_scope_index');

            $table->index('permission');
        });

        Schema::create('forum_topics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('forum_id')->constrained('forums')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('slug');
            $table->longText('body')->nullable();
            $table->string('type')->default('normal');
            $table->string('status')->default('open');
            $table->boolean('is_pinned')->default(false);
            $table->boolean('is_locked')->default(false);
            $table->boolean('is_approved')->default(true);
            $table->unsignedInteger('views_count')->default(0);
            $table->unsignedInteger('replies_count')->default(0);
            $table->foreignId('last_post_id')->nullable();
            $table->foreignId('last_post_user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('last_post_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['forum_id', 'slug']);
        });

        Schema::create('forum_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('forum_topic_id')->constrained('forum_topics')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->longText('body');
            $table->boolean('is_approved')->default(true);
            $table->boolean('is_hidden')->default(false);
            $table->foreignId('hidden_by')->nullable()->constrained('users')->nullOnDelete();
            $table->text('hidden_reason')->nullable();
            $table->foreignId('edited_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('edited_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('forums', function (Blueprint $table) {
            $table->foreign('last_post_id')->references('id')->on('forum_posts')->nullOnDelete();
        });

        Schema::table('forum_topics', function (Blueprint $table) {
            $table->foreign('last_post_id')->references('id')->on('forum_posts')->nullOnDelete();
        });

        Schema::create('forum_topic_tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('color')->nullable();
            $table->timestamps();
        });

        Schema::create('forum_topic_tag', function (Blueprint $table) {
            $table->foreignId('forum_topic_id')->constrained('forum_topics')->cascadeOnDelete();
            $table->foreignId('forum_topic_tag_id')->constrained('forum_topic_tags')->cascadeOnDelete();

            $table->primary(['forum_topic_id', 'forum_topic_tag_id']);
        });

        Schema::create('forum_user_read_states', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('forum_id')->nullable()->constrained('forums')->cascadeOnDelete();
            $table->foreignId('forum_topic_id')->nullable()->constrained('forum_topics')->cascadeOnDelete();
            $table->timestamp('last_read_at')->nullable();
            $table->timestamps();

            $table->unique(['user_id', 'forum_id', 'forum_topic_id'], 'forum_read_state_unique');
        });

        Schema::create('forum_reactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('forum_post_id')->constrained('forum_posts')->cascadeOnDelete();
            $table->string('type')->default('like');
            $table->timestamps();

            $table->unique(['user_id', 'forum_post_id', 'type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forum_reactions');
        Schema::dropIfExists('forum_user_read_states');
        Schema::dropIfExists('forum_topic_tag');
        Schema::dropIfExists('forum_topic_tags');
        Schema::dropIfExists('forum_permission_overrides');

        Schema::table('forum_topics', function (Blueprint $table) {
            $table->dropForeign(['last_post_id']);
        });

        Schema::table('forums', function (Blueprint $table) {
            $table->dropForeign(['last_post_id']);
        });

        Schema::dropIfExists('forum_posts');
        Schema::dropIfExists('forum_topics');
        Schema::dropIfExists('forums');
        Schema::dropIfExists('forum_categories');
    }
};
