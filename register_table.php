<?php
include('db_login.php');
session_start();
$connection = mysql_connect($db_host, $db_username, $db_password);
if (!$connection)
{
	die ("Could not connect to the database: <br />". mysql_error());
}
mysql_select_db('book');


if (!isset($_POST['save']) || $_POST['save'] != 'contact') {
    header('Location: book_table.php'); exit;
}

$doj = strip_tags( utf8_decode( $_POST['booking_date'] ) );
$name = strip_tags( utf8_decode( $_POST['user_name'] ) );
$address = strip_tags( utf8_decode( $_POST['address'] ) );
$mobile = strip_tags( utf8_decode( $_POST['mobile'] ) );
$userid = strip_tags( utf8_decode( $_POST['userid'] ) );
$email = strip_tags( utf8_decode( $_POST['email'] ) );
$password = strip_tags( utf8_decode( $_POST['password'] ) );
$message = strip_tags( utf8_decode( $_POST['message'] ) );
	
if (empty($name))
    $error = 'You must enter your name.';

if (empty($address))
    $error = 'You must enter your address.';

if (empty($mobile))
    $error = 'You must enter your mobile number.';

if (empty($userid))
    $error = 'You must enter your user id.';

elseif (empty($email)) 
    $error = 'You must enter your email address.';

elseif (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email))
    $error = 'You must enter a valid email address.';
	
if (empty($password))
    $error = 'You must enter password.';

$select = mysql_query("select * from register where userid = '" . $userid . "'", $connection);
$num_rows = mysql_num_rows($select);

if ( $num_rows )
	$error = 'You are already registered.';
	
if (isset($error)) {
    header('Location: book_table.php?e='.urlencode($error)); exit;
}

$query = "INSERT INTO register (userid, name, email, password, address, contact, message) VALUES ('" . $userid . "','" . $name . "','" . $email . "','" . $password . "','" . $address . "','" . $mobile . "','" . $message . "')";

$results = mysql_query($query);

if (!$results)
{
	die ("Could not insert to the register: <br />". mysql_error());
}

$seatNumber = NULL;

for($i=1; $i<11; $i++)
{
	$chparam = "ch" . strval($i);
	$calcPNR = $doj . "-" . strval($i);
	if( !empty($_POST[$chparam]) )
	{
		$query = "INSERT INTO seat(userid, number, tableno, date) VALUES ('". $userid ."', '" . intval($i) . "', '". $calcPNR ."', '". $doj ."')";
		$results = mysql_query($query);
		if (!$results)
		{
			die ("Could not update seat: <br />". mysql_error());
		}
		$seatNumber = $seatNumber .", ". "$i";
	}
}
if(!empty($message))
{
	$message = "A new user '". $name ."' has booked seat number: '". $seatNumber ."'." . "His message is as below." . $message;	
}
else
{
	$message = "A new user '". $name ."' has booked seat number: '". $seatNumber;	
}
mysql_close($connection);	
header('Location: book_table.php?s='.urlencode('Your table is booked.')); exit;

?>
