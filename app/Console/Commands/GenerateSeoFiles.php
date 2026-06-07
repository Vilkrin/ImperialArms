<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\SeoFileGenerator;

class GenerateSeoFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seo:generate-files';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate robots.txt and llms.txt from SEO settings.';

    /**
     * Execute the console command.
     */
    public function handle(SeoFileGenerator $seoFileGenerator): int
    {
        $seoFileGenerator->generate();

        $this->info('SEO files generated.');

        return self::SUCCESS;
    }
}
