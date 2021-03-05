@extends('layouts.dashboard')
@section('title')
GO TO ADMIN PANEL
@endsection
@section('content')
<div class="container">
    <p>{{$comic->id}}</p>
    <p>{{$comic->title}}</p>
    <p>{{$comic->price}}</p>
    <p>{{$comic->avaiability}}</p>
    <p>{{$comic->description}}</p>
    <p>{{$comic->series}}</p>
    <p>{{$comic->volume}}</p>
    <p>{{$comic->page}}</p>
    <p>{{$comic->rated}}</p>
    <p>{{$comic->created_at}}</p>
    <p>{{$comic->updated_at}}</p>
    <p><img src="{{asset('storage/' . $comic->img )}}" alt=""></p>
</div>
@endsection
