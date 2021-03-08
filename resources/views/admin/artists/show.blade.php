@extends('layouts.dashboard')
@section('title')
GO TO ADMIN PANEL
@endsection
@section('content')
<div class="container">
<table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>created_at</th>
                <th>updated_at</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">{{$artist->name}}</td>
                <td>{{$artist->created_at}}</td>
                <td>{{$artist->updated_at}}</td>
            </tr>
        </tbody>
    </table>
<a href="{{route('admin.artists.index')}}"class="btn btn-primary">GO BACK</a>
</div>
@endsection
