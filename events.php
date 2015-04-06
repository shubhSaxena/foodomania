<!DOCTYPE html>
<html lang="en">
<head>
<title>Events</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">

</head>
<body id="page8">
<div class="body6">
	<div class="body1">
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
							<li><a href="menu.html">MENU</a></li>
							<li><a href="about.php">ABOUT US</a></li>
							<li><a href="order.html">ORDER</a></li>
							<li><a href="cook.php">COOKBOOK</a></li>
							<li><a href="Booking.html">RESERVATION</a></li>
							<li class="active"><a href="events.html">RECIPES</a></li>
							<li><a href="Contacts.html">CONTACT US</a></li>
						</ul>
					</nav>
					
				</header>
<!-- / header -->
<!-- content -->
			<article id="content">
				<div class="wrap">
					<div class="box">
						<div>
							<h2 class="letter_spacing">Recipes From our <span>Customers!!</span></h2>
							<div class="wrapper">
							<table class="table_new">
							<tr>
							<th>Sno.</th>
							<th>Customer's Name</th>
							<th>Recipe Name</th>
							<th>Description</th>
							<th>Image</th>
							</tr>
							<?php
							
							$cn=mysql_connect("localhost","root","");

							$db=mysql_select_db("project",$cn);
							
							$t=1;
							$q="select * from `cr`";
							$data=mysql_query($q,$cn);
							$row=mysql_num_rows($data);
							
							//$count = count($files);
							
							
							while($row--)
							{$r=mysql_fetch_row($data);
							$folder = 'recipe/'.$r[0].'/';
							$filetype = '*.*';
							$files = glob($folder.$filetype);
							
							echo "<tr>
							<td>".$t++."</td>
							<td>".$r[0]."</td>
							<td>".$r[1]."</td>
							<td>".$r[2]."</td>
							<td><img src='".$files[0]."' height=\"120px\" width=\"110px\"/></a></td>
							</tr>";
							
							}
							
							
							?>
							</table>
							
						
					</div>
						</div>
					</div>
				</div>
			</article>
		</div>
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