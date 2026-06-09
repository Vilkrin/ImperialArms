<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\User;
use App\Models\MemberShip;

class UserProfile extends Component
{
    public User $user;

    public $ships;
    public $posts;

    public string $avatarUrl;

    public function mount(User $user): void
    {
        $this->user = $user;

        $this->avatarUrl = $user->getFirstMediaUrl('avatars')
            ?: asset('assets/avatars/default-avatar.png');

        $this->ships = MemberShip::query()
            ->with('ship')
            ->where('user_id', $this->user->id)
            ->latest()
            ->limit(4)
            ->get();

        $this->posts = Post::query()
            ->with('categories')
            ->where('user_id', $this->user->id)
            ->where('status', 'published')
            ->where('is_published', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->latest('published_at')
            ->limit(3)
            ->get();
    }

    public function postExcerpt(Post $post): string
    {
        return str($post->body)
            ->stripTags()
            ->limit(140);
    }

    public function postImage(Post $post): ?string
    {
        if (method_exists($post, 'getFirstMediaUrl')) {
            return $post->getFirstMediaUrl('featured_images')
                ?: $post->getFirstMediaUrl('featured_image');
        }

        return null;
    }

    public function render()
    {
        return view('livewire.user-profile');
    }
}
