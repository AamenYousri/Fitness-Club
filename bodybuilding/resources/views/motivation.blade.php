@extends('master')

@section('content')
<img class="img-responsive d-lg-none d-flex justify-content-end paddingLeft" src="{{asset('img/fitness-club-logo-vector-20684856%20copy.PNG')}}" alt="slogan" style="width: 80%">

<br>

<div class="container">
<div class="display-4">Videos</div>
       <br>
    <div class="row">
        <div class="col-sm-12 col-md-6">
               <video  width="100%" controls class="" id="">
               <source src="{{asset('vid/1.mp4')}}" type="video/mp4">
               </video>
        </div>



        <div class="col-sm-12 col-md-6">
                <video  width="100%" controls class="" id="">
                    <source src="{{asset('vid/3.mp4')}}" type="video/mp4">
                </video>
         </div>
        <div class="col-sm-12 col-md-6">
              <video  width="100%" controls class="" id="vid" autoplay>
                   <source src="{{asset('vid/2.mp4')}}" type="video/mp4" >
               </video>
               <script>
                document.getElementById('vid').play();
            </script>
        </div>
  
        
        <div class="col-sm-12 col-md-6">
              <video  width="100%" controls class="" id="">
                    <source src="{{asset('vid/4.mp4')}}" type="video/mp4">
               </video>
        </div>
        
        
        
    </div>
    <br>
    <br>
    
    <hr>
    <hr>
    
<div class="display-4">50 quotes</div>
    
    <br>
    <br>

    
    
    <ol>
        <li>“Your body can stand almost anything. It’s your mind that you have to convince.”</li>
        <li>“Fitness is like a relationship. You can’t cheat and expect it to work.”</li>
        <li>“The best way to predict the future is to create it.”</li>
        <li>“Work hard in silence. Let success be your noise.” </li>
        <li>It takes 21 days to create a habit. It takes 90 days to create a lifestyle.”</li>
        <li> Your limitation—it’s only your imagination.</li>
        <li>The harder you work for something, the greater you’ll feel when you achieve it.</li>
         <br>        
                 
    <img class="img-responsive mx-auto d-block" src="{{asset('img/quote1.jpg')}}" alt="slogan" style="width: 60%">
        <br>
        <br>
        <li>Don’t stop when you’re tired. Stop when you’re done.</li>
        <li>Wake up with determination. Go to bed with satisfaction.</li>
        <li>Don’t wait for opportunity. Create it.</li>
        <li>Sometimes we’re tested not to show our weaknesses, but to discover our strengths.</li>
        <li>The key to success is to focus on goals, not obstacles.</li>
        <li>“The last three or four reps is what makes the muscle grow. This area of pain divides a champion from someone who is not a champion.”
            Arnold Schwarzenegger </li>
        <li>“Success usually comes to those who are too busy to be looking for it.”</li>
          <br>                   
                             
                              <img class="img-responsive mx-auto d-block" src="{{asset('img/quote2.jpg')}}" alt="slogan" style="width: 60%">
        <br>
        <br>
        <li>“If you think lifting is dangerous, try being weak. Being weak is dangerous.”</li>
        <li>“The only place where success comes before work is in the dictionary.”</li>
        <li>“The clock is ticking. Are you becoming the person you want to be?”</li>
        <li>“Whether you think you can, or you think you can’t, you’re right.”</li>
        <li>“You must expect great things of yourself before you can do them.”</li>
        <li>“Well done is better than well said.”</li>
        <li>“A champion is someone who gets up when they can’t.</li>
        <br>
                              <img class="img-responsive mx-auto d-block" src="{{asset('img/quote3.jpg')}}" alt="slogan" style="width: 60%">
        <br>
        <br>
        <li>“What hurts today makes you stronger tomorrow.”</li>
        <li>“If you want something you’ve never had, you must be willing to do something you’ve never done.”</li>
        <li>“You have to think it before you can do it. The mind is what makes it all possible.”</li>
        <li>“Success is walking from failure to failure with no loss of enthusiasm.”</li>
        <li>Just remember, you can't climb the ladder of success with your hands in your pockets.</li>
        <li>For me life is continuously being hungry. The meaning of life is not simply to exist, to survive, but to move ahead, to go up, to achieve, to conquer.</li>
        <li>“Everybody wants to be a bodybuilder but don’t nobody want to lift heavy ass weights!”</li>
        <br>
        
                              <img class="img-responsive mx-auto d-block" src="{{asset('img/quote4.jpg')}}" alt="slogan" style="width: 60%">

        <br>
        <br>
        <li>“If you’re capable of sending a legible text message between sets, you probably aren’t working hard enough.”</li>
        <li>Being negative and lazy is a disease that leads to pain, hardships, depression, poor health and failure. Be proactive and give a damn to achieve success!”</li>
        <li>”I hated every minute of training, but I said, don’t quit. Suffer now and live the rest of your life as a champion.”</li>
        <li>“The question isn’t who is going to let me; it’s who is going to stop me.”</li>
        <li>“Pain is temporary, pride is forever”</li>
        <li>“I don’t count my sit-ups; I only start counting when it starts hurting because they’re the only ones that count.”</li>
        <li>The fight is won or lost far away from witnesses—behind the lines, in the gym, and out there on the road, long before I dance under those lights.” </li>
        <li>“He who is not courageous enough to take risks will accomplish nothing in life.”</li>
        <br>
                              <img class="img-responsive mx-auto d-block" src="{{asset('img/quote5.jpg')}}" alt="slogan" style="width: 60%">

        <br>
        <br>
        <li>“I am the greatest. I said that even before I knew I was. I figured that if I said it enough, I would convince the world that I really was the greatest.”</li>
        <li>“If they can make penicillin out of moldy bread, they can sure make something out of you.” </li>
        <li>“Don’t count the days; make the days count.” </li>
        <li>“When you feel like quitting think about why you started.”</li>
        <li>No one knows what to say in the loser’s locker room. </li>
        <li>“No pain, no gain. Shut up and train.”</li>
        <li>“Success isn’t always about greatness. It’s about consistency. Consistent hard work gains success. Greatness will come.”</li>
        <li>“Train insane or remain the same.”</li>
        <li>“Push yourself because no one else is going to do it for you.”</li>
        <li>“Success starts with self-discipline.”</li>
        <li>Motivation is what gets you started. Habit is what keeps you going.”</li>
        <li>“Someone busier than you is working out right now.”</li>
        <li>“What seems impossible today will one day become your warm-up.”</li>
        <li>“Live everyday as if it were your last because someday you’re going to be right.” </li>
        <br>
        
                              <img class="img-responsive mx-auto d-block" src="{{asset('img/quote6.jpg')}}" alt="slogan" style="width: 60%">

    
    
    </ol>
    
    
    
</div>
@endsection