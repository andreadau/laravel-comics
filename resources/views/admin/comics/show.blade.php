@extends('layouts.dashboard')
@section('title')
GO TO ADMIN PANEL
@endsection
@section('content')
<div class="container">
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Price</th>
            <th>Avaiability</th>
            <th>Description</th>
            <th>Series</th>
            <th>Volume</th>
            <th>Page</th>
            <th>Rated</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>Cover</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$comic->id}}</td>
            <td>{{$comic->title}}</td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->avaiability}}</td>
            <td>{{$comic->description}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->volume}}</td>
            <td>{{$comic->page}}</td>
            <td>{{$comic->rated}}</td>
            <td>{{$comic->created_at}}</td>
            <td>{{$comic->updated_at}}</td>
    <td><img src="{{asset('storage/' . $comic->img )}}" class="img_cover" alt=""></td>
        </tr>
    </tbody>
</table>

</div>
@endsection
