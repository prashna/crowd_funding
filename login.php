<?php
include("config/dbconnect.php");

	$db = new Database();  
	$db->connect();
if(isset($_POST['admin_login']))
{

	$email=$_POST['email_admin'];
    $password=md5($_POST['password_admin']);

	$where ='email="'.$email.'" and password = "'.$password.'" and isadmin = 1';

	$result = $db->select('users','*',$where);
	if($result)
	{
				 	$_SESSION['LOGIN_STATUS']=true;
				 	$_SESSION['ADMIN_STATUS']=true;
					$_SESSION['USER_TYPE']="users";
					$_SESSION['USER_ID']=$result[0]['id'];
		 echo json_encode(array('status' => 1));
	}
	else
	{
		 $result = $db->select("politicians",'*',$where);
		 if($result)
		 {
				 	$_SESSION['ADMIN_STATUS']=true;
		 			$_SESSION['LOGIN_STATUS']=true;
					$_SESSION['USER_TYPE']="politicians";
					$_SESSION['USER_ID']=$result[0]['id'];
		 	echo json_encode(array('status' => 1));
		 }
		 else
		 	echo json_encode(array('status' => 0,'message' => "Enter Valid Details"));
	}
}

else if(isset($_POST['checkcity']))
{

	$city_name=$_POST['city_name'];

	$where ='city_name="'.$city_name.'"';

	$res = $db->select('cities','*',$where);
	if($res)
	{
		echo json_encode(array('status' => 1));		 
	}
	else
	{
		echo json_encode(array('status' => 0,'message' => "Enter Valid Place"));
	}
}

else if(isset($_POST['checkemail']))
{

	$email=$_POST['email'];

	$where ='email="'.$email.'"';

	$res = $db->select('users','*',$where);
	if($res)
	{
		 echo json_encode(array('status' => 0,'message' => "Email Already exists"));
	}
	else
	{
		 $result = $db->select("politicians",'*',$where);
		 if($result)
		 	echo json_encode(array('status' => 0,'message' => "Email Already exists"));
		 else
		 	echo json_encode(array('status' => 1));
	}
}
else if(isset($_POST['email_login']))
{

	$email=$_POST['email_login'];
	$userType=$_POST['userType_login'];

    $password=md5($_POST['password_login']);

	$where ='email="'.$email.'" and password = "'.$password.'"';
	$res = $db->select($userType,'*',$where);
	if($res)
	{
		$_SESSION['LOGIN_STATUS']=true;
		$_SESSION['USER_TYPE']=$userType;
		$_SESSION['ADMIN_STATUS']=false;
		$_SESSION['USER_ID']=$res[0]['id'];
		 echo json_encode(array('status' => 1));
	}
	else
		 echo json_encode(array('status' => 0,'message' => "Enter Valid Details"));

}
// header("location: index.php");
?>