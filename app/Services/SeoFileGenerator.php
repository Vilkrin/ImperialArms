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
      ?: 'Imperial Arms is a Star Citizen organization focused on mercenary services, logistics, mercenary operations, and community activity across the verse.';

    $aiTrainingText = $allowAiTraining ? 'allowed' : 'not allowed';

    $content = <<<TXT
# {$siteName}

{$description}

## Site Purpose

Imperial Arms is a Star Citizen organization website for presenting organization information, recruitment details, fleet information, blog posts, services, and community content.

## Important Pages

- Home: {$this->url('/')}
- About: {$this->url('/about')}
- Blog: {$this->url('/blog')}
- Fleet Roster: {$this->url('/fleet')}
- Recruitment: {$this->url('/recruitment')}
- Contact: {$this->url('/contact')}
- Services: {$this->url('/services')}

## Content Notes

The blog contains organization updates, announcements, and related Star Citizen content.
The fleet roster contains ship and fleet information for the organization.
The recruitment page contains joining information for prospective members.

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
