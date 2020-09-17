@extends('master')

@section('content')
    
   <img class="img-responsive d-lg-none d-flex justify-content-end paddingLeft" src="{{asset('img/fitness-club-logo-vector-20684856%20copy.PNG')}}" alt="slogan" style="width: 80%">
   <br>
           <div class="container">
               <div class="row">
                   <div class="col-lg-8 col-sm-12">
                       <div class="row d-flex justify-content-center ">
                           <div class="col-md-6 col-sm-8 col-xs-12 col-md-offset-3 col-sm-offset-2 solganImg">
                               <div class="contact-form sloganImg">
                               <form action="{{'/messages'}}" method="POST">
                                       @csrf
                                       <h2 class="text-center">Contact Us</h2>
                                       <div class="row">
                                           <div class="col-md-12 col-xs-12">
                                               <div class="form-group">
                                                   <input type="text" name="name" class="form-control" placeholder="Name*" required="required" />
                                               </div>
                                           </div>
                                       </div>
                                       <div class="form-group">
                                           <input type="email" name="email" class="form-control" placeholder="Your Email*" required="required" />
                                       </div>
                                       <div class="form-group">
                                           <input type="text" name="subject" class="form-control" placeholder="Subject" />
                                       </div>
                                       {{-- <div class="form-group">
                                           <input type="text" name="g-recaptcha-response" id="g-recaptcha-response" />
                                       </div> --}}
                                       <div class="form-group">
                                           <textarea name="message" rows="8" class="form-control" placeholder="Your Message*" required="Your Message"></textarea>
                                       </div>
                                       <div class="form-group">
                                           <input type="submit" value="Send Message" class="btn btn-primary btn-block btn-lg pb-5" />
                                       </div>
                                   </form>
                               </div>
                           </div>
                       </div>
                   </div>
                   
                   
                   
                   <div class="col-lg-4 col-sm-12 mt-5 pt-5 ">
                       
                       <div class="display-4  d-flex justify-content-center">Social Media</div>
                       <br>
                       <div class="row  text-center">
                           
                           <div class="col-4"><a href="https://www.facebook.com/FitnessClubf/" id="facebookContact" target="_blank"><span><i class="fab fa-facebook-square fa-3x"></i></span></a></div>
                           <div class="col-4"><a href="https://www.instagram.com/fitnessclubf4/?hl=en"  id="instagramContact" target="_blank"><span><i class="fab fa-instagram fa-3x"></i></span></a></div>
                           <div class="col-4"><span id="clickEmail" ><span><i class="fa fa-envelope fa-3x"></i></span></a></div>
                           
                         
                       </div>
                       <hr>
                         <div class="d-flex justify-content-center">
                          <img class="img-responsive " src="{{asset('img/home_fitness_slider.png')}}" alt="contact us" style="width: 80%;">
   </div>
                       
                   </div>
               </div>
           </div>
             
@endsection