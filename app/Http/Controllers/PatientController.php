<?php

namespace App\Http\Controllers;

use App\Location;
use App\Patient;
use App\User;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    //
    public function index(){
        $allPatients = Patient::all();
        $patients = User::query()->where(id,Auth()->id())->patient;

//        return view('PatientDetails')->with(compact('patients'));
        return dd($patients->location);
    }

    public function savePatientDetails(Request $request)
    {
        $name=$request['name'];
        $location=$request['location'];

//        $locate = DB::table('locations')->where('id', $location)->get();
//        $locations = $locate->name;$locate[0]->name

        $phone_number=$request['phone_number'];
        $email=$request['email'];

        DB::table('patients')->insert(
            ['Name' =>$name, 'location_id' =>$location, 'Phone_number' =>$phone_number, 'Email' =>$email,'user_id'=>Auth()->id(),
                "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
                "updated_at" => \Carbon\Carbon::now()]
        );
        return redirect('managepatients')->with('success','Patient Record successfully added');

    }



    public function displayPatients(){

//        $patients = DB::select('select * from patients');
        $patients = Patient::all()->where('user_id',Auth()->id());
//            $patients = Patient::all()->where('id',Auth()->id());
        $locations = Location::all();
//            $user = User::query()->where('id',Auth()->id());
//            $patients = $user->patient;
//        $patients=$patient->user->where('id', Auth()->id())->get();
//        $patients=$patient->user->get();


        return view('managepatients')->with(compact('patients','locations'));
//        return dd(Location::find(1)->patient);

//        return dd(Patient::find(1)->location->name);
//        return dd($patients);


    }

    public function deletepatient($id) {
        DB::delete('delete from patients where id = ?',[$id]);
        //return view('managepatients',['patients'=>$patients]);
        return redirect('managepatients')->with('success','Patient deleted successfully added');

     }

}
