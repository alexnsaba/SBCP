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
Route::post('chart', 'ChartController@drawCharts');
Route::post('chart_by_year', 'ChartController@drawChartsByYear');

Route::post ( '/search','SearchController@Search');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
