@extends('layouts.dashboard')
@section('title')
GO TO ADMIN PANEL
@endsection
@section('content')
<div class="container">
    <h2>Name</h2>
    <h2>{{$writer->name}}</h2>
    <h2>created_at</h2>
    <p>{{$writer->created_at}}</p>
    <h2>updated_at</h2>
    <p>{{$writer->updated_at}}</p>
    <a href="{{route('admin.writers.index')}}"class="btn btn-primary">GO BACK</a>
</div>
@endsection
