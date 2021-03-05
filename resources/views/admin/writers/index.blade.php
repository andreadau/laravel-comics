@extends('layouts.dashboard')
@section('title')
GO TO ADMIN PANEL
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <h1>WRITERS</h1>
          <br>
          <a href="{{route('admin.writers.create')}}"class="btn btn-primary">ADD WRITER</a>
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

          @foreach ($writers as $writer)
            <tr>

              <td>{{$writer->id}}</td>
              <td>{{$writer->name}}</td>
              <td>{{$writer->created_at}}</td>
              <td>{{$writer->updated_at}}</td>

              <td>
                <form action="{{route('admin.writers.show', $writer )}}" method="get">
                  @csrf
                  <button type="submit" class="btn btn-primary"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                </form>
                <form action="{{route('admin.writers.edit', $writer->id )}}" method="get">
                  @csrf
                 <button type="submit" class="btn btn-warning"><i class="fas fa-edit"></i> </button>
                </form>
                <form action="{{route('admin.writers.destroy', $writer->id )}}" method="post">
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
