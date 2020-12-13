<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
Use Validator;

class PatientController extends Controller
{
    //
    public function savePatientDetails(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:patients',
            'location' => 'required',
            'phone_number'=> 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|email|unique:patients'

        ]);
        if($validator->fails()) {
            return redirect()->back()
              ->withInput()
              ->withErrors($validator);
        }else{
        $name=$request['name'];
        $location=$request['location'];
        $phone_number=$request['phone_number'];
        $email=$request['email'];
        
        DB::table('patients')->insert(
            ['Name' =>$name, 'Location' =>$location, 'Phone_number' =>$phone_number, 'Email' =>$email]
        );
        return redirect('managepatients')->with('success','Patient Record successfully added');
    }
    }

    //datatables
    public function displayPatients(){
        
        $patients = DB::select('select * from patients');
        return view('viewpatient',['patients'=>$patients]);
        
    }
    public function show($id) {
        $patients = DB::select('select * from patients where id = ?',[$id]);
        return view('patientupdate',['patients'=>$patients]);
    }
    

    public function deletepatient($id) {
        DB::delete('delete from patients where id = ?',[$id]);
        return redirect('viewpatient')->with('success','Patient deleted successfully');
        
     }



     public function editPatient(Request $request,$id) {
        $name = $request->input('name');
        $location = $request->input('location');
        $phoneNo = $request->input('phone_number');
        $email = $request->input('email');
        DB::update('update patients set Name = ?,Location=?,
        Phone_number=?,Email=? where id = ?',[$name,$location,$phoneNo, $email,$id]);
        return redirect('viewpatient')->with('success','Patient details successfully updated');
       
        }

}
