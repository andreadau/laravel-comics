@extends('layouts.dashboard')
@section('title')
GO TO ADMIN PANEL
@endsection
@section('content')

<div class="container">

<h1>CREATE A COMICS</h1>


    <form action="{{route('admin.comics.store')}}" method="post" enctype="multipart/form-data" >
      @csrf
<!-- Title -->
      <div class="form-group">
        <label for="title">title:</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>
<!-- Image -->

      <div class="form-group">
      <label for="img">Image</label>
      <input type="file" class="form-control-file" name="img" id="img" placeholder="Add an image" aria-describedby="imgImgHelper">
      <small id="imgImgHelper" class="form-text text-muted">Add an image</small>
      </div>
<!-- Cover -->

      <div class="form-group">
      <label for="cover">Cover</label>
      <input type="file" class="form-control-file" name="cover" id="cover" placeholder="Add an image" aria-describedby="imgImgHelper">
      <small id="imgImgHelper" class="form-text text-muted">Add a Cover</small>
      </div>
<!-- Price -->

      <div class="form-group">
        <label for="price">price:</label>
        <input type="numbers" class="form-control" id="price" name="price">
      </div>
<!-- Avaiability -->

      <div class="form-group">
        <label for="avaiability">avaiability:</label>
        <input type="checkbox" class="form-control" id="avaiability" name="avaiability">
      </div>
<!-- Description -->

      <div class="form-group">
        <label for="description">description:</label>
        <input type="text" class="form-control" id="description" name="description">
      </div>
<!-- Series -->

      <div class="form-group">
        <label for="series">series:</label>
        <input type="text" class="form-control" id="series" name="series">
      </div>
<!-- Volume -->

      <div class="form-group">
        <label for="volume">volume:</label>
        <input type="numbers" class="form-control" id="volume" name="volume">
      </div>
<!-- Page -->

      <div class="form-group">
        <label for="page">page:</label>
        <input type="numbers" class="form-control" id="page" name="page">
      </div>
<!-- Rated -->

      <div class="form-group">
        <label for="rated">rated:</label>
        <input type="numbers" class="form-control" id="rated" name="rated">
      </div>

      <!-- <div class="form-group">
      <label for="writers">writers</label>
    <select name="writers" id="writers" multiple>
      @if ($writers)
        @foreach ($writers as $writer)
          <option value="{{$writer->id}}">{{$writer->name}}</option>
        @endforeach
      @endif
    </select>
    </div>

    <div class="form-group">
      <label for="artists">Artists</label>
    <select name="artists" id="artists" multiple>
      @if ($artists)
        @foreach ($artists as $artist)
          <option value="{{$artist->id}}">{{$artist->name}}</option>
        @endforeach
      @endif
    </select>
    </div> -->

      <button type="submit" class="btn btn-success">ADD</button>
      @if ($errors->any())
                <div class="alert">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                </div>
            @endif
    </form>
</div>

@endsection
