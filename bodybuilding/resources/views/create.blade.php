@extends('master')

@section('content')

<div class="container mt-5">
    <br>
        <div class="display-4">Add new article</div>
        <br>
        <form action="/articles" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
              <label for="title">Title:</label>
              <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
            </div>
            <div class="form-group">
              <label for="body">Body:</label>
              <textarea class="form-control" rows="5" id="body" name="body"></textarea>

            </div>
            <label for="boolean">Select:</label>
            <select class="form-control" id="boolean" name="boolean">
              <option>0</option>
              <option>1</option>
            </select>
            <br>
            <div class="form-group">
              <input type="file" name="coverImage" id="coverImage" class="form-control-file">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Create</button>
          </form>

<br>
<br>
<br>
<br>
</div>
    
@endsection