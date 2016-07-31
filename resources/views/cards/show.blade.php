@extends('layouts.layout')

@section('content')
	<div class="col-md-6 col-md-offset-3">
		<h1>Tarjeta {{$card->id}}</h1>
		<p>Titulo: {{$card->title}}</p>
		<ul class="list-group">
			@foreach ($card->notes as $note)
				<li class="list-group-item">{{$note->body}}</li>
			@endforeach
		</ul>
		<hr>
		<h3>Add new note</h3>
		<form method="POST" action="/cards/{{$card->id}}/notes">
			<div class="form-group">
				<textarea name="body" class="form-control"></textarea>
			</div>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<button type="submit" class="btn btn-primary">Add note</button>
		</form>
	</div>
@stop

@section('footer')
    <h2>I did it again!!!</h2>
@stop