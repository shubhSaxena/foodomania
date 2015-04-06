<!DOCTYPE html>
<html lang="en">
<head>
<title>Restaurant</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css">
<link rel="stylesheet" href="css/layout.css" type="text/css">
<link rel="stylesheet" href="css/style1.css" type="text/css">
<link rel="stylesheet" href="css/styleTab.css" type="text/css">

<script src="js/fb.js" type="text/javascript"></script>

<?php   session_start();  ?>
</head>
<body id="admin">
<div class="body6">
	<div class="body1">
		<div class="body5">
			<div class="main">
				<header>
					<h1><a href="index.php" id="logo">Food-O-Mania A Traditional Restaurant</a></h1>
													
						<div id="top_nav">
							<a href="logout.php" class="button1" >Sign out</a>
							<fb:login-button scope="public_profile,email" onlogin="checkLoginState();" data-auto-logout-link="true">
									</fb:login-button>
							
						</div>			
					
					
				</header>
			 <div class="ubox">
			  <img src="images/admin.png" height="150" width="250"></img>
               <div class="user">
					<ul>
						<li><a href="admin_del.php">DELETE USER</a></li>
						<li><a href="admin_add_fd.php">ADD FOOD ITEM</a></li>
						<li class="active"><a href="admin_del_fd.php">DELETE FOOD ITEM</a></li>
						
					</ul>
			   </div>
               <p class="wel">WELCOME <span>ADMIN</span></p>
				<div class="table_del1">
				<a href="del_soups.php" class="button3" >Soups</a><br/>
				<a href="del_salads.php" class="button3" >Salads</a><br/>
				<a href="del_starters.php" class="button3" >Starters</a><br/>
				<a href="del_main.php" class="button3" >Main course</a><br/>
				<a href="del_drinks.php" class="button3" >Drinks</a><br/>
				<a href="del_desserts.php" class="button3" >Desserts</a>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>

<div class="body3">
	<div class="body4">
		<div class="main">
			<?php include ("footer.php");?>