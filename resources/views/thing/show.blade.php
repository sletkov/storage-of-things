@extends('layouts.app')

@section('content')
    <div>
        <div>
            <h1>{{ $thing->name }}</h1>
            <p>{{ $thing->description }}</p>
            <p>{{ $thing->master }}</p>
        </div>

        <div>
            <a href="{{ route('thing.edit',$thing->id) }}">Edit</a>
        </div>

        <div>
            <form action="{{ route('thing.delete',$thing->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </div>

        <div>
            <a href="{{ route('thing.index') }}">Back</a>
        </div>

    </div>
@endsection
