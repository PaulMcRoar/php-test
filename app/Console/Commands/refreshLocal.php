<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Integrations\RickAndMortyAPI\Consumer;

class refreshLocal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'refresh:local';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refresh the local copy of the R+M data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $consumer = new \App\Integrations\RickAndMortyAPI\Consumer();
        $consumer->refreshLocal();
    }
}
