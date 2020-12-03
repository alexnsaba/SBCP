<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Home extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('home')->with('notifications', $user->notifications);
    }
}
