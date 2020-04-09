<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prediction;
class ChartController extends Controller
{
    function index(){
        $users = Prediction::select(\DB::raw("COUNT(*) as count"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(\DB::raw("Month(created_at)"))
        ->pluck('count');
        return view('chart', compact('users'));
        
    }
}
