<?php
namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class ChartController extends Controller{

    //Logic for visualisation by date
    public function drawCharts(Request $request)
    {
        try {
        $range =$request['timerange'];
        //spilting the time range string
        $dates = explode(" ", $range);
        $date1 = $dates[0];
        $date2 = $dates[2];

        //over all predictions
        $negatives  =  DB::table('predictions')->where('results', 0)->whereBetween('created_at', [$date1, $date2])->count();
        $positives  =  DB::table('predictions')->where('results', 1)->whereBetween('created_at', [$date1, $date2])->count();
        //central predictions
        $central_negatives  =  DB::table('predictions')->where('region', 'Central')->where('results', 0)->whereBetween('created_at', [$date1, $date2])->count();
        $central_positives  =  DB::table('predictions')->where('region', 'Central')->where('results', 1)->whereBetween('created_at', [$date1, $date2])->count();
        // west predictions
        $west_negatives  =  DB::table('predictions')->where('region', 'West')->where('results', 0)->whereBetween('created_at', [$date1, $date2])->count();
        $west_positives  =  DB::table('predictions')->where('region', 'West')->where('results', 1)->whereBetween('created_at', [$date1, $date2])->count();
        // East predictions
        $east_negatives  =  DB::table('predictions')->where('region', 'East')->where('results', 0)->whereBetween('created_at', [$date1, $date2])->count();
        $east_positives  =  DB::table('predictions')->where('region', 'East')->where('results', 1)->whereBetween('created_at', [$date1, $date2])->count();
        //north predictions
        $north_negatives  =  DB::table('predictions')->where('region', 'North')->where('results', 0)->whereBetween('created_at', [$date1, $date2])->count();
        $north_positives  =  DB::table('predictions')->where('region', 'North')->where('results', 1)->whereBetween('created_at', [$date1, $date2])->count();

        return view('chart', [
            'negatives' => $negatives, 'positives' => $positives, 'central_negatives' => $central_negatives,
            'central_positives' => $central_positives, 'west_negatives' => $west_negatives, 'west_positives' => $west_positives,
            'east_negatives' => $east_negatives, 'east_positives' => $east_positives, 'north_negatives' => $north_negatives,
            'north_positives' => $north_positives,'from'=>$date1,'to'=>$date2
        ]);
    }catch(\Illuminate\Database\QueryException $e){
        return view('error',['error'=>"Database Connection Failed",'error_name'=>"Visualisation Error"]);
    }

}
//Logic for visualision by year
public function drawChartsByYear(Request $request)
    {
        try{
            $year = $request['year'];
            //for overall
            $negatives  =  DB::table('predictions')->where('results', 0)->whereYear('created_at', '=', $year)->count();
            $positives  =  DB::table('predictions')->where('results', 1)->whereYear('created_at', '=', $year)->count();

            //for january
            $negatives1  =  DB::table('predictions')->where('results', 0)->whereYear('created_at', '=', $year)->whereMonth('created_at','01')->count();
            $positives1  =  DB::table('predictions')->where('results', 1)->whereYear('created_at', '=', $year)->whereMonth('created_at','01')->count();

            //For feb
            $negatives2  =  DB::table('predictions')->where('results', 0)->whereYear('created_at', '=', $year)->whereMonth('created_at','02')->count();
            $positives2  =  DB::table('predictions')->where('results', 1)->whereYear('created_at', '=', $year)->whereMonth('created_at','02')->count();

            //For March
            $negatives3  =  DB::table('predictions')->where('results', 0)->whereYear('created_at', '=', $year)->whereMonth('created_at','03')->count();
            $positives3  =  DB::table('predictions')->where('results', 1)->whereYear('created_at', '=', $year)->whereMonth('created_at','03')->count();

            //For April
            $negatives4  =  DB::table('predictions')->where('results', 0)->whereYear('created_at', '=', $year)->whereMonth('created_at','04')->count();
            $positives4  =  DB::table('predictions')->where('results', 1)->whereYear('created_at', '=', $year)->whereMonth('created_at','04')->count();

            //For May
            $negatives5  =  DB::table('predictions')->where('results', 0)->whereYear('created_at', '=', $year)->whereMonth('created_at','05')->count();
            $positives5  =  DB::table('predictions')->where('results', 1)->whereYear('created_at', '=', $year)->whereMonth('created_at','05')->count();

            //for June
            $negatives6  =  DB::table('predictions')->where('results', 0)->whereYear('created_at', '=', $year)->whereMonth('created_at','06')->count();
            $positives6  =  DB::table('predictions')->where('results', 1)->whereYear('created_at', '=', $year)->whereMonth('created_at','06')->count();

            //For july
            $negatives7  =  DB::table('predictions')->where('results', 0)->whereYear('created_at', '=', $year)->whereMonth('created_at','07')->count();
            $positives7  =  DB::table('predictions')->where('results', 1)->whereYear('created_at', '=', $year)->whereMonth('created_at','07')->count();

            //For August
            $negatives8  =  DB::table('predictions')->where('results', 0)->whereYear('created_at', '=', $year)->whereMonth('created_at','08')->count();
            $positives8  =  DB::table('predictions')->where('results', 1)->whereYear('created_at', '=', $year)->whereMonth('created_at','08')->count();

            //For September
            $negatives9  =  DB::table('predictions')->where('results', 0)->whereYear('created_at', '=', $year)->whereMonth('created_at','09')->count();
            $positives9  =  DB::table('predictions')->where('results', 1)->whereYear('created_at', '=', $year)->whereMonth('created_at','09')->count();

            //for October
            $negatives10  =  DB::table('predictions')->where('results', 0)->whereYear('created_at', '=', $year)->whereMonth('created_at','10')->count();
            $positives10  =  DB::table('predictions')->where('results', 1)->whereYear('created_at', '=', $year)->whereMonth('created_at','10')->count();

            //For November
            $negatives11  =  DB::table('predictions')->where('results', 0)->whereYear('created_at', '=', $year)->whereMonth('created_at','11')->count();
            $positives11  =  DB::table('predictions')->where('results', 1)->whereYear('created_at', '=', $year)->whereMonth('created_at','11')->count();

            //For December
            $negatives12  =  DB::table('predictions')->where('results', 0)->whereYear('created_at', '=', $year)->whereMonth('created_at','12')->count();
            $positives12  =  DB::table('predictions')->where('results', 1)->whereYear('created_at', '=', $year)->whereMonth('created_at','12')->count();

            return view('chartByYear',
            [
                'year'=>$year,'negatives'=>$negatives,'positives'=>$positives,'negatives1'=>$negatives1,'positives1'=>$positives1,
                'negatives2'=>$negatives2,'positives2'=>$positives2,'negatives3'=>$negatives3,'positives3'=>$positives3,'negatives4'=>$negatives4,'positives4'=>$positives4,
                'negatives5'=>$negatives5,'positives5'=>$positives5,'negatives6'=>$negatives6,'positives6'=>$positives6,'negatives7'=>$negatives7,'positives7'=>$positives7,
                'negatives8'=>$negatives8,'positives8'=>$positives8,'negatives9'=>$negatives9,'positives9'=>$positives9,'negatives10'=>$negatives10,'positives10'=>$positives10,
                'negatives11'=>$negatives11,'positives11'=>$positives11,'negatives12'=>$negatives12,'positives12'=>$positives12
                ]);
        }catch(\Illuminate\Database\QueryException $e){
            return view('error')->with('error',"Database Connection Failed");
        }
    }
}////
