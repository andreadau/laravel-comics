@extends('layouts.dashboard')
@section('title')
GO TO ADMIN PANEL
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <h1>COMICS</h1>
          <br>
          <a href="{{route('admin.comics.create')}}"class="btn btn-primary">ADD COMICS</a>
          <br>
          <br>
          <table class="table table-striped">
          <thead>
          <tr>
            <th>id</th>
            <th>title</th>
            <th>price</th>
            <th>avaiability</th>
            <th>description</th>
            <th>series</th>
            <th>volume</th>
            <th>page</th>
            <th>rated</th>
            <th>creazione</th>
            <th>update</th>

          </tr>
          </thead>
          <tbody>

          @foreach ($comics as $comic)
            <tr>
              <td>{{$comic->id}}</td>
              <td>{{$comic->title}}</td>
              <td>{{$comic->price}}</td>
              <td>{{$comic->avaiability}}</td>
              <td>{{$comic->description}}</td>
              <td>{{$comic->series}}</td>
              <td>{{$comic->volume}}</td>
              <td>{{$comic->page}}</td>
              <td>{{$comic->rated}}</td>
              <td>{{$comic->created_at}}</td>
              <td>{{$comic->updated_at}}</td>

              <td>
              <form action="{{route('admin.comics.show', $comic )}}" method="get">
                  @csrf
                  <button type="submit" class="btn btn-primary"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                </form>
                <form action="{{route('admin.comics.edit', $comic->id )}}" method="get">
                  @csrf
                 <button type="submit" class="btn btn-warning"><i class="fas fa-edit"></i> </button>
                </form>
                <form action="{{route('admin.comics.destroy', $comic->id )}}" method="post">
                  @csrf
                  @method('delete')
                 <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> </button>
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
