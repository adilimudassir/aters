<?php
use App\Lga;
use App\User;
use App\Center;
use App\Services\Sokoto;
use App\Services\Register;
use App\Services\CreateLocalGovernment;

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

// Route::get('/', function () {
//     return view('auth.login');
// });

Route::post('/accredited', 'HomeController@accredited')->name('acredited');
Route::post('/result', 'HomeController@result')->name('result');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contestants', 'HomeController@contestants')->name('contestants');
Route::post('/add_result', 'HomeController@newResult')->name('new.result');
Route::post('/incidence', 'HomeController@incidence');
