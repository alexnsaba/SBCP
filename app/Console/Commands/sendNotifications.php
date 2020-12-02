<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class sendNotifications extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notifications:emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Notifications to Patients about the next check up.';

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
        //
    }
}
