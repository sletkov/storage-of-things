@extends('layouts.app')

@section('content')
    <div>
        <h1>Create the place</h1>
        <form action="{{ route('place.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" >Title</label>
                <input class="form-control" value="{{old('name')}}" name="name" id="name" placeholder="name" rows="3" />
                @error('name')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" >Content</label>
                <textarea class="form-control" name="description" id="description" placeholder="Description" rows="3">{{old('description')}}</textarea>
                @error('description')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <input class="form-control d-none" value="{{$user->email}}" name="master" id="master" placeholder="Master" rows="3"/>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Make</button>
        </form>
    </div>
@endsection
