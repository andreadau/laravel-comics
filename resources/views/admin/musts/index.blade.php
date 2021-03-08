@extends('layouts.dashboard')
@section('title')
GO TO ADMIN PANEL
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <h1>MUSTS</h1>
          <br>
          <a href="{{route('admin.musts.create')}}"class="btn btn-primary">ADD MUST</a>
          <br>
          <br>
          <table class="table table-striped">
          <thead>
          <tr>
            <th>id</th>
            <th>name</th>
            <th>subtitle</th>
            <th>serie</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>cover</th>

          </tr>
          </thead>
          <tbody>

          @foreach ($musts as $must)
            <tr>

              <td>{{$must->id}}</td>
              <td>{{$must->name}}</td>
              <td>{{$must->subtitle}}</td>
              <td>{{$must->serie}}</td>
              <td>{{$must->created_at}}</td>
              <td>{{$must->updated_at}}</td>
              <td><img src="{{asset('storage/' . $must->img )}}" class="img_cover" alt=""></td>

              <td>
                <form action="{{route('admin.musts.show', $must->id )}}" method="get">
                  @csrf
                  <button type="submit" class="btn btn-primary"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                </form>
                <form action="{{route('admin.musts.edit', $must->id )}}" method="get">
                  @csrf
                 <button type="submit" class="btn btn-warning"><i class="fas fa-edit"></i> </button>
                </form>
                <form action="{{route('admin.musts.destroy', $must->id )}}" method="post">
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
