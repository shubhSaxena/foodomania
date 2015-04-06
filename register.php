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
$userid=$_POST["userid"];
$email=$_POST["email"];
$bday=$_POST["bday"];
$password=$_POST["password"];
$confirm_password=$_POST["confirm_password"];
$gender=$_POST["gender"];


if($password!=$confirm_password)
{
echo "<script>alert(\"password do not match!!\")</script>;";
$url="register.html";
	header('Location: ' . $url);
die();

}

/*
$query1="select email from register where email='$email' ";
mysql_query($query1,$cn);
$n1=mysql_affected_rows();
if($n1<1)
{
	echo "<script>alert(\"email already exists!!!\")</script>;";
	$url="register.html";
	header('Location: ' . $url);
	die();
}


$query2="select userid from register where userid='$userid' ";
mysql_query($query2,$cn);
$n2=mysql_affected_rows();
if($n2<1)
{
	echo "<script>alert(\"userid already exists!!!\")</script>;";
	$url="register.html";
	header('Location: ' . $url);
	die();
}
*/

$query="insert into register(name, userid, email, bday, password, gender) values('$name','$userid','$email', '$bday', '$password', '$gender')";

mysql_query($query,$cn);
$n=mysql_affected_rows();
if ($n<1)
{
	echo"Error : Sending data";
	$url="register.html";
	header('Location: ' . $url);
	die();
}
else
{
	echo "<script>alert(\"Registered successfully!!\")</script>;";
	$url="register.html";
	header('Location: ' . $url);
}
?>