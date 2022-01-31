@extends('layouts.app')
@section('content')
    <div>
        <h1>My things</h1>
        <a href="{{ route('thing.create') }}" class="btn btn-primary mb-3">Make new thing</a>
        @foreach($things as $thing)
            <h2><a href={{ route('thing.show', $thing->id) }}">{{ $thing->name }}</a></h2>
            <p>{{ $thing->description }}</p>
        @endforeach
{{--        <div class="mt-3">--}}
{{--            {{ $things->withQueryString()->links() }}--}}
{{--        </div>--}}
    </div>
@endsection
