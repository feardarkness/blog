@extends('layouts.layout')

@section('content')
<h1>Listado de tarjetas</h1>
    @foreach ($cards as $card)
    	<div><a href="/cards/{{$card->id}}">{{ $card->title }}</a> </div>
    @endforeach
    <br>
    @foreach ($cards as $card)
    	<div><a href="{{$card->path()}}">{{ $card->title }}</a> </div>
    @endforeach
@stop

@section('footer')
    <h2>I did it!!!</h2>
@stop