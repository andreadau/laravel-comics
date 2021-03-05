@extends('layouts.dashboard')
@section('title')
GO TO ADMIN PANEL
@endsection
@section('content')
<div class="container">
  <h1>EDIT ARTIST</h1>
            <form action="{{route('admin.artists.update', $artist)}}" method="post">
              @csrf
              @method('patch')

            <div class="form-group">
              <label for="name">name:</label>
              <input type="text" class="form-control" id="name" name="name" value="{{$artist->name}}">
            </div>


            <button type="submit" class="btn btn-success">EDIT</button>
            </form>


          </div>
      </div>
  </div>
</div>
@endsection
