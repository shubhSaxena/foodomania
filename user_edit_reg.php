<?php


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

$query="insert into register(name, userid, email, bday, password, gender) values('$name','$userid','$email', '$bday', '$password', '$gender')";

mysql_query($query,$cn);
$n=mysql_affected_rows();
if ($n<1)
{
	echo"Error : Sending data";
	$url="user_view.php";
	header('Location: ' . $url);
	die();
}
else
{	
	session_start();
unset($_SESSION[userid]);
header("location:user_edit_reg.php");
$query="select * from register where userid='" . $userid . "'";
session_start();
	$_SESSION['userid']=$userid;
	echo "<script>alert(\"Registered successfully!!\")</script>;";
	$url="user_view.php";
	header('Location: ' . $url);
}
?>