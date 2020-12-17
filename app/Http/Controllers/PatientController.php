<?php

namespace App\Http\Controllers;
use App\Reminder;
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
//        $patients = Patient::all()->where('user_id',Auth()->id());
//        return view('PatientDetails')->with(compact('patients'));
        $locations = Location::all();

        return view('managepatients')->with(compact('locations'));
    }

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






//
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





    public function displayPatients(){

        $patients = Patient::all()->where('user_id',Auth()->id());
//            $patients = Patient::all()->where('id',Auth()->id());



        return view('viewpatient')->with(compact('patients'));

//        foreach ($patients as $item) {
//            return dd($item->location);
//
//        }


    }


    public function show($id) {

        $patients = Patient::query()->where('id',$id)->get();
        $locations = Location::all();

//        $patients = DB::select('select * from patients where id = ?',[$id]);
//        return view('patientupdate',['patients'=>$patients]);
        return view('patientupdate')->with(compact('patients','locations'));
    }


    public function editPatient(Request $request,$id) {
        $name = $request->input('name');
        $location = $request->input('location');
        $phoneNo = $request->input('phone_number');
        $email = $request->input('email');
        DB::update('update patients set Name = ?,location_id=?,
        Phone_number=?,Email=? where id = ?',[$name,$location,$phoneNo, $email,$id]);
        return redirect('viewpatient')->with('success','Patient details successfully updated');

    }


    public function deletepatient($id) {
        DB::delete('delete from patients where id = ?',[$id]);
        //return view('managepatients',['patients'=>$patients]);
        return redirect('viewpatient')->with('success','Patient deleted successfully added');

     }

     public function noti(){
//        $notification = Reminder::whereDate('created_at', now()->subDay(36))->where('status', 'pending')->get();
         $notification = Reminder::whereDate('reminder_date', now()->addDay(2))->where('status', 'pending')->get();

         foreach ($notification as $reminder) {
                $reminder->patient->Email;
//             $reminder->status ="sent";
//             $reminder->save();
         }

        return dd($notification);

     }

}
