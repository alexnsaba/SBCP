<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PredictController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('predictions');
});

Route::get('send-notification', 'NotificationController@sendOfferNotification');

Route::get('/Predictions', function () {
    return view('predictions');
});

Route::post('/predict',[PredictController::class, 'getPrediction'])->name('imagePredict');

Route::get('Visualisations/', function () {
    return view('visualisation');
});
Route::get('predictionResults',function(){
    return view('Results');
});
Route::get('patientDetails',function(){
   return view('PatientDetails');
});
Route::get('chart','ChartController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
