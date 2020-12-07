<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\User;
use App\Prediction;
use DB;
class ChartController extends Controller
{
    public function index()
    {
       
        $users = Prediction::select(\DB::raw("COUNT(*) as count"))
                    #->whereYear('created_at', '2020')
                    ->groupBy(\DB::raw("Month(created_at)"))
                    ->pluck('count');          
        return view('chart', compact('users'));
            

    
    }  
}
