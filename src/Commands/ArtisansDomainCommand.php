<?php

namespace Ajoy39\ArtisansDomain\Commands;

use Illuminate\Console\Command;

class ArtisansDomainCommand extends Command
{
    public $signature = 'artisans-domain';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
