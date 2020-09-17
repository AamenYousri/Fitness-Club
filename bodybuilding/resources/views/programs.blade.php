@extends('master')

@section('content')
<img class="img-responsive d-lg-none d-flex justify-content-end paddingLeft" src="{{asset('img/fitness-club-logo-vector-20684856%20copy.PNG')}}" alt="slogan" style="width: 80%">

<br>
 <div class="container ">
        <br>
    
     <h1 class="display-2 d-none d-lg-block">Programs</h1>
     <br>
     <br>

 <div class="row">
     <div class="col-sm-12 col-md-4 mb-5 onHover">
        <a href="{{url('/programs/bulking')}}" class="text-dark titleHover">

     <div>
         <img class="img-fluid rounded mx-auto d-block  mb-3" src="{{asset('img/bulking.jpg')}}" alt="slogan" style="width: auto; height:230px;">

        </div>
       
     <div class="d-flex justify-content-center "><h3>Bulking</h3></div>
         
    </a>
         
     </div>


     <div class="col-sm-12 col-md-4 mb-5 onHover">
            <a href="{{url('/programs/shredding')}}" class="text-dark titleHover">
            <div>
                    <img class="img-fluid rounded mx-auto d-block  mb-3 " src="{{asset('img/shredding.png')}}" alt="slogan" style="width: auto; height:230px;">
                </div>
          
            <div class="d-flex justify-content-center "><h3>Shredding</h3></div>
        </a>
            
        </div>


     <div class="col-sm-12 col-md-4 mb-5 onHover">
            <a href="{{url('/programs/calisthenics')}}" class="text-dark titleHover">
         <div>
                <img class="img-fluid rounded mx-auto d-block  mb-3" src="{{asset('img/calishtenics.jpg')}}" alt="slogan" style="width: auto; height:230px;">
            </div>
       
         <div class=" d-flex justify-content-center "><h3>Calisthenics</h3></div>
        </a>
         
     </div>


 
     <div class="col-sm-12 col-md-4 mb-5 onHover">
            <a href="{{url('/programs/getfit')}}" class="text-dark titleHover">
            <div>
                    <img class="img-fluid rounded mx-auto d-block  mb-3" src="{{asset('img/getfit.jpg')}}" alt="slogan" style="width: auto; height:230px;">
                </div>
          
            <div class=" d-flex justify-content-center "><h3>Get fit</h3></div>
        </a>
            
        </div>

 
        <div class="col-sm-12 col-md-4 mb-5 onHover">
                <a href="{{url('/programs/powerlifting')}}" class="text-dark titleHover">
            <div>
                    <img class="img-fluid rounded mx-auto d-block  mb-3" src="{{asset('img/strenght.png')}}" alt="slogan" style="width: auto; height:230px;">
                </div>
          
            <div class=" d-flex justify-content-center "><h3>Powerlifting & Strength</h3></div>
            
        </a>
        </div>

 
        <div class="col-sm-12 col-md-4 mb-5 onHover">
                <a href="{{url('/programs/women')}}" class="text-dark titleHover">
            <div>
                    <img class="img-fluid rounded mx-auto d-block  mb-3" src="{{asset('img/women.jpg')}}" alt="slogan" style="width: auto; height:230px;">
                </div>
          
            <div class=" d-flex justify-content-center "><h3>Women</h3></div>
            
        </a>
        </div>

        <div class="col-sm-12 col-md-4 onHover">
        </div>
        <div class="col-sm-12 col-md-4 mb-5 onHover">
                <a href="{{url('/programs/abs')}}" class="text-dark titleHover">
            <div>
                    <img class="img-fluid rounded mx-auto d-block mb-3 " src="{{asset('img/abs.jpg')}}" alt="slogan" style="width: auto; height:230px;">
                </div>
          
            <div class="d-flex justify-content-center "><h3>ABS</h3></div>
            
        </a>
        </div>

        

 

 </div> 
 
 
 
 
 
 
 
 
 </div>
@endsection