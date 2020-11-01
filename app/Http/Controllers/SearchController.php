<?php

namespace App\Http\Controllers;
use App\Prediction;
use Illuminate\Http\Request;

class SearchController extends Controller
{
   public function search(Request $request){

    if($request->has('search')){
        $preds = Prediction::search($request->get('search'))->get();
    }
    /* else{
        $preds = Prediction::get();
    }
    */
    return view('Search', compact('preds'));
}

}
