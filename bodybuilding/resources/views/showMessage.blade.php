@extends('master')

@section('content')

<div class="container">
        <div class="mb-5"></div>
        <div class="mb-5"></div>

<div class="display-4">{{$message->subject}}</div>
<br>
<br>
<p class="text-large">{{$message->message}}</p>



</div>
    
@endsection