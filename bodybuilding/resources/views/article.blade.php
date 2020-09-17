@extends('master')

@section('content')
<div class="container">
<br>
<div class="display-4">{{$article->title}}</div>
<br>

<br>
<img class="img-fluid ml-5" src="{{asset('storage/coverImage/' . $article->img)}}" alt="slogan" style="width: auto; height:250px;">

<br>
<p class="text-large text-dark mt-4 mb-5" style="word-wrap: break-word;" >{{$article->body}}</p>
<br>

@auth
    
<div class="btn-group"> 
<a href="{{ '/articles/' . $article->id . '/edit'}}" type="button" class="btn btn-primary mb-5">Edit</a>
   <form action="{{route('articles.delete', ['id' => $article->id])}}" method="POST">

    @csrf

    @method('DELETE')

    <button type="submit" class="btn btn-danger">Delete</button>





</form>
</div>
@endauth

<br>
<br>
<br>
<br>
<br>


</div>
@endsection