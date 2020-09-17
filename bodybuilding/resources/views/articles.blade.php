@extends('master')

@section('content')
<img class="img-responsive d-lg-none d-flex justify-content-end paddingLeft" src="{{asset('img/fitness-club-logo-vector-20684856%20copy.PNG')}}" alt="slogan" style="width: 80%">

        <div class="container ">
                <br>
                <br>
            <h1 class="display-2 d-none d-lg-block">Articles</h1>
            <br>
            <br>
      
        <div class="row">
                @foreach($articles as $article)
            <div class="col-sm-12 col-md-4 mb-5 onHover shaddow"> 
            <a href="{{ '/articles/' . $article->id}}">
                    <img class="img-fluid rounded mx-auto d-block  " src="{{asset('storage/coverImage/' . $article->img)}}" alt="slogan" style="width: auto; height:200px;">
                
              
            <div class="text-large d-flex justify-content-center "><p class="text-dark titleHover">{{$article->title}}</p></div>
                
                </a>
            </div>
     @endforeach
        </div> 
        <div class="row">
        <div class="col-md-12 d-flex justify-content-center">{{$articles->links()}}</div>
        </div>
        
       
       
        <hr>
        <hr>
        
        
        <div class="display-3">Nutrition</div>
        <br>
        <br>
        
        <div class="row">
                @foreach($nutritions as $nutrition)
                <div class="col-sm-12 col-md-4 mb-5 onHover shaddow">
                        <a href="{{ '/articles/' . $nutrition->id}}">
                            <img class="img-fluid rounded mx-auto d-block  " src="{{asset('storage/coverImage/' . $nutrition->img)}}" alt="slogan" style="width: auto; height:200px;">
                        
                      
                        <div class="text-large d-flex justify-content-center "><p class="text-dark titleHover">{{$nutrition->title}}</p></div>
                        
                        </a>
                    </div>
   
      
                    @endforeach
        </div> 
        
        
        
        
        
        </div>
          
@endsection