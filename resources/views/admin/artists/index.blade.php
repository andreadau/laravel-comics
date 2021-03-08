@extends('layouts.dashboard')
@section('title')
GO TO ADMIN PANEL
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <h1>ARTISTS</h1>
          <br>
          <a href="{{route('admin.artists.create')}}"class="btn btn-primary">ADD ARTIST</a>
          <br>
          <br>
          <table class="table table-striped">
          <thead>
          <tr>
            <th>id</th>
            <th>name</th>
            <th>created_at</th>
            <th>updated_at</th>
          </tr>
          </thead>
          <tbody>

          @foreach ($artists as $artist)
            <tr>

              <td>{{$artist->id}}</td>
              <td>{{$artist->name}}</td>
              <td>{{$artist->created_at}}</td>
              <td>{{$artist->updated_at}}</td>

              <td>
                <form action="{{route('admin.artists.show', $artist->id )}}" method="get">
                  @csrf
                 <button type="submit" class="btn btn-primary"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                </form>
                <form action="{{route('admin.artists.edit', $artist->id )}}" method="get">
                  @csrf
                 <button type="submit" class="btn btn-warning"> <i class="fas fa-edit"></i> </button>
                </form>
                <form action="{{route('admin.artists.destroy', $artist->id )}}" method="post">
                  @csrf
                  @method('delete')
                 <button type="submit" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
                </form>
              </td>

            </tr>
          @endforeach
          </tbody>
          </table>

        </div>
    </div>
</div>
@endsection
