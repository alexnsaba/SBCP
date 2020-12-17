<?php

namespace App\Console\Commands;

use App\Notifications\Revisit;
use App\Notifications\SendDocLinkNotification;
use App\Reminder;
use App\User;
use Illuminate\Console\Command;

class sendNotifications extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:reminder';

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
        $notification = Reminder::whereDate('reminder_date', now()->addDay(2))->where('status', 'pending')->get();

        Reminder::whereDate('reminder_date', now()->addDay(2))->where('status', 'pending')->get()->each(function ($reminder) {


//            $remind = Reminder::create([
//                'name' => $reminder->patient->Name,
//                'email' => $reminder->patient->Email,
//                'token' => str_random(60),
//            ]);

//            $invite->notify(new UserInvite()
             $reminder->status ="sent";
             $reminder->save();
             $reminder->notify(new Revisit($reminder));

//            $reminder->patient->Email;


        });
        //
    }
}
