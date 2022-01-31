@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h1>Welcome to the Storage of things!</h1>
                        <p class="text fs-2">Create things and storing places</p>
                        <p class="text fs-2">Make a gifts to another users</p>
                        <a class="btn btn-primary" href="">Get started</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
