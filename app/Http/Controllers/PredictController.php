<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PredictController extends Controller
{
    public function getImage(){
        dd("testing");
    }
    public function getPrediction(Request $request){

//        $request->validate([
//            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//        ]);


        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $client = new Client();
        $imageUrl = "/home/arnoldkk/SBCP/public/images/".$imageName;
        $res = $client->request('POST', "http://127.0.0.1:5000/upload", [
            'multipart' => [
                [
                    'headers' =>  [
                        'Content-Type' => 'multipart/form-data',
                        'Content-Disposition'   => 'form-data; name="image"; filename=$imageUrl',
                    ],
                    'name'     => 'image',
                    'contents' => file_get_contents("/home/arnoldkk/SBCP/public/images/".$imageName),
                ],
            ],
        ]);
        $data = response()->json(json_decode(($res->getBody()->getContents())));
        $prediction = $data->content();

        $accuracy = json_decode($prediction)->accuracy;
        $label = json_decode($prediction)->label;
        $predicted_class =  json_decode($prediction)->predicted_class;
        session(['class' => $predicted_class]);
        session(['image' => $imageName]);
//        $accuracy = json_decode($prediction)->label;

//        return dd($accuracy->label);
        return view("Results",compact('accuracy','label','predicted_class'));
//        return view('Results')->with('predict', json_decode($prediction, true));
    }
}
