@extends('layouts.dashboard')
@section('title')
GO TO ADMIN PANEL
@endsection
@section('content')
<div class="container">
  <h1>ADD A NEW WRITER</h1>

            <form action="{{route('writers.store')}}" method="post" >
              @csrf

            <div class="form-group">
              <label for="name">name:</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>

            <button type="submit" class="btn btn-success">ADD</button>
            </form>

          </div>
      </div>
  </div>
</div>
@endsection
