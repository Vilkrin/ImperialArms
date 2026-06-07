<?php

namespace App\Services;

use App\Models\SeoSetting;
use Illuminate\Support\Facades\File;

class SeoFileGenerator
{
  public function generate(?SeoSetting $seoSetting = null): void
  {
    $seoSetting ??= SeoSetting::first();

    $this->generateRobots($seoSetting);
    $this->generateLlms($seoSetting);
  }

  public function generateRobots(?SeoSetting $seoSetting = null): void
  {
    $seoSetting ??= SeoSetting::first();

    $allowSearch = $seoSetting?->allow_search_indexing ?? true;
    $allowAiSearch = $seoSetting?->allow_ai_search ?? true;
    $allowAiTraining = $seoSetting?->allow_ai_training ?? false;

    $lines = [];

    $lines[] = 'User-agent: *';
    $lines[] = $allowSearch ? 'Allow: /' : 'Disallow: /';
    $lines[] = 'Disallow: /admin';
    $lines[] = '';

    $lines[] = 'User-agent: GPTBot';
    $lines[] = $allowAiSearch ? 'Allow: /' : 'Disallow: /';
    $lines[] = '';

    $lines[] = 'User-agent: ClaudeBot';
    $lines[] = $allowAiSearch ? 'Allow: /' : 'Disallow: /';
    $lines[] = '';

    $lines[] = 'User-agent: PerplexityBot';
    $lines[] = $allowAiSearch ? 'Allow: /' : 'Disallow: /';
    $lines[] = '';

    $lines[] = 'User-agent: Google-Extended';
    $lines[] = $allowAiTraining ? 'Allow: /' : 'Disallow: /';
    $lines[] = '';

    $lines[] = 'User-agent: CCBot';
    $lines[] = $allowAiTraining ? 'Allow: /' : 'Disallow: /';
    $lines[] = '';

    $lines[] = 'Sitemap: ' . url('/sitemap.xml');

    File::put(public_path('robots.txt'), implode(PHP_EOL, $lines) . PHP_EOL);
  }

  public function generateLlms(?SeoSetting $seoSetting = null): void
  {
    $seoSetting ??= SeoSetting::first();

    $allowAiSearch = $seoSetting?->allow_ai_search ?? true;
    $allowAiTraining = $seoSetting?->allow_ai_training ?? false;

    if (! $allowAiSearch) {
      File::put(public_path('llms.txt'), "# Imperial Arms\n\nAI search access is not allowed.\n");
      return;
    }

    $siteName = $seoSetting?->meta_title ?: config('app.name', 'Imperial Arms');

    $description = $seoSetting?->meta_description
      ?: 'Imperial Arms is a Star Citizen organization focused on mercenary services, logistics, and operations across the verse.';

    $aiTrainingText = $allowAiTraining ? 'allowed' : 'not allowed';

    $content = <<<TXT
# {$siteName}

{$description}

## Important Pages

- Home: {$this->url('/')}
- Recruitment: {$this->url('/recruitment')}
- Fleet: {$this->url('/fleet')}
- Blog: {$this->url('/blog')}

## AI Usage

AI search access is allowed.
AI training access is {$aiTrainingText}.

TXT;

    File::put(public_path('llms.txt'), $content);
  }

  private function url(string $path): string
  {
    return url($path);
  }
}
