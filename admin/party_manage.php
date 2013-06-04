<?php
include_once("../config/dbconnect.php");
$db = new Database();
$db->connect();
if(isset($_POST['process_type']))
{
	$process_type=$_POST['process_type'];
	if($process_type=="add")
	{
		$party_name=$_POST['party_name'];

    	$datenow=date('Y-m-d h:i:s', time());
		$table = "parties";
	    $rows='party_name,created_at,updated_at';
	    $values=array($party_name,$datenow,$datenow);
	    
	    $id=$db->insert($table,$values,$rows);
	}
	else if($process_type=="delete")
	{
		$table = "parties";
		$party_id=$_POST['party_id'];
		$where = " id=".$party_id;
		$id=$db->delete($table,$where);
		echo "success";
	}
	else if($process_type=="update")
	{
		$table = "parties";
		$party_name=$_POST['party_name'];
		$party_id=$_POST['party_id'];
		$where = " id=".$party_id;
		$rows = array("party_name" => $party_name);
		$id=$db->update($table,$rows,$where);
		if($id)
		 	echo json_encode(array('status' => 1));
		else
		 	echo json_encode(array('status' => 0,'message' => "Party Already exists"));
	}
	else if($process_type=="check_avail")
	{
		$table = "parties";
		$party_name=$_POST['party_name'];
		
		$where = ' party_name="'.$party_name.'"';


		$res = $db->select($table,'*',$where);
		if($res)
		{
			echo "Party Already exists";
		}
		else
		{
			echo "success";
		}
	}
}
?>