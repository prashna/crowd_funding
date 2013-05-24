<?php
include("config/dbconnect.php");
session_start();
		echo "<script>alert('invalid a/password.')</script>";

if(isset($_POST['email_login']))
{
	$db = new Database();  
	$db->connect();

	$email=$_POST['email_login'];

    $password=md5($_POST['password_login']);

	$where ='email="'.$email.'" and password = "'.$password.'"';
	$res = $db->select("users",'*',$where);
	if($res)
	{
		$_SESSION['LOGIN_STATUS']=true;
	}
	else
		echo "<script>alert('invalid email/password.')</script>";

}
// header("location: index.php");
?>