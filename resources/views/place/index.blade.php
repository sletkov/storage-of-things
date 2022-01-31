@extends('layouts.app')
@section('content')
    <h1>My storing places</h1>
    <a href="{{ route('place.create') }}" class="btn btn-primary mb-3">Make new place</a>
    @foreach($places as $place)
        <h2><a href="{{ route('place.show', $place->id) }}">{{$place->name}} </a><span>{{(10)}}</span></h2>
        <p>{{$place->description}}</p>
        <p>{{$place->master}}</p>
    @endforeach
@endsection
