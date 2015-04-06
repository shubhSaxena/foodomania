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
									<a href="salad.php"><h2>Crispy <span>Salads</span></h2>
									<figure><img src="menu/salad.jpg" alt="" ></figure></a>															
								</div>
							</div>
						</section>
						<section class="cols pad_left1">
							<div class="box">
								<div>
									<a href="#starter"><h2>Sizzling <span>Starters</span></h2>
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
					<h2>Sizzling Starters:</h2>
					<div class="wrapper" id="starter">
						<div class="cols">
							<div class="wrapper pad_bot2">
								<figure class="left marg_right1"><img src="menu/srt1.png" alt=""></figure>
								<p>
									<img src="menu/srtV.png" height="20" width="20">
									<strong><i>Achari kumbh</i></strong><br>
									Mushrooms marinated in Indian pickle and topped with bell pepper and tomatoes.
								</p>
							</div>
							<div class="wrapper">
								<figure class="left marg_right1"><img src="menu/srt2.png" alt=""></figure>
								<p>
									<img src="menu/srtV.png" height="20" width="20">
									<strong><i>Paneer tikka lazawaab</i></strong><br>
									Paneer cubes marinated in hung curd and flavoured with garam masala.
								</p>
							</div>
							<div class="wrapper pad_bot2">
								<figure class="left marg_right1"><img src="menu/srt3.png" alt=""></figure>
								<p>
									<img src="menu/srtV.png" height="20" width="20">
									<strong><i>Cajun spice baby potato</i></strong><br>
									Baby potatoes grilled with Cajun spice and topped with chilli mayonnaise.
								</p>
							</div>							
							<div class="wrapper">
								<figure class="left marg_right1"><img src="menu/srt4.png" alt=""></figure>
								<p>
									<img src="menu/srtV.png" height="20" width="20">
									<strong><i>Hare mutter ke tikki</i></strong><br>
									Green peas sautéed with spices and gram flour, binded with potatoes and served with mint chutney.
								</p>
							</div>
						</div>
						<div class="cols pad_left1">							
							<div class="wrapper pad_bot2">
								<figure class="left marg_right1"><img src="menu/srt5.png" alt=""></figure>
								<p>
									<img src="menu/srtNV.png" height="20" width="20">
									<strong><i>Fish tikka</i></strong><br>
									Fish fillets marinated with spices and yoghurt, grilled in oven.
								</p>
							</div>
							<div class="wrapper">
								<figure class="left marg_right1"><img src="menu/srt6.png" alt=""></figure>
								<p>
									<img src="menu/srtNV.png" height="20" width="20">
									<strong><i>Chicken lollipop</i></strong><br>
									Simple indo chinese appetizer in which the chicken wings are spiced up and deep fried.
								</p>
							</div>
							<div class="wrapper pad_bot2">
								<figure class="left marg_right1"><img src="menu/srt7.png" alt=""></figure>
								<p>
									<img src="menu/srtNV.png" height="20" width="20">
									<strong><i>Chicken kastoori kebab</i></strong><br>
									Chicken strips marinated in a flavourful masala and grilled.
								</p>
							</div>
							<div class="wrapper">
								<figure class="left marg_right1"><img src="menu/srt8.png" alt=""></figure>
								<p>
									<img src="menu/srtNV.png" height="20" width="20">
									<strong><i>Chicken tikka</i></strong><br>
									Small pieces of boneless chicken baked using skewers in a clay oven.
								</p>
							</div>
							<section class="col2 pad_left1">
							<a href="#back" class="button1" >Back to Top</a>
							</section>
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