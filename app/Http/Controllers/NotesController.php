<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Note;
use App\Card;

class NotesController extends Controller
{
    public function add(Request $request, Card $card){
        // VALIDATION
        $this->validate($request, [
            "body" => "required"
        ]);


    	/* One way to save
    	$note = new Note;
    	$note->body = $request->body;
    	$card->notes()->save($note);
		*/
		
		/* Another way to save
		$note = new Note(['body' => $request->body]);
		$card->notes()->save($note);
		*/

		/* Another way to save
		$card->notes()->create(['body' => $request->body]);
		*/

		/* Another way to save
		$card->notes()->create($request->all());
		*/

        $note = new Note($request->all());
        $note->user_id = 1;

		$card->addNote($note);

    	// formas de redireccionar
    	//return \Redirect::to('/some/new/uri');
    	//return redirect()->to('/another/uri');
    	//return redirect('/another/uri');

    	// para volver a donde estabamos
    	return back();
    }

    public function edit(Note $note){
    	return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note){
    	$note->update($request->all());
    	return back();
    }
}
