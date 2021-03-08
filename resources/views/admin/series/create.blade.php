@extends('layouts.dashboard')
@section('title')
GO TO ADMIN PANEL
@endsection
@section('content')

<div class="container">
<h1>ADD A NEW SERIE</h1>

      <form action="{{route('admin.series.store')}}" method="post" enctype="multipart/form-data">
        @csrf
      <!-- Name -->

      <div class="form-group">
        <label for="name">name:</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <!-- Image -->

      <div class="form-group">
        <label for="img">Image</label>
        <input type="file" class="form-control-file" name="img" id="img">
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
