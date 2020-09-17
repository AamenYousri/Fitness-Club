<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fitness Club</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> --}}
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="shortcut icon" href="{{asset('img/dumbel.png')}}">
  

    {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"> --}}

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link href="{{asset('css/app.css')}}"  rel="stylesheet"/>
    <link href="{{asset('css/style.css')}}"  rel="stylesheet"/>

</head>

<body>

    <header>

            @include('includes.messages')
        
        <div class="transparentNavBar d-none d-lg-block" style="
        background-image: url('{{asset('img/720212.jpg')}}'); 
        background-repeat: no-repeat;
        background-size: cover;
        /* width: 100%; */
        height: 800px;
      ">

        <div class="d-none d-lg-block">


            <nav class="navbar navbar-expand-lg navbar-transparent pt-3" >
                <a class="navbar-brand " href="">Fitness <span class="text-primary">Club</span></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navb">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ml-3">
                            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item ml-3">
                            <a class="nav-link {{ Request::is('articles') ? 'active' : '' }}" href="{{url('articles')}}">Articles</a>
                        </li>
                        <li class="nav-item ml-3">
                            <a class="nav-link {{ Request::is('nutrition') ? 'active' : '' }}" href="{{url('nutrition')}}">Nutrition</a>
                        </li>
                        <li class="nav-item ml-3">
                            <a class="nav-link {{ Request::is('programs') ? 'active' : '' }}" href="{{url('programs')}}">Programs</a>
                        </li>
                        <li class="nav-item ml-3">
                            <a class="nav-link {{ Request::is('motivation') ? 'active' : '' }}" href="{{url('motivation')}}">Motivation</a>
                        </li>
                        <li class="nav-item ml-3">
                            <a class="nav-link {{ Request::is('contactus') ? 'active' : '' }}" href="{{url('contactus')}}">Contact Us</a>
                        </li>

                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        
                        @auth
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{'/articles/create'}}">Add article</a>
                                <a class="dropdown-item" href="{{'/programs/add'}}">Add program</a>
                                <a class="dropdown-item" href="{{'/messages'}}">Show messages</a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endauth
                    </ul>
                    <form class="form-inline my-2 my-lg-0" action="/search" method="POST" >
                        @csrf
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" id="search" name="search">
                        <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>
        <br>
        <br>
        <br>
            <br>
            <br>



                                <div class="container display-2 text-light ml-5">Fitness <span class="text-primary">Club</span></div>

                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>




            </div>
            
    </header>
    <main>
            {{-- <img class="img-responsive d-lg-none d-flex justify-content-end paddingLeft" src="{{asset('img/fitness-club-logo-vector-20684856%20copy.PNG')}}" alt="slogan" style="width: 80%"> --}}
            <img class="img-responsive d-lg-none d-flex justify-content-end" src="{{asset('img/72021.jpg')}}" alt="slogan" style="width: 100%; ">

    
                  <!-- The Modal -->
                  <div class="modal" id="myModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                  
                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Send us an email now!</h4>
                          <button type="button" class="close" data-dismiss="modal" id="close"><span class="text-large">&times;</span></button>
                        </div>
                  
                        <!-- Modal body -->
                        <div class="modal-body">
                            <h2 class="text-center">
                        <span><i class="fas fa-paper-plane fa-1x text-info mr-4"></i></span> fitnessclubf@hotmail.com
                        </h2>
                        </div>
                  
                  
                      </div>
                    </div>
                  </div>

     
                  <div id='toTop' class="mb-3 mr-1 p-2"><i class="fas fa-angle-double-up fa-3x"></i></div>

          <br>
          <br>
                

    <div class=" pb-5 boxShadow container">
    <div class="container display-4 text-center mb-5">What do we serve?</div>
    <br>
    <br>
    <div class="container">
           
        
        
        <div class="row text-center d-flex justify-content-center">


    
                <div class="col-8 col-md-3 onHover mb-3" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="100">
                    <a href="#articles" class="text-dark">
                        <span><i class="far fa-newspaper fa-4x pb-2 onHover"></i></span>
                        <p class="text-large font-weight-bold">Articles</p>
                    </a>
                </div>
    
              
                
                
                <div class="col-8 col-md-3 onHover mb-3" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="400">
                    <a href="#nutrition" class="text-dark">
                        <span><i class="fab fa-nutritionix fa-4x pb-2 onHover"></i></span>
                        <p class="text-large font-weight-bold">Nutrition</p>
                    </a>
                </div>
    
                <div class="col-8 col-md-3 onHover mb-3" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="600">
                    <a href="#programs" class="text-dark">
                        <span><i class="fas fa-dumbbell fa-4x pb-2 onHover"></i></span>
                        <p class="text-large font-weight-bold">Programs</p>
                    </a>
                </div>
    
                <div class="col-8 col-md-3 onHover mb-3" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="800">
                    <a href="#motivation" class="text-dark">
                        <span><i class="fas fa-quote-left fa-4x pb-2 onHover"></i></span>
                        <p class="text-large font-weight-bold">Motivation</p>
                    </a>
                </div>
    
            </div>



       {{--   <br class="d-none d-lg-block">
                

       <div class="row text-center d-flex justify-content-center pt-3  ">



            <div class="col-8 col-md-3 onHover mb-5" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="100">
                <a href="#articles" class="text-dark">
                   
                        <span class="row  d-flex align-items-center  justify-content-center">
                    <span><i class="far fa-newspaper fa-4x pb-2 onHover col-6 col-md-12 "></i></span>
                    <p class="col-6 col-md-12  text-large font-weight-bold">Articles</p>
                       
                    </span>
                </a>
            </div>

          
            
           
           <div class="col-8 col-md-3 onHover mb-5" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="400">
                <a href="#nutrition" class="text-dark">
                   
                        <span class="row  d-flex align-items-center  justify-content-center">
                    <span><i class="fab fa-nutritionix  fa-4x pb-2 onHover col-6 col-md-12 "></i></span>
                    <p class="col-6 col-md-12  text-large font-weight-bold ">Nutrition</p>
                       
                    </span>
                </a>
            </div>

           
            <div class="col-8 col-md-3 onHover mb-5" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="600">
                    <a href="#programs" class="text-dark">
                       
                            <span class="row  d-flex align-items-center  justify-content-center">
                        <span><i class=" fas fa-dumbbell  fa-4x pb-2 onHover col-6 col-md-12 "></i></span>
                        <p class="col-6 col-md-12  text-large font-weight-bold">Programs</p>
                           
                        </span>
                    </a>
                </div>
    
           
            <div class="col-8 col-md-3 onHover mb-5" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="800">
                    <a href="#motivation" class="text-dark">
                       
                            <span class="row  d-flex align-items-center  justify-content-center">
                        <span><i class=" fas fa-quote-left  fa-4x pb-2 onHover col-6 col-md-12 "></i></span>
                        <p class="col-6 col-md-12  text-large font-weight-bold">Motivation</p>
                           
                        </span>
                    </a>
                </div>
    

        </div> --}}















    </div>


