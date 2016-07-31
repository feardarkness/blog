<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home(){
    	$people = ['Carla', 'Ariel', 'Amor', 'Ariel Malo'];

		return view('welcome', compact("people"));
    }

    public function about3(){
    	return view('pages.about3');	
    }
}
