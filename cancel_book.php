<?php
include('db_login.php');
session_start();
$connection = mysql_connect($db_host, $db_username, $db_password);
if (!$connection)
{
	die ("Could not connect to the database: <br />". mysql_error());
}
mysql_select_db('book');
?>

<html>

	<head>
		<meta charset="utf-8">
		<title>Cancel Reservaion </title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	</head>

	<body>
		<br><br><br>
		<div class="container">
			<div class="row">
				<div class="span10">
					<?php
						if(isset($_POST['formSubmit'])) 
						{
							if(isset($_POST['formSeat']))
								$aSeat = $_POST['formSeat'];
							
							if(empty($aSeat)) 
						    {
								echo("<div class='alert alert-error'>You didn't select any Tables.</div>\n");
							} 
						    else 
						    {
						        $N = count($aSeat);
								for($i=0; $i < $N; $i++)
								{
									$query = "delete from seat where tableno = '" . $aSeat[$i] . "'";
									$result = mysql_query($query);
								}
								echo "<div class='alert alert-success'>Your booking is cancelled. You will be automatically redirected after 5 seconds.</div>";
								header("refresh: 5; index_table.php");
							}   
						}
					?>
				</div>
			</div>
		</div>
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-latest.min.js">\x3C/script>')</script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
	</body>
</html>
