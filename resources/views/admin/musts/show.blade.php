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
                <th>Subtitle</th>
                <th>Serie</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>cover</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">{{$must->name}}</td>
                <td>{{$must->subtitle}}</td>
                <td>{{$must->serie}}</td>
                <td>{{$must->created_at}}</td>
                <td>{{$must->updated_at}}</td>
              <td><img src="{{asset('storage/' . $must->img )}}" class="img_cover" alt=""></td>
            </tr>
        </tbody>
    </table>
    
    <a href="{{route('admin.musts.index')}}"class="btn btn-primary">GO BACK</a>
</div>
@endsection
