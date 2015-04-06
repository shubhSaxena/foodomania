<?php
session_start();
date_default_timezone_set('Asia/Calcutta');
 if(isset($_POST['submit']))
{

$cn=mysql_connect("localhost","root","");
if(! $cn)
{
	echo "Unable to connect";
	die();
}

$db=mysql_select_db("project",$cn);
if(! $db)
{
	echo "Database does not exist";
	die();
}


$name=$_POST["name"];
$recipe=$_POST["recipe"];
$usid=$_SESSION['userid'];

//$query="create table if not exists `".$usid."`(name varchar(50), recipe varchar(255))";


//mysql_query($query,$cn);
$query="INSERT INTO `cr`(`name`,`rcname`, `dis`) VALUES ('".$usid."','".$name."','".$recipe."')";
//echo '<script>alert("'.$query.'");</script>';
mysql_query($query,$cn);

$n=mysql_affected_rows();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Restaurant</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css">
<link rel="stylesheet" href="css/layout.css" type="text/css">
<link rel="stylesheet" href="css/style1.css" type="text/css">
<style type="text/css">
		span{		
				color:#a80002;
			}
		</style>
<script src="js/fb.js" type="text/javascript"></script>

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
						<li class="active"><a href="user_view.php">VIEW PROFILE</a></li>
						<li><a href="user_edit.php">EDIT PROFILE</a></li>
						<li><a href="user_res.php">RESERVATIONS</a></li>
						<li><a href="user_rec.php">YOUR RECIPE</a></li>
						
					</ul>
			   </div>
			   
               <p class="wel">WELCOME <span><?php echo $_SESSION['userid'];?></span></p>	
				<div class="table_del">
				
				<form id="RegisterForm" method="POST" >
								<div>
									
									<div class="wrapper">
										<span>Name of your dish:</span>
										<input type="text" class="input" name="name" required>
									</div>
									<div class="wrapper">
										<span>Your Recipe:</span>
										<textarea class="input" rows="8" name="recipe" ></textarea>
									</div>
									<input type="submit" class="button1" value="Submit" name="submit">													
									
								</div>
				</form>
				</div>
				<div class="table_del1">
				<?php
/*** Multi-Upload Script, from: http://coursesweb.net/php-mysql/ ***/
     // Enables the possibility of working with Sessions
$x="hell";
$updir = 'recipe/'.$_SESSION['userid'];     // sets the folder
$max_size = 500;       // maximum file size allowed (in KB)

// file types allowed
$allowtype = array('bmp', 'flv', 'gif', 'jpg', 'jpeg', 'mp3', 'pdf', 'png', 'rar', 'zip');

$rezultat = array();     // Variable to store the messages that will be returned by the script

// If the folder from $updir not exists, attempts to create it (with CHMOD 0777)
if (!is_dir($updir)) mkdir($updir, 0777);

/** Code for. Uploading files to server **/

// If is received a valid file from the form
if (isset($_FILES['file_up'])) {
//echo '<script>alert("aj");</script>';
  // Traverse the array elements, with data from the form fields with name="file_up[]"
   // Check the files received for upload
  for($f=0; $f<count($_FILES['file_up']['name']); $f++) {
    $nume_f = $_FILES['file_up']['name'][$f];     // get the name of the current file

    // if the name has minimum 4 characters
    if (strlen($nume_f)>3) {
      // get and checks the file type (its extension)
      $type = end(explode('.', strtolower($nume_f)));
      if (in_array($type, $allowtype)) {
        // check the file size
        if ($_FILES['file_up']['size'][$f]<=$max_size*1000) {
          // if there aren't errors in the copying process
          if ($_FILES['file_up']['error'][$f]==0) {
            // Set location and name for uploading file on the server
            $thefile = $updir . '/'. $nume_f;
            // if the file can't be uploaded, returns a message
            if (!move_uploaded_file ($_FILES['file_up']['tmp_name'][$f], $thefile)) {
              $rezultat[$f] = 'The file '. $nume_f. ' could not be copied, try again';
			  
            }
            else {
              // stores the name of the file
              $rezultat[$f] = '<b>'.$nume_f.'</b>';
			 // $q="INSERT INTO `dish_img`(`userid`, `name`, `url`) VALUES ('".$_SESSION['userid']."','hii','".$thefile."')";
			 // echo '<script>alert("'.$q.'");</script>';
			 // mysql_query($q,$cn);
            }
          }
        }
        else { $rezultat[$f] = 'The file <b>'. $nume_f. '</b> exceeds the maximum permitted size, <i>'. $max_size. 'KB</i>'; }
      }
      else { $rezultat[$f] = 'The file <b>'. $nume_f. '</b> is not an allowed file type'; }
    }
  }

  // To avoid resending data on refresh will do a redirect to itself, with re=up
  // Adding in a session takes messages returned by the script
  $_SESSION['rezultat'] = implode('<br />', $rezultat);
  header('Location: '. basename($_SERVER['PHP_SELF']). '?re=up');
}

// If $_GET['re'] and $_SESSION['rezultat'] are set, displays data from the session, then delete it
if (isset($_GET['re']) && isset($_SESSION['rezultat'])) {
  echo '<h4>Uploaded files:</h4>'. $_SESSION['rezultat'];
  unset($_SESSION['rezultat']);
}
?>
<!-- Form for multiple Upload fields -->
<form id="uploadform" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post" enctype="multipart/form-data">
  <input type="file" class="file_up" name="file_up[]" /><br />
  <input type="file" class="file_up" name="file_up[]" /><br />
  <input type="file" class="file_up" name="file_up[]" /><br />
  <input type="file" class="file_up" name="file_up[]" /><br />
  <input type="file" class="file_up" name="file_up[]" /><br />
  <input type="submit" value="UPLOAD" id="submit" />
</form>
		
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