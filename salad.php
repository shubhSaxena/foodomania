<!DOCTYPE html>
<html lang="en">
<head>
<title>menu</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script src="js/jquery-1.11.1.js" type="text/javascript"></script>

<script>
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>

</head>
<body id="page2">
<div class="body6">
	<div class="body1">
		<div class="body5">
			<div class="main">
<!-- header -->
				<header>
					<h1><a href="index.php" id="logo">Food-O-Mania A Traditional Restaurant</a></h1>
													
						<div id="top_nav">
							<a href="register.html" class="button1" >Sign in/Register</a>
							
						</div>			
					<nav>
						<ul id="menu">
							<li><a href="index.php">HOME</a>
							<li class="active"><a href="menu.html">MENU</a></li>
							<li><a href="about.php">ABOUT US</a></li>
							<li><a href="order.html">ORDER</a></li>
							<li><a href="cook.php">COOKBOOK</a></li>
							<li><a href="Booking.html">RESERVATION</a></li>
							<li><a href="events.html">EVENTS</a></li>
							<li><a href="Contacts.html">CONTACT US</a></li>
						</ul>
					</nav>
					
				</header>
<!-- / header -->
<!-- content -->
								<article id="content">					
					<div class="wrap" id="back">
						<section class="cols">
							<div class="box">
								<div>
									<a href="soup.php"><h2>Tasty <span>Soups</span></h2>
									<figure><img src="menu/Soup.jpg" alt="" ></figure></a>																	
								</div>
							</div>
						</section>
						<section class="cols pad_left1">
							<div class="box">
								<div>
									<a href="#salad"><h2>Crispy <span>Salads</span></h2>
									<figure><img src="menu/salad.jpg" alt="" ></figure></a>															
								</div>
							</div>
						</section>
						<section class="cols pad_left1">
							<div class="box">
								<div>
									<a href="starter.php"><h2>Sizzling <span>Starters</span></h2>
									<figure><img src="menu/starter.jpg" alt="" ></figure></a>																
								</div>
							</div>
						</section>												
					</div>
					<div class="wrap">
						<section class="cols">
							<div class="box">
								<div>
									<a href="mains.php"><h2>Classic <span>Entrée</span></h2>
									<figure><img src="menu/main.jpg" alt="" ></figure></a>																		
								</div>
							</div>
						</section>
						<section class="cols pad_left1">
							<div class="box">
								<div>
									<a href="drinks.php"><h2>Chilling <span>Drinks</span></h2>
									<figure><img src="menu/drinks.jpg" alt="" ></figure></a>																		
								</div>
							</div>
						</section>
						<section class="cols pad_left1">
							<div class="box">
								<div>
									<a href="desserts.php"><h2>Exquisite <span>Desserts</span></h2>
									<figure><img src="menu/desserts.jpg" alt="" ></figure></a>																		
								</div>
							</div>
						</section>	
					</div>
				</article>
			</div>
		</div>
	</div>
</div>

<div class="body2">
	<div class="main">
		<article id="content2">
			<div class="wrapper">
				<section class="col1 pad_left1">
					<h2>Crispy Salads:</h2>
					<div class="wrapper" id="salad">
						<div class="cols">
							<div class="wrapper pad_bot2">
								<figure class="left marg_right1"><img src="menu/saladNV.png" alt=""></figure>
								<p>
									<img src="menu/saln.png" height="20" width="20">
									<strong><i>Tandoori chicken chaat</i></strong><br>
									Pieces of tandoori chicken with lemon and coriander.
								</p>
							</div>
							<div class="wrapper">
								<figure class="left marg_right1"><img src="menu/salv1.png" alt=""></figure>
								<p>
									<img src="menu/salv.png" height="20" width="20">
									<strong><i>Fathus salad</i></strong><br>
									Diced bell peppers with lemon dressing, parsley sprigs, fetta cheese and crisp pita bread.
								</p>
							</div>
							<div class="wrapper pad_bot2">
								<figure class="left marg_right1"><img src="menu/salv2.png" alt=""></figure>
								<p>
									<img src="menu/salv.png" height="20" width="20">
									<strong><i>Chick peas salad</i></strong><br>
									Chickpeas with Indian dressing topped with chopped onion, tomatoes and coriander.
								</p>
							</div>
							<div class="wrapper">
							<section class="col2 pad_left1">
							<a href="#back" class="button1" >Back to Top</a>
							</section>
							</div>
						</div>
						<div class="cols pad_left1">	
							<div class="wrapper">
								<figure class="left marg_right1"><img src="menu/salv3.png" alt=""></figure>
								<p>
									<img src="menu/salv.png" height="20" width="20">
									<strong><i>Kimchi salad</i></strong><br>
									Crisp cabbage and pock choy dressed with oriental chilli paste and roasted sesame seeds.
								</p>
							</div>							
							<div class="wrapper pad_bot2">
								<figure class="left marg_right1"><img src="menu/salv4.png" alt=""></figure>
								<p>
									<img src="menu/salv.png" height="20" width="20">
									<strong><i>Waldorf salad</i></strong><br>
									Cut fruits with pineapple, mayonnaise and cherries.
								</p>
							</div>
							<div class="wrapper">
								<figure class="left marg_right1"><img src="menu/salv5.png" alt=""></figure>
								<p>
									<img src="menu/salv.png" height="20" width="20">
									<strong><i>German potato salad</i></strong><br>
									Potato cubes with dill leaves and German dressing.
								</p>
								
							</div>
							
						</div>
					</div>
				</section>
				
			</div>
		</article>
<!-- / content -->
	</div>
</div>

<div class="body3">
	<div class="body4">
		<div class="main">
<!-- footer -->
			<footer>
				<div class="wrapper">
					<section class="col1 pad_left1">
						<h3>Toll Free: <span>1800 123 45 67</span></h3>
						Copyright &copy; JIIT, Noida
					</section>
					<section class="col2 pad_left1">
						<h3>Follow Us </h3>
						<ul id="icons">
							<li><a href="#" class="normaltip" title="Facebook"><img src="images/icon1.gif" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon2.gif" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Zomato"><img src="images/icon3.gif" alt=""></a></li>
							
						</ul>
					</section>
				</div>
				
			</footer>
<!-- / footer -->
		</div>
	</div>
</div>

</body>
</html>