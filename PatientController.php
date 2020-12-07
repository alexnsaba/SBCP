<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PatientController extends Controller
{
    //
    public function savePatientDetails(Request $request)
    {
        $name=$request['name'];
        $location=$request['location'];
        $phone_number=$request['phone_number'];
        $email=$request['email'];
        
        DB::table('patients')->insert(
            ['Name' =>$name, 'Location' =>$location, 'Phone_number' =>$phone_number, 'Email' =>$email]
        );
        return redirect('managepatients')->with('success','Patient Record successfully added');
        
    }
    
    public function displayPatients(){
        
        $patients = DB::select('select * from patients');
        return view('managepatients',['patients'=>$patients]);
        
    }

    public function deletepatient($id) {
        DB::delete('delete from patients where id = ?',[$id]);
        //return view('managepatients',['patients'=>$patients]);
        return redirect('managepatients')->with('success','Patient deleted successfully added');
        
     }

}
