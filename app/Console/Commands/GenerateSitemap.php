<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.xml file.';

    /**
     * Execute the console command.
     */
    public function handle() int
    {
        $sitemap = Sitemap::create()
            ->add(
                Url::create(url('/'))
                    ->setPriority(1.0)
            )
            ->add(
                Url::create(url('/about'))
                    ->setPriority(0.8)
            )
            ->add(
                Url::create(url('/blog'))
                    ->setPriority(0.8)
            )
            ->add(
                Url::create(url('/fleet'))
                    ->setPriority(0.8)
            )
            ->add(
                Url::create(url('/recruitment'))
                    ->setPriority(0.9)
            )
            ->add(
                Url::create(url('/contact'))
                    ->setPriority(0.7)
            )
            ->add(
                Url::create(url('/services'))
                    ->setPriority(0.8)
            );

        Post::query()
            ->where('status', 'published')
            ->where('is_published', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->latest('published_at')
            ->get()
            ->each(function (Post $post) use ($sitemap) {
                $sitemap->add(
                    Url::create(route('blog.show', $post->slug))
                        ->setLastModificationDate($post->updated_at)
                        ->setPriority(0.7)
                );
            });

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully.');

        return self::SUCCESS;
    }
}
