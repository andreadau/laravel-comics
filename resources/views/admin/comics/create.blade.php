@extends('layouts.dashboard')

@section('content')
<h1>CREATE A COMICS</h1>

          <form action="{{route('admin.comics.store')}}" method="post" enctype="multipart/form-data" >
            @csrf

           <div class="form-group">
             <label for="title">title:</label>
             <input type="text" class="form-control" id="title" name="title">
           </div>

           <div class="form-group">
            <label for="img">Image</label>
            <input type="file" class="form-control-file" name="img" id="img" placeholder="Add an image" aria-describedby="imgImgHelper">
            <small id="imgImgHelper" class="form-text text-muted">Add an image</small>
            </div>

           <div class="form-group">
             <label for="price">price:</label>
             <input type="numbers" class="form-control" id="price" name="price">
           </div>

           <div class="form-group">
             <label for="avaiability">avaiability:</label>
             <input type="checkbox" class="form-control" id="avaiability" name="avaiability">
           </div>


           <div class="form-group">
             <label for="description">description:</label>
             <input type="text" class="form-control" id="description" name="description">
           </div>


           <div class="form-group">
             <label for="series">series:</label>
             <input type="text" class="form-control" id="series" name="series">
           </div>


           <div class="form-group">
             <label for="volume">volume:</label>
             <input type="numbers" class="form-control" id="volume" name="volume">
           </div>


           <div class="form-group">
             <label for="page">page:</label>
             <input type="numbers" class="form-control" id="page" name="page">
           </div>

           <div class="form-group">
             <label for="rated">rated:</label>
             <input type="numbers" class="form-control" id="rated" name="rated">
           </div>

           <button type="submit" class="btn btn-success">ADD</button>
          </form>

        </div>
    </div>
</div>

@endsection
