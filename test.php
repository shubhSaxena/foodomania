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
						<li><a href="admin_del_fd.php">DELETE FOOD ITEM</a></li>
						<li><a href="#4">DEALS</a></li>
						<li><a href="#5">REVIEW</a></li>
					</ul>
			   </div>
               <p class="wel">WELCOME <span>ADMIN</span></p>
			   <div class="table_del1">
<?php
/*** Multi-Upload Script, from: http://coursesweb.net/php-mysql/ ***/
     // Enables the possibility of working with Sessions
$x="hell";
$updir = 'recipe/'.$x;     // sets the folder
$max_size = 500;       // maximum file size allowed (in KB)

// file types allowed
$allowtype = array('bmp', 'flv', 'gif', 'jpg', 'jpeg', 'mp3', 'pdf', 'png', 'rar', 'zip');

$rezultat = array();     // Variable to store the messages that will be returned by the script

// If the folder from $updir not exists, attempts to create it (with CHMOD 0777)
if (!is_dir($updir)) mkdir($updir, 0777);

/** Code for. Uploading files to server **/

// If is received a valid file from the form
if (isset($_FILES['file_up'])) {
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
			<?php include ("footer.php");?>