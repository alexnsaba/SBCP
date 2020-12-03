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
})->middleware('auth')->middleware('verified');


Route::get('send-notification', 'NotificationController@sendOfferNotification')->middleware('auth');




Route::get('/Predictions', function () {
    return view('predictions');
})->middleware('auth');

Route::post('/predict',[PredictController::class, 'getPrediction'])->name('imagePredict')->middleware('auth');

Route::get('Visualisations/', function () {
    return view('visualisation');
})->middleware('auth');
Route::get('predictionResults',function(){
    return view('Results');
})->middleware('auth');
//Route::get('patientDetails',function(){
//   return view('PatientDetails');
//})->middleware('auth');

Route::get('patientDetails', 'PatientController@index')->middleware('auth');



Route::get('charts', 'ChartController@index')->name('chart.index')->middleware('auth');
Route::get('records','RecordsView@index')->middleware('auth');
Route::post('save','RecordsView@saveDetails')->middleware('auth');
Route::post('chart', 'ChartController@drawCharts')->middleware('auth');
Route::post('chart_by_year', 'ChartController@drawChartsByYear')->middleware('auth');


Route::post ( '/search','SearchController@Search');

//Auth::routes();
Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->name('home');



//Route::get('managepatients', 'PatientController@open')->middleware('auth');

//Route::get('managepatients',function(){
//    return view('managepatients');
//});



Route::post('addpatient','PatientController@savePatientDetails');
Route::get('managepatients','PatientController@displayPatients');
Route::get('delete','PatientController@deletepatient');
Route::get('delete/{id}','PatientController@deletepatient');




