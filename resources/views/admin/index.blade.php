@extends('layouts.dashboard')
@section('title')
ADMIN PANEL
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-2">
        <p><a href="{{route('admin.comics.index')}}">comics</a></p>
        <p><a href="{{route('admin.artists.index')}}">artists</a></p>
        <p><a href="{{route('admin.writers.index')}}">writers</a></p>
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
