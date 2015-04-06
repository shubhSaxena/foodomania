<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <title>Online Order Portal</title>
    <link href="cart/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="cart/css/demo.css" rel="stylesheet"/>
	<link href="cart/css/main.css" rel="stylesheet"/>
   <script src="cart/js/jquery.js"></script>
   <script>
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 500);
        return false;
      }
    }
  });
});
</script>
  </head>

  <body>

    <div id="wrap">

      <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#tab1" data-toggle="tab">Order Online</a></li>
              
             
            </ul>
          </div>
        </div>
      </div>

      <!-- Begin page content -->
      <div class="container" id="back">
	  <div  class="tab-content" >
	
		
		
		<div class="tab-pane active body3" id="tab1">
				
			<?php
			include("cart/cart.php");
			?>
				
		</div>
		
		
		
	

		</div>
	</div>
	  
	  
    </div>

    <div id="footer">
      <div class="container">
        <p class="text-muted credit">
		<a href="#back">Back to Top</a> 
		</p>
      </div>
    </div>


    <script src="cart/js/bootstrap.min.js"></script>
  </body>
</html>
