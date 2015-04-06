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



$name=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];


$query="insert into contact values('$name','$email','$message')";

mysql_query($query,$cn);
$n=mysql_affected_rows();
if ($n<1)
{
	echo"Error : Sending data";
	die();
}
$url="Contacts.html";
header('Location: ' . $url);
?>