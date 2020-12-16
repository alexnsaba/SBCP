<?php

namespace App\Http\Controllers;

use App\Notifications\PatientRevisit;
use App\User;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Notification;

use Illuminate\Notifications\Notification;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('product');
    }

    public function sendOfferNotification() {
        try{
        $userSchema = User::first();

        $offerData = [
            'name' => 'BOGO',
            'body' => 'You received an offer.',
            'thanks' => 'Thank you',
            'offerText' => 'Check out the offer',
            'offerUrl' => url('/'),
            'offer_id' => 007
        ];

        Notification::send($userSchema, new PatientRevisit($offerData));

        dd('Task completed!');
    }
    catch(\Exception $e){
        return view('error',['error'=>"Sending Notification Failed",'error_name'=>"Notification Error"]);
    }
    }
}
