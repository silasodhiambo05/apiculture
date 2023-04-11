<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_REQUEST['sub']))
{
$a = $_REQUEST['username'];
$b = $_REQUEST['password'];

$res = mysqli_query($cser,"select* from users where username='$a'and password='$b'");
$result=mysqli_fetch_array($res);
if($result)
{
	
	$_SESSION["login"]="1";
	header("location:admin/index.php");
}
else	
{
	header("location:login.php?err=1");
	
}
}
