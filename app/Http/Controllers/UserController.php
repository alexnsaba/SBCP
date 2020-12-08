<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update(Request $request){
        //obtaining form parameters
        $name = $request['name'];
        $user = $request['user'];
        $mail = $request['mail'];
        //updating user details
        User::where('id',Auth::user()->id)
        ->update(['name' => $name,'username' => $user,'email' => $mail]);
        return redirect()->back()->with('message', 'Your profile has been successfully updated');
    }
}
