<?php

use Illuminate\Support\Facades\Route;


//route avec le middleware auth et le prefixe gestion (ex: gestion/Personnel) avec un nom sous le format gestion.Personnel.index
Route::group(
    ['middleware'=> ['auth'],
    'prefix'=>'gestion',
    'as' => "gestion."
  //  'namespace'=>'Personnel',
],
function(){
    Route::resource('Personnel', '\App\Http\Controllers\PersonnelController');

});