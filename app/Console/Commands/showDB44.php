<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class showDB44 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'showDB44';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show me the current database';

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
     * @return int
     */
    public function handle()
    {
        //return 0;
        $this->info('output db is: '.DB::connection()->getDatabaseName());
    }
}
