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
        try{
        $request->validate([
            'image' => 'min:1024',
        ]);

if ($request->image->getClientMimeType()=='image/x-portable-graymap'){
    $imageName = time().'.'.$request->image->extension();
    $request->image->move(public_path('images'), $imageName);
}


        $client = new Client();

//        $imageUrl = "/home/arnoldkk/SBCP/public/images/".$imageName;
//        $imageUrl = "{{ config('app.dir') }}".$imageName;
        $value = config('app.dir');



        $res = $client->request('POST', "http://127.0.0.1:5000/upload", [
            'multipart' => [
                [
                    'headers' =>  [
                        'Content-Type' => 'multipart/form-data',
                        'Content-Disposition'   => 'form-data; name="image"; filename=$imageUrl',
                    ],
                    'name'     => 'image',

//                    'contents' => file_get_contents("/home/arnoldkk/SBCP/public/images/".$imageName),
                    'contents' => file_get_contents($value.$imageName),


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
//           return dd($request->image->getMimeType());
//            return dd($request->image->getClientMimeType());




//        return view('Results')->with('predict', json_decode($prediction, true));
//            return view('Results')->with('predict', json_decode($prediction, true));

//        return dd($value);

        }
        catch(\Exception $e){
            return view('error',['error'=>"Prediction Process Failed, Hint: Either No connection to Prediction Backend or a Wrong image was Supplied",'error_name'=>"Prediction Error"]);
        }
    }
}
