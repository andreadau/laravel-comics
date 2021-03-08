@extends('layouts.dashboard')
@section('title')
GO TO ADMIN PANEL
@endsection
@section('content')

<div class="container">
  <h1>ADD A NEW WRITER</h1>

    <form action="{{route('admin.writers.store')}}" method="post" >
      @csrf
      
<!-- Name -->

    <div class="form-group">
      <label for="name">name:</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>

    <button type="submit" class="btn btn-success">ADD</button>
    </form>
    @if ($errors->any())
        <div class="alert">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
        </div>
    @endif
</div>

@endsection
