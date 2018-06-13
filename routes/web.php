<?php

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
    return view('welcome');
});

// Route::get('/person_list', function(){
//     return view('person_list');
// });

// Route::get('/person_card', function(){
//     return view('person_card');
// });

Route::resource('personne','PersonneController');

// Route::resource('personne/id', function(show){
// 	return view('person_card/id');
// });

// Route::resource('personne/id', 'PersonneController');

