@extends('master')
@section('content')
<img class="img-responsive sloganImg d-none d-lg-block" src="{{asset('img/background.PNG')}}" alt="slogan">

<img class="img-responsive d-lg-none d-flex justify-content-end paddingLeft" src="{{asset('img/fitness-club-logo-vector-20684856%20copy.PNG')}}" alt="slogan" style="width: 80%">

{{-- 
<br>
<br>
<br> --}}


<div class="pt-5 pb-5 bg-primary text-light ">
    <div class="container display-4 text-center ">What do we serve?</div>
    <br>
    <br>
    <div class="container">



        <div class="row text-center d-flex justify-content-center">



                {{-- {{dd($articles3)}} --}}
                {{-- {{dd($articles2)}} --}}
                {{-- {{dd($articles1->title)}} --}}

            <div class="col-8 col-md-3 onHover" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="100">
                <a href="#articles">
                    <span><i class="far fa-newspaper fa-5x pb-2 onHover"></i></span>
                    <p>Articles</p>
                </a>
            </div>

          
            
            
            <div class="col-8 col-md-3 onHover" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="400">
                <a href="#nutrition">
                    <span><i class="fab fa-nutritionix fa-5x pb-2 onHover"></i></span>
                    <p>Nutrition</p>
                </a>
            </div>

            <div class="col-8 col-md-3 onHover" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="600">
                <a href="#programs">
                    <span><i class="fas fa-dumbbell fa-5x pb-2 onHover"></i></span>
                    <p>Programs</p>
                </a>
            </div>

            <div class="col-8 col-md-3 onHover" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="800">
                <a href="#motivation">
                    <span><i class="fas fa-quote-left fa-5x pb-2 onHover"></i></span>
                    <p>Motivation</p>
                </a>
            </div>

        </div>


    </div>


</div>






<br class="d-none d-lg-block">
<br class="d-none d-lg-block">
<br class="d-none d-lg-block">
<br class="d-none d-lg-block">



<hr>
<div class="container">
    <div class="row">

        <div class="container display-4 col-sm-12 col-md-3 mt-3 pt-5 pl-5" id="articles">Articles</div>


        <br>

        <div class="container col-sm-12 col-md-9">
            <!--Carousel Wrapper-->
            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <!--First slide-->
                    @foreach ($articles1 as $article1)
                        
                    <div class="carousel-item active text-center">
                        <div class="jumbotron ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6">
                     <img class="img-fluid rounded mx-auto d-block  " src="{{asset('storage/coverImage/' . $article1->img)}}" alt="slogan" style="width: auto; height:200px;">
    
                                    </div>
                                    <div class="col-sm-4">
                            <h1 class="text-light">{{$article1->title}}</h1>
                                <a href="{{ '/articles/' . $article1->id}}">View more</a>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach ($articles2 as $article2)

                    <div class="carousel-item text-center">
                        <div class="jumbotron ">
                            <div class="container">
                                    <div class="row">
                                            <div class="col-sm-6">
                             <img class="img-fluid rounded mx-auto d-block  " src="{{asset('storage/coverImage/' . $article2->img)}}" alt="slogan" style="width: auto; height:200px;">
            
                                            </div>
                                            <div class="col-sm-4">
                                    <h1 class="text-light">{{$article2->title}}</h1>
                                        <a href="{{ '/articles/' . $article2->id}}">View more</a>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach ($articles3 as $article3)

                    <div class="carousel-item text-center">
                        <div class="jumbotron ">
                            <div class="container">
                                    <div class="row">
                                            <div class="col-sm-6">
                             <img class="img-fluid rounded mx-auto d-block  " src="{{asset('storage/coverImage/' . $article3->img)}}" alt="slogan" style="width: auto; height:200px;">
            
                                            </div>
                                            <div class="col-sm-4">
                                    <h1 class="text-light">{{$article3->title}}</h1>
                                        <a href="{{ '/articles/' . $article3->id}}">View more</a>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!--/First slide-->

                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->
        </div>
    </div>
    <div class="text-right">
        <a href="{{url('articles')}}" class="text-dark">Check Articles from here <i class="fas fa-arrow-right"></i></a>
    </div>

</div>

