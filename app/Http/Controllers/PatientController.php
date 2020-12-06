<?php

namespace App\Http\Controllers;

use App\Location;
use App\Patient;
use Illuminate\Http\Request;
use DB;

class PatientController extends Controller
{
    //
    public function index(){
        $patients = Patient::all();


        return view('PatientDetails')->with(compact('patients'));
//        return dd($patients);
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
            ['Name' =>$name, 'Location' =>$location, 'Phone_number' =>$phone_number, 'Email' =>$email,
                "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
                "updated_at" => \Carbon\Carbon::now()]
        );
        return redirect('managepatients')->with('success','Patient Record successfully added');

    }



    public function displayPatients(){

        $patients = DB::select('select * from patients');
        $locations = Location::all();
        return view('managepatients')->with(compact('patients','locations'));

    }

    public function deletepatient($id) {
        DB::delete('delete from patients where id = ?',[$id]);
        //return view('managepatients',['patients'=>$patients]);
        return redirect('managepatients')->with('success','Patient deleted successfully added');

     }

}
