@extends('master')

@section('content')

<div class="container mt-5">
    <br>
        <div class="display-4">Edit article</div>
        <br>
<form action="{{ '/articles/' . $article->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{$article->title}}">
            </div>
            <div class="form-group">
              <label for="body">Body:</label>
              <textarea class="form-control" rows="5" id="body" name="body" value="">{{$article->body}}</textarea>

            </div>
            <label for="boolean">Select:</label>
            <select class="form-control" id="boolean" name="boolean">
              <option {{$article->boolean== 0 ? 'SELECTED' : '' }}>0</option>
              <option {{$article->boolean== 1 ? 'SELECTED' : '' }}>1</option>
            </select>
            <br>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>

<br>
<br>
<br>
<br>
</div>
    
@endsection