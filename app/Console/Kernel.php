<?php

namespace App\Console;

use App\Patient;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
//        'App\Console\Commands\sendNotification',
//        \App\Console\Commands\Inspire::class,


    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     *
     */


//    private function sendEmailToUser($userId, $reminders)
//    {
//        $user = User::find($userId);
//
//        Mail::to($user)->send(new ReminderEmailDigest($reminders));
//    }


    protected function schedule(Schedule $schedule)
    {
    $schedule->call(function () {

        // Get all reminders for today
//        $reminders = DB::table('patients')->query();
        $reminders = Reminder::query()
//            ->with(['lead'])
            ->where('reminder_date', now()->format('Y-m-d'))
            ->where('status', 'pending')
//            ->orderByDesc('user_id')
            ->get();

        // group all reminders by user
//        $data = [];
        foreach ($reminders as $reminder) {
//            $data[$reminder->user_id][] = $reminder->toArray();
            $reminder->status ="sent";
            $reminder->save();
            $this->sendEmailToUser($reminder);

        }

//        foreach ($data as $userId => $reminders) {
//            $this->sendEmailToUser($userId, $reminders);
//        }




//    })->daily();
    })->everyMinute();



}
//    private function sendEmailToUser($userId, $reminders)
//    {
//        $user = User::find($userId);
//
//        Mail::to($user)->send(new ReminderEmailDigest($reminders));
//    }
    private function sendEmailToUser($reminder)
    {
//        $user = User::find($userId);
        $patient = Patient::query()->where('Email',$reminder->data)->get();
        Mail::to($patient)->send(new ReminderEmailDigest($reminder));
    }

//    protected function schedule(Schedule $schedule)
//    {
//        $schedule->call(function () {
//            DB::table('recent_users')->delete();
//        })->daily();
//    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
