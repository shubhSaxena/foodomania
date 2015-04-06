<?php
date_default_timezone_set('Asia/Calcutta');

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

$table=$_POST["table"];
$name=$_POST["name"];
$desc=$_POST["message"];



$query="insert into drinks(name, description) values('$name','$desc')";

mysql_query($query,$cn);
$n=mysql_affected_rows();
if ($n<1)
{
	echo"Error : Sending data";
	$url="admin_add_fd.php";
	header('Location: ' . $url);
	die();
}
else
{	$_SESSION['userid']=$userid;
	echo "<script>alert(\"Registered successfully!!\")</script>;";
	$url="admin_add_fd.php";
	header('Location: ' . $url);
}
?>