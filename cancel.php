<?php
include('db_login.php');
session_start();
$connection = mysql_connect($db_host, $db_username, $db_password);
if (!$connection)
{
	die ("Could not connect to the database: <br />". mysql_error());
}
mysql_select_db('book');


if (!isset($_POST['save']) || $_POST['save'] != 'signin') {
    header('Location: login_tables.php'); exit;
}

$userid = strip_tags( utf8_decode( $_POST['userid'] ) );
$password = strip_tags( utf8_decode( $_POST['password'] ) );
	
if (empty($userid))
    $error = 'You must enter your user id.';

if (empty($password))
    $error = 'You must enter password.';

$select = mysql_query("select * from register where userid = '" . $userid . "' and password = '" . $password . "'", $connection);

$num_rows = mysql_num_rows($select);

if ( $num_rows == 0)
	$error = 'You are not registered.';
	
if (isset($error)) {
    header('Location: login_table.php?e='.urlencode($error)); exit;
}


?>

<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Table Cancelation</title>
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
						$query = "select * from seat where userid = '" . $userid . "'";
						$result = mysql_query($query);
						if ( mysql_num_rows($result) == 0 )
						{
							echo "You have not booked any tables.";
						}
						else
						{
							echo "<form action='cancel_book.php' method='POST' onsubmit='return validateCheckBox();'>";
								echo "<table align='center' class='table table-hover table-bordered table-striped span6' align='center'>";
									echo "<thead>";
										echo "<tr>";
											echo "<th>Select</th>";
											echo "<th>Table Number</th>";
											echo "<th>Booking ID</th>";
											echo "<th>Date</th>";
										echo "</tr>";
									echo "</thead>";
									echo "<tbody>";
								
									while($row = mysql_fetch_array($result))
									{
										echo "<tr>";
											echo "<td><input type='checkbox' name='formSeat[]' value='".$row['tableno']."'/></td>";
											echo "<td>". $row['number'] ."</td>";
											echo "<td>". $row['tableno'] ."</td>";
											echo "<td>". $row['date'] ."</td>";
										echo "</tr>";				
									}
									echo "<tr>";
										echo "<td>";
										echo "</td>";
										echo "<td>";
											echo '<button type="submit" name="formSubmit" class="btn btn-info">';
												echo '<i class="icon-ok icon-white"></i> Submit';
											echo '</button>';
										echo "</td>";
										echo "<td>";
											echo '<button type="reset" class="btn">';
												echo '<i class="icon-refresh icon-black"></i> Clear';
											echo '</button>';
										echo "</td>";
										echo "<td>";
										echo "</td>";
									echo "</tr>";
									echo "</tbody>";
								echo "</table>";
							echo "</form>";
						}
					?>
				</div>
			</div>
		</div>
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-latest.min.js">\x3C/script>')</script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript">
			function validateCheckBox()
			{
				var c = document.getElementsByTagName('input');
				for (var i = 0; i < c.length; i++)
				{
					if (c[i].type == 'checkbox')
					{
						if (c[i].checked) 
						{
							return true;
						}
					}
				}
				alert('Please select at least 1 table.');
				return false;
			}
		</script>
	</body>
</html>
