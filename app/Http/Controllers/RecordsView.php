<?php

namespace App\Http\Controllers;

use App\Patient;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;
use App\Prediction;
use App\Images;
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

    //Saving prediction results to the database
    public function saveDetails(Request $request)
    {
        $result=$request['results'];
        $image = $request->session()->get('image');
        $clinical_notes=$request['clinical_notes'];
        //$image = $request->file('mammogram');
        //$imageName = 'SBCP'.time().'.'.$image->extension();
        //$image->move(public_path('images'),$imageName);

//        $doctor_id=$request['doctor_id'];
        $doctor_id=Auth()->id();
        $patient_id=$request['patient_id'];
//        $region =DB::table('patients')->where('id',$patient_id)->location()->region;
        $patient = Patient::query()->where('id',$patient_id)->get();

//        $patient_district = Patient::query()->where('id',$patient_id)->get();
        $region = DB::table('locations')->where('name',$patient[0]->Location)->get();




//        $region=$request['region'];
        DB::table('predictions')->insert(
            ['Results' =>$result, 'Clinical_notes' =>$clinical_notes,
                'image'=>$image, 'Patient_id' =>$patient_id,
                'Doctor_id' =>$doctor_id,  'region'=>$region[0]->region,
                "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
                "updated_at" => \Carbon\Carbon::now()]
        );

        $request->session()->forget('class');
        $request->session()->forget('image');


        return redirect('/patientDetails')->with('success','Patient Details successfully added.');
//        return dd($region[0]->region);

    }

    //
}
