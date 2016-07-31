<?php

/*
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
*/

Route::get('/', 'PagesController@home');

Route::get('/about3', 'PagesController@about3');

Route::get('/about', function () {
    return view('about');		// resources/views/about.blade.php
});

Route::get('/about2', function () {
    return view('pages.about');		// resources/views/about.blade.php
});

Route::get('/cards', 'CardsController@index');

Route::get('/cards/{card}', 'CardsController@show');

Route::post('/cards/{card}/notes', 'NotesController@addNote');
