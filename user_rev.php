<!DOCTYPE html>
<html lang="en">
<head>
<title>Restaurant</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css">
<link rel="stylesheet" href="css/layout.css" type="text/css">
<link rel="stylesheet" href="css/style1.css" type="text/css">

<script src="js/fb.js" type="text/javascript"></script>


<?php   session_start();  ?>
</head>
<body id="user">
<div class="body6">
	<div class="body1">
		<div class="body5">
			<div class="main">
<!-- header -->
				<header>
					<h1><a href="index.php" id="logo">Food-O-Mania A Traditional Restaurant</a></h1>
													
						<div id="top_nav">
							<a href="logout.php" class="button1" >Sign out</a>
							<fb:login-button scope="public_profile,email" onlogin="checkLoginState();" data-auto-logout-link="true">
									</fb:login-button>
							
						</div>			
					
					
				</header>
			 <div class="ubox">
			  <a href="user.php"><img src="images/user.png" height="150" width="220"></img></a>
               <div class="user">
					<ul>
						<li><a href="user_view1.php">VIEW PROFILE</a></li>
						<li><a href="user_edit.php">EDIT PROFILE</a></li>
						<li><a href="user_res.php">RESERVATIONS</a></li>
						<li><a href="user_rec.php">YOUR RECIPE</a></li>
						
					</ul>
			   </div>
               <p class="wel">WELCOME <span><?php echo $_SESSION['userid'];?></span></p>
				<div class="table_del">
				
				</div>
			</div>
			</div>
		</div>
	</div>
</div>

<div class="body3">
	<div class="body4">
		<div class="main">
<!-- footer -->
			<?php include ("footer.php");?>