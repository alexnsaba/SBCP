<?php

namespace App\Http\Controllers;

use App\Location;
use App\Patient;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;
use App\Prediction;
use App\Images;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use Image;
class RecordsView extends Controller
{
    //method to display the records
    public function index(){
        $preds = DB::select('select * from predictions');
        return view('records',['preds'=>$preds]);
    }


    public function savePatientDetails(){
        $patients = Patient::query()->where('user_id',Auth()->id())->get();
        return view('PatientDetails')->with(compact('patients'));
    }


    //Saving prediction results to the database
    public function saveDetails(Request $request)
    {
        $result=$request['results'];
        $image = $request->session()->get('image');
        $clinical_notes=$request['clinical_notes'];
        $reminder = $request['reminder'];
        $checkUpDate = $request['checkupDate'];
        $breastSide = $request['breastSide'];
        //$image = $request->file('mammogram');
        //$imageName = 'SBCP'.time().'.'.$image->extension();
        //$image->move(public_path('images'),$imageName);

//        $doctor_id=$request['doctor_id'];
        $doctor_id=Auth()->id();
        $patient_id=$request['patient_id'];
//        $region =DB::table('patients')->where('id',$patient_id)->location()->region;
        $patient = Patient::query()->where('id',$patient_id)->get();

//        $patient_district = Patient::query()->where('id',$patient_id)->get();
        $location = $patient[0]->location_id;
        $region = Location::query()->where('id',$location)->get();


//        $region = DB::table('locations')->where('name',$patient[0]->Location)->get();




//        $region=$request['region'];
        DB::table('predictions')->insert(
            ['Results' =>$result, 'Clinical_notes' =>$clinical_notes,
                'image'=>$image, 'Patient_id' =>$patient_id,
                'user_id' =>$doctor_id,
                'region'=>$region[0]->region,
                'breastSide'=>$breastSide,
//                'Doctor_id' =>$doctor_id,
//                'region'=>$region[0]->region,
                "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
                "updated_at" => \Carbon\Carbon::now()]
        );
        DB::table('reminders')->insert(
            [
                'data'=>$reminder,
                'patient_id'=>$patient_id,

                'reminder_date'=>$checkUpDate,
                'email'=>$patient[0]->Email,
//                'email'=>$patient[0]->Email,

                'status'=>'pending'

            ]
        );

        $request->session()->forget('class');
        $request->session()->forget('image');


        return redirect('/Predictions')->with('success','Patient Details successfully added.');
//        return dd($patient[0]->location_id);

    }

    //
}
