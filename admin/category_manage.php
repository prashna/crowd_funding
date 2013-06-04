<?php
include_once("../config/dbconnect.php");
$db = new Database();
$db->connect();
if(isset($_POST['process_type']))
{
	$process_type=$_POST['process_type'];
	if($process_type=="add")
	{
		$category_name=$_POST['category_name'];

    	$datenow=date('Y-m-d h:i:s', time());
		$table = "categories";
	    $rows='category_name,created_at,updated_at';
	    $values=array($category_name,$datenow,$datenow);
	    
	    $id=$db->insert($table,$values,$rows);
	}
	else if($process_type=="delete")
	{
		$table = "categories";
		$category_id=$_POST['category_id'];
		$where = " id=".$category_id;
		$id=$db->delete($table,$where);
		echo "success";
	}
	else if($process_type=="update")
	{
		$table = "categories";
		$category_name=$_POST['category_name'];
		$category_id=$_POST['category_id'];
		$where = " id=".$category_id;
		$rows = array("category_name" => $category_name);
		$id=$db->update($table,$rows,$where);
		if($id)
		 	echo json_encode(array('status' => 1));
		else
		 	echo json_encode(array('status' => 0,'message' => "Category Already exists"));
	}
	else if($process_type=="check_avail")
	{
		$table = "categories";
		$category_name=$_POST['category_name'];
		
		$where = ' category_name="'.$category_name.'"';


		$res = $db->select($table,'*',$where);
		if($res)
		{
			echo "Category Already exists";
		}
		else
		{
			echo "success";
		}
	}
}
?>