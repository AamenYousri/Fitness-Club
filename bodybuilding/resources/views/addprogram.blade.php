@extends('master')

@section('content')

<div class="container mt-5">
    <br>
        <div class="display-4">Add new program</div>
        <br>
        <form action="/programs" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
              <label for="title">Title:</label>
              <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
            </div>
            
            
             
            <label for="boolean">Category:</label>
            <select class="form-control" id="category" name="category">
                <option>bulking</option>
                <option>shredding</option>
                <option>getfit</option>
                <option>powerlifting</option>
                <option>women</option>
                <option>abs</option>
                <option>calisthenics</option>
              
            </select>
            <br>

            <div class="form-group">
                <label for="title">PDF URL:</label>
                <input type="text" class="form-control" id="pdf" placeholder="Enter url" name="pdf">
              </div>
              
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