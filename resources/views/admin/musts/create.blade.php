@extends('layouts.dashboard')
@section('title')
GO TO ADMIN PANEL
@endsection
@section('content')

<div class="container">
  <h1>ADD A NEW MUST</h1>

        <form action="{{route('admin.musts.store')}}" method="post" enctype="multipart/form-data">
          @csrf
  <!-- Name -->

        <div class="form-group">
          <label for="name">name:</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
  <!-- Subtitle -->

        <div class="form-group">
          <label for="subtitle">subtitle:</label>
          <input type="text" class="form-control" id="subtitle" name="subtitle">
        </div>
  <!-- Serie -->

        <div class="form-group">
          <label for="serie">serie:</label>
          <input type="text" class="form-control" id="serie" name="serie">
        </div>
  <!-- Image -->

        <div class="form-group">
          <label for="img">Image</label>
          <input type="file" class="form-control-file" name="img" id="img" placeholder="Add an image" aria-describedby="imgImgHelper">
          <small id="imgImgHelper" class="form-text text-muted">Add an image</small>
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