</div>






<br class="d-none d-lg-block">
<br class="d-none d-lg-block">
<br class="d-none d-lg-block">
<br class="d-none d-lg-block">

<hr>
     
<div class="container">
        <div class="row">
    
            <div class="container display-4 col-sm-12 col-lg-3 mt-3 pt-5 pl-5" id="articles">Articles</div>
    
    
            <br>
    
            <div class="container col-sm-12 col-lg-9">
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
                            
                        <div class="carousel-item active text-center ">
                            <div class="jumbotron ">
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-6">
                         <img class="img-fluid rounded mx-auto d-block  " src="{{asset('storage/coverImage/' . $article1->img)}}" alt="slogan" style="width: auto; height:200px;">
        
                                        </div>
                                        <div class="col-sm-4">
                                <h1 class="text-light">{{$article1->title}}</h1>
                                    <span class="fixed-bottom"><a href="{{ '/articles/' . $article1->id}}" style="color:#f1f1f1">  View more</a></span>
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
                                        <span class="fixed-bottom"><a href="{{ '/articles/' . $article2->id}}" style="color:#f1f1f1"> View more</a></span>
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
                                        <span class="fixed-bottom"><a href="{{ '/articles/' . $article3->id}}" style="color:#f1f1f1"> View more</a></span>
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
            <a href="{{url('articles')}}" class="text-dark"><span style="color:#4287f5;">Check Articles from here </span><i class="fas fa-arrow-right"></i></a>
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

    <div class="row container-fluid leftBorder" id="nutrition" data-aos="fade" data-aos-duration="2000">
    <div class="mt-3 mb-3 container col-sm-12 col-md-3 pr-2 pl-3 pt-4 "><img class="img-responsive  d-none d-lg-block" style="width: 100%;" src="{{asset('img/nutrition-512.png')}}" alt="slogan"></div>
        <div class="container col-sm-12 col-md-12 col-lg-9 pl-5">
            <h3 class="display-2  d-none d-md-block">Nutrition</h3>
            <h3 class="display-4  d-md-none">Nutrition</h3>
            <p class=" pb-3 text-large text-dark pl-1" style=" text-align: justify;">
                Nutrition is the one thing that will most greatly dictate your physique.
                The food you intake is a direct reflection of how you will look and feel.<br>
               
            <a href="{{url('nutrition')}}" class="text-dark float-right " ><span style="color:#4287f5;"  ><small> Check nutrition from here</small></span> <i class="fas fa-arrow-right"></i></a>
        </div>

    </div>

    <br>
    <br>
    <br>
    <hr>
    <br>
    <br>
    <br>


    <div class="row container-fluid leftBorder" id="programs" data-aos="fade" data-aos-duration="2000">
        <div class="container col-sm-12 col-md-12 col-lg-9 pl-5">
            <h3 class="display-2 d-none d-md-block">Programs</h3>
            <h3 class="display-4 d-md-none">Programs</h3>
            <p class=" pb-3 text-large"  style=" text-align: justify;"> Hundreds of effective  workout routines for building muscles , losing fat, being fit
