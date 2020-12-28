<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update(Request $request){
        try{
        //obtaining form parameters
        $name = $request['name'];
        $user = $request['user'];
        $mail = $request['mail'];
        //updating user details
        User::where('id',Auth::user()->id)
        ->update(['name' => $name,'username' => $user,'email' => $mail]);
        return redirect()->back()->with('success', 'Your profile has been successfully updated');
        }
        catch(\Exception $e){
            return view('error',['error'=>"Updating Profile Failed",'error_name'=>"Profile Update Error"]);
        }
    }
    public function updatePicture(Request $request){
        try{
        $image = $request->file('photo');
        $imageName = Auth::user()->name .'_'. time() . '.' . $image->extension();
        $image->move(public_path('profileImages'), $imageName);
       //updating the profile picture
       User::where('id',Auth::user()->id)
       ->update(['photo' => $imageName]);
       return redirect()->back()->with('success', 'Your profile Picture has been successfully updated');
    }
    catch(\Exception $e){
        return view('error',['error'=>"Updating Profile Picture Failed",'error_name'=>"Profile Update Error"]);
    }
    }
}
