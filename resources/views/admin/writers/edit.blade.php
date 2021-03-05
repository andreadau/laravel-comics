@extends('layouts.dashboard')
@section('title')
GO TO ADMIN PANEL
@endsection
@section('content')
<div class="container">
  <h1>EDIT WRITERS</h1>
            <form action="{{route('admin.writers.update', $writer)}}" method="post">
              @csrf
              @method('patch')

            <div class="form-group">
              <label for="name">name:</label>
              <input type="text" class="form-control" id="name" name="name" value="{{$writer->name}}">
            </div>


            <button type="submit" class="btn btn-success">EDIT</button>
            </form>


          </div>
      </div>
  </div>
</div>
@endsection
