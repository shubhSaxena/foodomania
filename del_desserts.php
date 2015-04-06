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
			  <a href="admin.php"><img src="images/admin.png" height="150" width="250"></img></a>
               <div class="user">
					<ul>
						<li><a href="admin_del.php">DELETE USER</a></li>
						<li><a href="admin_add_fd.php">ADD FOOD ITEM</a></li>
						<li class="active"><a href="admin_del_fd.php">DELETE FOOD ITEM</a></li>
						
					</ul>
			   </div>
               <p class="wel">WELCOME <span>ADMIN</span></p>
			   <div class="table_del">
				<?php 
					$cn=mysql_connect("localhost","root","");
					$db=mysql_select_db("project",$cn);
					
					
				?>
				<?php
					if(isset($_POST['delete']))
					{
					$delete=$_POST["delete"];
					$checkbox=$_POST["checkbox"];
					//echo '<script>alert("'.$checkbox.'");</script>';
					// Check if delete button active, start this 
					if($delete){
					//for($i=0;$i<$count;$i++){
					$del_id = $checkbox;
					$sql = "DELETE FROM desserts WHERE name='$del_id'";
					$result = mysql_query($sql);
					//}
					
					if($result){
					//echo "<meta http-equiv=\"refresh\" content=\"0;URL=admin_del.php\">";
					}
					}
					}
					$result = mysql_query("SELECT * FROM desserts");
					$count = mysql_num_rows($result);
					?>
			   <table align="center" bgcolor="#faf3ed" border="0">
				<tr>
				<td><form name="form1" method="post" action="">
				<table align="center" bgcolor="#faf3ed" border="0">
				<td>#</td>
				<td><strong>Name</strong></td>
				<td><strong>Description</strong></td>
				</tr>
				
				<?php
					while($rows=mysql_fetch_array($result)){
					?>

					<tr>
					<td align="center" bgcolor="#faf3ed"><input name="checkbox" type="radio" id="checkbox[]" value="<?php echo $rows['2']; ?>"></td>
					<td bgcolor="#faf3ed"><?php echo $rows['2']; ?></td>
					<td bgcolor="#faf3ed"><?php echo $rows['3']; ?></td>
					</tr>

					<?php
					}
					?>

					<tr>
					<td colspan="5" align="center" bgcolor="#faf3ed"><input name="delete" type="submit" id="delete" value="Delete"></td>
					</tr>

					
					<?php
					mysql_close();
					?>

					</table>
					</form>
					</td>
					</tr>
					</table>
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