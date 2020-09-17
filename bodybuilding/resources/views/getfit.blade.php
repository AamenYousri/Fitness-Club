@extends('master')
@section('content')

<div class="container mt-5">

    <div class="display-4 mb-5">Get fit Programs</div>

    <div class="row">
            @foreach ($program as $prog)
            
            <div class="col-sm-12 col-md-4 mb-5 onHover shaddow">
                    <a href="{{url("$prog->pdf")}}" class="text-dark titleHover" target="_blank" >
                            <img class="img-fluid rounded mx-auto d-block  " src="{{asset('storage/coverImage/' . $prog->img)}}" alt="slogan" style="width: auto; height:200px;">
               
                 <div class=" d-flex justify-content-center "><h3>{{$prog->title}}</h3></div>
                </a>
                @auth
                    
                <form action="{{route('program.delete', ['id' => $prog->id])}}" method="POST">

                        @csrf
                    
                        @method('DELETE')
                    
                        <button type="submit" class="btn btn-danger mx-auto d-block ">Delete</button>
                    
                    
                    
                    
                    
                    </form>
                @endauth

             </div>
             @endforeach

    </div>


    <div class="row">
            <div class="col-md-12 d-flex justify-content-center">{{$program->links()}}</div>
            </div>







</div>
    
@endsection