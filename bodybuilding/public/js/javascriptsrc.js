 
jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});


$("#close-sidebar").click(function() {
      $(".page-wrapper").removeClass("toggled");});

    
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});

jQuery(function(){
   jQuery('#close-sidebar').click();
});



        $(document).ready(function() {
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function() {
                        
                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });


AOS.init();
  
        $('#carousel-example-1z').carousel({
            interval: 2000,
            cycle: true
        });


       
       
       
 $("#emailClick").click(function(){
          $("#myModal").fadeIn("slow");
});
  
  
  
  $("#clickEmail").click(function(){
  $("#myModal").fadeIn("slow");
});

 
$("#close").click(function(){
  $("#myModal").fadeOut('slow');
});


$(window).scroll(function() {
  if ($(this).scrollTop()) {
      $('#toTop').fadeIn();
  } else {
      $('#toTop').fadeOut();
  }
});

$("#toTop").click(function () {
 //1 second of animation time
 //html works for FFX but not Chrome
 //body works for Chrome but not FFX
 //This strange selector seems to work universally
 $("html, body").animate({scrollTop: 0}, 1000);
});