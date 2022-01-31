@extends('layouts.app')

@section('content')
    <div>
        <div>
            <h1>{{ $place->name }}</h1>
            <p>{{ $place->description }}</p>
            <p>{{ $place->master }}</p>
        </div>

        <div>
            <a href="{{ route('place.edit',$place->id) }}">Edit</a>
        </div>

        <div>
            <form action="{{ route('place.delete',$place->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </div>

        <div>
            <a href="{{ route('place.index') }}">Back</a>
        </div>

    </div>
@endsection
