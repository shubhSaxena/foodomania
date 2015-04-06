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
			<div class="wrap">
					<div class="box">
			  <img src="images/user.png" height="150" width="220"></img>
               <div class="user">
					<ul>
						<li><a href="user_view.php">VIEW PROFILE</a></li>
						<li class="active"><a href="user_edit.php">EDIT PROFILE</a></li>
						<li><a href="user_res.php">RESERVATIONS</a></li>
						<li><a href="user_rec.php">YOUR RECIPE</a></li>
						
					</ul>
			   </div>
               <p class="wel">WELCOME <span><?php echo $_SESSION['userid'];?></span></p>	
				<div class="table_del">
				<?php 
					$cn=mysql_connect("localhost","root","");
					$db=mysql_select_db("project",$cn);
					
					
				?>
				<?php
					$usid=$_SESSION['userid'];
					
					$sql = "delete from register WHERE userid='$usid'";
					$result = mysql_query($sql);
					
					
					
					
					?>
			   
				
				
				
						<div>
							<h2 class="letter_spacing">Edit Your <span>Profile</span></h2>
							<form id="RegisterForm" action="user_edit_reg.php" method="POST" >
								<div>
									<div class="wrapper">
										<span>Name:</span>
										<input type="text" class="input" name="name" required>
									</div>
									<div class="wrapper">
										<span>User ID:</span>
										<input type="text" class="input" name="userid" required>
									</div>
									<div class="wrapper">
										<span>E-mail:</span>
										<input type="email" class="input" name="email" required>
									</div>
									<div class="wrapper">
										<span>Birthday:</span>
										<input type="date" class="input" name="bday" required>								
									</div>
									<div class="wrapper">
										<span>Password:</span>
										<input type="password" class="input" name="password" id="password" required>								
									</div>
									<div class="wrapper">
										<span>Confirm Password:</span>
										<input type="password" class="input" name="confirm_password" id="confirm_password" required>								
									</div>
									<div class="wrapper">
										<span>Gender:</span>
										<input type="radio" name="gender"  value="male">Male
										<input type="radio" name="gender"  value="female">Female							
									</div>
									<input type="submit" class="button1" value="Update" name="submit">
									
									
								</div>
							</form>
						</div>
					</div>
				</div>
					

					
					</tr>

					
					<?php
					mysql_close();
					?>

					
				
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