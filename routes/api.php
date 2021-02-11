<?php

use Illuminate\Support\Facades\Route;

Route::get('/states', 'StateController@index');
Route::post('/states', 'StateController@store');
Route::get('/states/{state}', 'StateController@show');
Route::put('/states/{state}', 'StateController@update');
Route::delete('/states/{state}', 'StateController@destroy');
Route::get('/items', 'StateController@items');
Route::get('/items/{id}', 'StateController@item');
