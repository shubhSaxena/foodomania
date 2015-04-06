<?php
date_default_timezone_set('Asia/Calcutta');
 if(isset($_POST['submit']))
{
echo '<script>alert("iiii");</script>';
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

$query="create table `".$usid."`(name varchar(50), recipe varchar(255))";


//mysql_query($query,$cn);
//$query="insert into $usid(name varchar(50), recipe varchar(255))";

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
	
	echo "<script>alert(\"Uploaded successfully!!\")</script>;";
	$url="user.php";
	header('Location: ' . $url);
}
}
?>