Increasing strength, calisthenics workouts and power lifting workouts and more 
There is a variety of programs for different levels. 
Start finding your workout now.</p>
            <a href="{{url('programs')}}" class="text-dark float-right"><span style="color:#4287f5;">Check programs from here </span><i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="mt-3 mb-3 container col-sm-12 col-md-3 pr-4 pt-5 mt-2"><img class="img-responsive  d-none d-lg-block" style="width:100%;" src="{{asset('img/dumbel.png')}}" alt="slogan"></div>

    </div>
  

    <br>
    <br> <br>
    <hr>
    <br> <br>
    <br>

    <div class="row container-fluid pl-5 leftBorder" id="motivation" data-aos="fade" data-aos-duration="2000">
        <div class="mt-3 mb-3 container col-sm-12 col-md-3 pl-5"><img class="img-responsive  d-none d-lg-block" src="{{asset('img/aheee.png')}}" alt="slogan" style="width: 100%"></div>
        <div class="container col-sm-12 col-md-12 col-lg-9 pl-2">
            <h3 class="display-2  d-none d-md-block">Motivation</h3>
            <h3 class="display-4  d-md-none">Motivation</h3>
            <p class=" pb-3 text-large text-dark pl-1"  style=" text-align: justify;">Increasing an individual’s self - efficacy can enhance muscular endurance performance. Pre-game speeches are one way of achieving this
You can find different motivational videos
And top 50 motivational quotes for instagram captions. </p>
            <a href="{{url('motivation')}}" class="text-dark float-right "><span style="color:#4287f5;">Check motivation from here</span> <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>

<br>
    <br>

    <br>
    <hr>
    <br>

    <br>
    <br>



    <div class="row container-fluid leftBorder" data-aos="fade" data-aos-duration="2000">
        <div class="container col-sm-12 col-md-12 col-lg-9 pl-5">
            <h3 class="display-2 d-none d-md-block">Contact us</h3>
            <h3 class="display-4 d-md-none">Contact us</h3>
            <p class=" pb-3 text-large"  style=" text-align: justify;">Send us for FREE Personal trainers or for any extra programs recomandation. </p>
            <a href="{{url('contactus')}}" class="text-dark float-right"><span style="color:#4287f5;">Contact us from here </span><i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="mt-3 mb-3 container col-sm-12 col-md-3 pr-4 mt-1 mb-3"><img class="img-responsive sloganImg d-none d-lg-block mt-1" src="{{asset('img/25.png')}}" alt="slogan"></div>
    </div>
</div>

