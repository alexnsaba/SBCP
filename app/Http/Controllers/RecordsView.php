<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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
        $clinical_notes=$request['clinical_notes'];
        //$image = $request->file('mammogram');
        //$imageName = 'SBCP'.time().'.'.$image->extension();
        //$image->move(public_path('images'),$imageName);
        
        $doctor_id=$request['doctor_id'];
        $patient_id=$request['patient_id'];
        $region=$request['region'];
        DB::table('predictions')->insert(
            ['Results' =>$result, 'Clinical_notes' =>$clinical_notes, 'Patient_id' =>$patient_id, 'Doctor_id' =>$doctor_id,  'region'=>$region]
        );
        return redirect('/patientDetails')->with('success','Patient Details successfully added.');
        
    }

}
