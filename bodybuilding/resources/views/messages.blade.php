@extends('master')
@section('content')

<div class="container">
<br>
<br>
    <div class="display-4 mt-4"> Messages </div>
<br>
    <table class="table table-dark table-striped table-hover table-responsive-md">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Time</th>
            <th>Show more</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($messages as $message)
            <tr>
            <td>{{$message->id}}</td>
            <td>{{$message->name}}</td>
            <td>{{$message->email}}</td>
            <td>{{$message->subject}}</td>
            <td>{{$message->created_at}}</td>
            <td><a class="btn btn-primary" href="{{'/messages/' . $message->id}}">Show more</a></td>
            <td><form action="{{route('message.delete', ['id' => $message->id])}}" method="POST">

                @csrf
            
                @method('DELETE')
            
                <button type="submit" class="btn btn-danger">Delete</button>
            
            
            
            
            
            </form></td>
            </tr> 
            @endforeach
        </tbody>
      </table>
      <br>
      <div class="row">
            <div class="col-md-12 d-flex justify-content-center">{{$messages->links()}}</div>
            </div>
<br>
<br>
<br>





</div>
@endsection