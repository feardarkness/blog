<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
	// este metodo se esta llamando con el eager loading
	public function notes(){
		return $this->hasMany(Note::class);	
	}

	public function path(){
		return '/cards/'.$this->id;
	}

    public function addNote(Note $note){
    	return $this->notes()->save($note);
    }
}
