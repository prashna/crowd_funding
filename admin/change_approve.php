<?php 
include("../config/dbconnect.php");

	$db = new Database();  
	$db->connect();
if(isset($_POST['current_status']))
{
	$status=$_POST['current_status'];
	$table=$_POST['userType'];
	$user_id=$_POST['user_id'];
	$sql= "";

	if($status == 0 )
		$sql= "update ".$table." set approved = 1 where id = ".$user_id;
	else
		$sql= "update ".$table." set approved = 0 where id = ".$user_id;
	
	if($db->process_query($sql))
		 echo json_encode(array('status' => 1));
	else
		 echo json_encode(array('status' => 0));


}