<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class ChartController extends Controller
{
    public function drawCharts(Request $request)
    {
        try {
        $date1 = $request['date1'];
        $date2 = $request['date2'];

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
    }catch(Throwable $e){
        report($e);
        return false;
    }
}
}
