<?php

declare(strict_types=1);

namespace Rinvex\Tags\Console\Commands;

use Illuminate\Console\Command;

class PublishCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rinvex:publish:tags {--force : Overwrite any existing files.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish Rinvex Tags Resources.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->warn('Publish rinvex/tags:');
        $this->call('vendor:publish', ['--tag' => 'rinvex-tags-config', '--force' => $this->option('force')]);
    }
}