<br>
<br>
<br>
<hr>
<br>
<br>
<br>
<div class="container">
    <div class="row container-fluid " id="nutrition" data-aos="zoom-in" data-aos-duration="2000">
    <div class="mt-3 mb-3 container col-sm-12 col-md-3 pr-2 pl-3 pt-4"><img class="img-responsive  d-none d-md-block" style="width: 80%;" src="{{asset('img/nutrition-512.png')}}" alt="slogan"></div>
        <div class="container col-sm-12 col-md-9 pl-5">
            <h3 class="display-2  d-none d-md-block">Nutrition</h3>
            <h3 class="display-4  d-md-none">Nutrition</h3>
            <p class=" pb-3 text-large text-dark pl-1">
                Nutrition is the one thing that will most greatly dictate your physique. <br>
                The food you intake is a direct reflection of how you will look and feel.<br>
                To figure out needs for the elite nutrition program, start by determining<br>
                 your daily caloric needs that will depend on your activity level.<br>
                You can use our<a href="{{url('nutrition')}}" class="btn btn-link">calories calculator</a>.<br>
                You can also find nutrition articles to improve your knowledge about different nutrition plans including paleo diet, keto diet, carb-cycling and more .</p>
            <a href="{{url('nutrition')}}" class="text-dark float-right ">Check nutrition from here <i class="fas fa-arrow-right"></i></a>
        </div>

    </div>

    <br>
    <br>
    <br>
    <hr>
    <br>
    <br>
    <br>



    <div class="row container-fluid" id="programs" data-aos="zoom-in" data-aos-duration="2000">
        <div class="container col-sm-12 col-md-9 pl-5">
            <h3 class="display-2 d-none d-md-block">Programs</h3>
            <h3 class="display-4 d-md-none">Programs</h3>
            <p class=" pb-3 text-large"> Hundreds of effective  workout routines for building muscles , losing fat, being fit
Increasing strength, calisthenics workouts and power lifting workouts and more 
There is a variety of programs for different levels. <br>
Start finding your workout now.</p>
            <a href="{{url('programs')}}" class="text-dark float-right">Check programs from here <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="mt-3 mb-3 container col-sm-12 col-md-3 pr-4 pt-5 mt-2"><img class="img-responsive width70 d-none d-md-block" src="{{asset('img/dumbel.png')}}" alt="slogan"></div>

    </div>


    <br>
    <br> <br>
    <hr>
    <br> <br>
    <br>

    <div class="row container-fluid pl-4 ml-3" id="motivation" data-aos="zoom-in" data-aos-duration="2000">
        <div class="mt-3 mb-3 container col-sm-12 col-md-3 pl-5 "><img class="img-responsive  d-none d-md-block" src="{{asset('img/aheee.png')}}" alt="slogan" style="width: 75%;"></div>
        <div class="container col-sm-12 col-md-9 pl-2">
            <h3 class="display-2  d-none d-md-block">Motivation</h3>
            <h3 class="display-4  d-md-none">Motivation</h3>
            <p class=" pb-3 text-large text-dark pl-1">Increasing an individual’s self - efficacy can enhance muscular endurance performance. Pre-game speeches are one way of achieving this
You can find different motivational videos
And top 50 motivational quotes for instagram captions. </p>
            <a href="{{url('motivation')}}" class="text-dark float-right ">Check motivation from here <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
    <br>
    <br>

    <br>
    <hr>
    <br>

    <br>
    <br>



    <div class="row container-fluid" data-aos="zoom-in" data-aos-duration="2000">
        <div class="container col-sm-12 col-md-9 pl-5">
            <h3 class="display-2 d-none d-md-block">Contact us</h3>
            <h3 class="display-4 d-md-none">Contact us</h3>
            <p class=" pb-3 text-large">Send us for FREE Personal trainers <br>or for any extra programs recomandation. </p>
            <a href="{{url('contactus')}}" class="text-dark float-right">Contact us from here <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="mt-3 mb-3 container col-sm-12 col-md-3 pr-4 mt-1 mb-3"><img class="img-responsive sloganImg d-none d-md-block mt-1" src="{{asset('img/25.png')}}" alt="slogan"></div>
    </div>
</div>
<br>
<br>        
@endsection