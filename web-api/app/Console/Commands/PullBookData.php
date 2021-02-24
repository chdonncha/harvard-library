<?php

namespace App\Console\Commands;

use App\Http\Controllers\BookController;
use Illuminate\Console\Command;

class PullBookData extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'library:pull';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Pull available data from Harvard Library and populate into DB';

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
     */
    public function handle()
    {
        BookController::getHarvardBooks();

        $this->info('Books successfully inserted');
//        $this->error('Error inserting Books - failure');
    }
}
