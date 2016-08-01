@extends('layouts.layout')

@section('content')
	<h1>Edit note {{$note->id}}</h1>
	<form method="POST" action="/notes/{{$note->id}}">
		{{ method_field('PATCH') }}  <!-- Para simular el metodo patch a traves de un post -->
		<div class="form-group">
			<textarea name="body" class="form-control">{{$note->body}}</textarea>
		</div>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<button type="submit" class="btn btn-primary">Update note</button>
	</form>
@stop
