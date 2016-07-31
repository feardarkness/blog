<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	$people = ['Carla', 'Ariel', 'Amor', 'Ariel Malo'];
	// compact($people)    se convierte en 		["people" => $people]
	return view('welcome', compact("people"));

    // return view('welcome', ["people" => $people]);
    //return view('welcome', ["people" => $people]);

    // another way
	//return view('welcome')->with("people", $people);

	// even another way, can be chained		->with()->with()->with()
	//return view('welcome')->withPeople($people);

	// another way  	return View::make();
});

Route::get('/about', function () {
    return view('about');		// resources/views/about.blade.php
});

Route::get('/about2', function () {
    return view('pages.about');		// resources/views/about.blade.php
});
