<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// sin eloquent
/*
use App\Http\Requests;
use DB;

class CardsController extends Controller
{
    public function index(){
		// start searching DB from the root
    	//$cards = \DB::table('cards')->get();
    	$cards = DB::table('cards')->get();
    	return view('cards.index', compact('cards'));
    }
}
*/

// con eloquent

use App\Http\Requests;
use App\Card;

class CardsController extends Controller
{
    public function index(){
		// start searching DB from the root
    	//$cards = \DB::table('cards')->get();
    	$cards = Card::all();
    	return view('cards.index', compact('cards'));
    }

    public function show(Card $card){
    	// laravel se encarga de buscar automaticamente un objeto Card por el id enviado :D
    	return view('cards.show', compact('card'));
    	// para buscar una tarjeta
    	/*
    	$card = Card::find($id);
    	return view('cards.show', compact('card'));
    	*/
    }
}
