<?php
	$cn=mysql_connect("localhost","root","");

$db=mysql_select_db("project",$cn);

$userid=$_POST["userid"];
$password=$_POST["password"];

if($userid == "admin" && $password == "nimda")
{
	$url="admin.php";
	header('Location: ' . $url);
	
}
 else
 {
$query="select * from register where userid='" . $userid . "' && password='" . $password . "'";

mysql_query($query,$cn);
$n=mysql_affected_rows();
if($n>=1)
{
	session_start();
    $_SESSION['userid'] = $userid;
	echo "<script>alert(\"Login successfully!!\")</script>;";
	$url="user.php";
	header('Location: ' . $url);
}
}
?>