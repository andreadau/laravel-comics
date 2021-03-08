@extends('layouts.dashboard')
@section('title')
GO TO ADMIN PANEL
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <h1>SERIES</h1>
          <br>
          <a href="{{route('admin.series.create')}}"class="btn btn-primary">ADD SERIE</a>
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

          @foreach ($series as $serie)
            <tr>

              <td>{{$serie->id}}</td>
              <td>{{$serie->name}}</td>
              <td>{{$serie->created_at}}</td>
              <td>{{$serie->updated_at}}</td>
              <td><img src="{{asset('storage/' . $serie->img )}}" class="img_cover" alt=""></td>
              <td>
                <form action="{{route('admin.series.show', $serie->id )}}" method="get">
                  @csrf
                  <button type="submit" class="btn btn-primary"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                </form>
                <form action="{{route('admin.series.edit', $serie->id )}}" method="get">
                  @csrf
                 <button type="submit" class="btn btn-warning"><i class="fas fa-edit"></i> </button>
                </form>
                <form action="{{route('admin.series.destroy', $serie->id )}}" method="post">
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
