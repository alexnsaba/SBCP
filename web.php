<?php

use Illuminate\Support\Facades\Route;
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


Route::get("hello", function (){
    return dd("hello");
});

Route::get('/Predictions', function () {
    return view('predictions');
});
 Route::get('Visualisations/', function () {
    return view('visualisation');
});
Route::get('predictionResults',function(){
    return view('Results');
});
Route::get('patientDetails',function(){
   return view('PatientDetails');
});
Route::get('charts', 'ChartController@index')->name('chart.index');
Route::get('records','RecordsView@index');
Route::post('save','RecordsView@saveDetails');



Route::get('managepatients',function(){
    return view('managepatients');
});




//Route::post('addpatient','PatientController@savePatientDetails');
//Route::get('managepatients','PatientController@displayPatients');
//Route::get('delete','PatientController@deletepatient');
//Route::get('delete/{id}','PatientController@deletepatient');



