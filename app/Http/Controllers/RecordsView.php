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
}
