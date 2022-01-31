@extends('layouts.app')

@section('content')
    <div>
        <h1>Edit the place</h1>
        <form action="{{ route('place.update', $place->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="name" >Title</label>
                <input class="form-control" value="{{$place->name}}" name="name" id="name" placeholder="name" rows="3" />
                @error('name')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" >Content</label>
                <textarea class="form-control" name="description" id="description" placeholder="Description" rows="3">{{$place->description}}</textarea>
                @error('description')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <input class="form-control d-none" value="{{$place->master}}" name="master" id="master" placeholder="Master" rows="3"/>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
@endsection
