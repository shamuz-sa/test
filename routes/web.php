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

// premiere page par defaut de l'app
Route::get('/', function () {
    return view('welcome');
});

//ma premiere page
//Route::get('/', 'App\Http\Controllers\APIController@index');



//route avec le middleware admin et le prefixe succes (ex: succes/Admin)
Route::group(
    [
        'middleware' => ['admin'],
        'prefix' => 'succes',
        'as' => "succes."
    ],
    function () {
        Route::resource('Admin', '\App\Http\Controllers\AdminController');
    }
);
