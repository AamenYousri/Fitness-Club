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



        <div class="d-none d-lg-block">


            <nav class="navbar navbar-expand-lg navbar-dark back pt-3">
                <a class="navbar-brand" href="">Fitness <span class="text-primary">Club</span></a>
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


    </header>
    <main>

    
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

        @include('includes/messages')
        @yield('content')
    
        

     
        <div id='toTop' class="mb-3 mr-1 p-2"><i class="fas fa-angle-double-up fa-3x"></i></div>

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
