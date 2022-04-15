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
    return view('login');
});


Route::get('create', 'App\Http\Controllers\Users@create');
Route::post('loginsubmit', 'App\Http\Controllers\Users@loginsubmit');
Route::post('createsubmit', 'App\Http\Controllers\Users@createsubmit');



Route::group(['middleware' => ['logCheck']], function () {
    
    Route::get('list', 'App\Http\Controllers\Users@list');

});