<br>
<br>        

     
    </main>


    <footer>
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <img class="img-responsive  d-flex justify-content-end paddingLeft" src="{{asset('img/fitnessone.png')}}" alt="slogan" style="width: 80%">
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="menu">
                        <span>Menu</span>
                        <li>
                        <a href="{{url('/')}}">Home</a>
                        </li>

                        <li>
                            <a href="{{url('articles')}}">Articles</a>
                        </li>

                        <li>
                            <a href="{{url('nutrition')}}">Nutrition</a>
                        </li>

                        <li>
                            <a href="{{url('programs')}}">Programs </a>
                        </li>
                        <li>
                            <a href="{{url('motivation')}}">Motivation </a>
                        </li>
                       

                    </ul>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="address">
                        <span>Contact</span>
                        <li>
                           <a href="https://www.facebook.com/FitnessClubf/"   target="_blank">Facebook</a>
                        </li>
                        <li>
                           <a href="https://www.instagram.com/fitnessclubf4/?hl=en"  target="_blank">Instagram</a>
                        </li>
                        <li>
                            <a href="#" id="emailClick">Email</a>
                        </li>
                    </ul>
                </div>


            </div>
        </div>
        
        <div class="d-lg-none" style="position: fixed">
            <div class="page-wrapper chiller-theme toggled">
                <a id="show-sidebar" class="btn btn-md btn-dark  pr-5 pl-4" href="#">
                    <i class="fas fa-bars fa-2x"></i>
                </a>
                <nav id="sidebar" class="sidebar-wrapper">
                    <div class="sidebar-content">
                        <div class="sidebar-brand">
                            <a href="#">Fitness <span class="text-primary">Club</span></a>
                            <div id="close-sidebar">
                                <i class="fas fa-times"></i>
                            </div>
                        </div>

                        <!-- sidebar-header  -->
                        <div class="sidebar-search">
                            <div>
                                <div class="input-group">
                                    <form action="/search" method="POST">
                                        @csrf
                                    <input type="text" class="form-control search-menu" placeholder="Search..." id="search" name="search">
                                    
                                </form>
                                </div>
                            </div>
                        </div>
                        <!-- sidebar-search  -->
                        <div class="sidebar-menu">
                            <ul>
                                <li class="sidebar">
                                    <a href="{{url('/')}}">
                                        <i class="fa fa-home"></i>
                                        <span><span class="text-primary">H</span>ome</span>
                                    </a>

                                </li>
                                <li class="sidebar">
                                    <a href="{{url('articles')}}">
                                        <i class="fa fa-newspaper"></i>
                                        <span><span class="text-primary">A</span>rticles</span>
                                    </a>
                                </li>
                                <li class="sidebar">
                                    <a href="{{url('nutrition')}}">
                                        <i class="fa fa-apple-alt"></i>
                                        <span><span class="text-primary">N</span>utrition</span>
                                    </a>
                                </li>
                                <li class="sidebar">
                                    <a href="{{url('programs')}}">
                                        <i class="fa fa-dumbbell"></i>
                                        <span><span class="text-primary">P</span>rograms</span>
                                    </a>
                                </li>
                                <li class="sidebar">
                                    <a href="{{url('motivation')}}">
                                        <i class="fa fa-quote-left"></i>
                                        <span><span class="text-primary">M</span>otivation</span>
                                    </a>
                                </li>
                                <li class="sidebar">
                                    <a href="{{url('contactus')}}">
                                        <i class="fa fa-comments"></i>
                                        <span><span class="text-primary">C</span>ontact Us</span>
                                    </a>
                                </li>

                                @auth
                                
                                <li class="sidebar">
                                    <a href="{{'/articles/create'}}">Add article</a>
                                </li>
                                <li class="sidebar">
                                    <a href="{{'/programs/add'}}">Add program</a>
                                </li>
                                <li class="sidebar">
                                    <a href="{{'/messages'}}">Show messages</a>
                    
                                </li>

                                <li class="sidebar">
                                    
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                                @endauth

                            </ul>
                        </div>
                        <!-- sidebar-menu  -->
                    </div>
                    <!-- sidebar-content  -->
                </nav>
            </div>

        </div>
    </footer>
    <script>
</script>
            
            <script src="{{asset('js/app.js')}}"></script>
            <script src="{{asset('js/javascriptsrc.js')}}"></script>
            <script src="{{asset('js/javascript1.js')}}"></script>

</body>

</html>
