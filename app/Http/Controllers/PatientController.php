<?php

namespace App\Http\Controllers;
use Validator;
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
        try{
//        $patients = Patient::all()->where('user_id',Auth()->id());
//        return view('PatientDetails')->with(compact('patients'));
        $locations = Location::all();

        return view('managepatients')->with(compact('locations'));
        }
        catch(\Exception $e){
            return view('error',['error'=>"View Patients Failed",'error_name'=>"Patients Management Error"]);
        }
    }
    public function savePatientDetails(Request $request)
    {
        try{
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

//            DB::table('patients')->insert(
//                ['Name' =>$name, 'Location' =>$location, 'Phone_number' =>$phone_number, 'Email' =>$email]
//            );

            DB::table('patients')->insert(
                ['Name' =>$name, 'location_id' =>$location, 'Phone_number' =>$phone_number, 'Email' =>$email,'user_id'=>Auth()->id(),
                    "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
                    "updated_at" => \Carbon\Carbon::now()]
            );
            return redirect('managepatients')->with('success','Patient Record successfully added');
        }
//        $name=$request['name'];
//        $location=$request['location'];
//
////        $locate = DB::table('locations')->where('id', $location)->get();
////        $locations = $locate->name;$locate[0]->name
//
//        $phone_number=$request['phone_number'];
//        $email=$request['email'];
//
//        DB::table('patients')->insert(
//            ['Name' =>$name, 'location_id' =>$location, 'Phone_number' =>$phone_number, 'Email' =>$email,'user_id'=>Auth()->id(),
//                "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
//                "updated_at" => \Carbon\Carbon::now()]
//        );
//        return redirect('managepatients')->with('success','Patient Record successfully added');


    }
    catch(\Exception $e){
        return view('error',['error'=>"Saving Patient Failed",'error_name'=>"Patients Management Error"]);
    }
}

    public function displayPatients(){
        try{
        $patients = Patient::all()->where('user_id',Auth()->id());
//            $patients = Patient::all()->where('id',Auth()->id());

        return view('viewpatient')->with(compact('patients'));

//        foreach ($patients as $item) {
//            return dd($item->location);
//
//        }
        }
        catch(\Exception $e){
            return view('error',['error'=>"Display Patients Failed",'error_name'=>"Patient Management Error"]);
        }

    }

    public function show($id) {
        try{
        $patients = Patient::query()->where('id',$id)->get();
        $locations = Location::all();
//        $patients = DB::select('select * from patients where id = ?',[$id]);
//        return view('patientupdate',['patients'=>$patients]);
        return view('patientupdate')->with(compact('patients','locations'));
        }
    catch(\Exception $e){
        return view('error',['error'=>"Patient Not Found",'error_name'=>"Patient Management Error"]);
    }
    }


    public function editPatient(Request $request,$id) {
        try{
        $name = $request->input('name');
        $location = $request->input('location');
        $phoneNo = $request->input('phone_number');
        $email = $request->input('email');
        DB::update('update patients set Name = ?,location_id=?,
        Phone_number=?,Email=? where id = ?',[$name,$location,$phoneNo, $email,$id]);
        return redirect('viewpatient')->with('success','Patient details successfully updated');
        }
        catch(\Exception $e){
            return view('error',['error'=>"Edit Patient Failed",'error_name'=>"Patient Management Error"]);
        }
    }

    public function deletepatient($id) {
        try{
        DB::delete('delete from patients where id = ?',[$id]);
        //return view('managepatients',['patients'=>$patients]);
        return redirect('viewpatient')->with('success','Patient deleted successfully added');
        }
        catch(\Exception $e){
            return view('error',['error'=>"Delete Patient Failed",'error_name'=>"Patients Management Error"]);
        }
     }
}
