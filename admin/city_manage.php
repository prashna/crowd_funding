<?php
include_once("../config/dbconnect.php");
$db = new Database();
$db->connect();
function delete_image($path,$name)
{
	unlink($path.$name);
}
if(isset($_POST['process_type']))
{
	$process_type=$_POST['process_type'];
	if($process_type=="add")
	{
		$city_name=$_POST['city_name'];
		$city_description=$_POST['city_description'];

    	$datenow=date('Y-m-d h:i:s', time());
		$table = "cities";
	    $rows='city_name,city_description,created_at,updated_at';
	    $values=array($city_name,$city_description,$datenow,$datenow);
	    
	    $id=$db->insert($table,$values,$rows);
	}
	else if($process_type=="delete")
	{
		$city_id=$_POST['city_id'];

		$sqlnew = "SELECT * FROM city_images where city_id=".$city_id;
		$images = $db->process_select_query($sqlnew);
		foreach ($images as $value) {
			delete_image("../uploads/cities/",$value['image_name']);
		}
		$table = "city_images";
		$where = " city_id=".$city_id;
		$id=$db->delete($table,$where);

		$table = "cities";
		$where = " id=".$city_id;
		$id=$db->delete($table,$where);
		echo "success";
	}
	else if($process_type=="delete_image")
	{
		$image_id=$_POST['image_id'];
		$image_path=$_POST['image_path'];

		$table = "city_images";
		$where = " id=".$image_id;
		$id=$db->delete($table,$where);

		unlink($image_path);

		echo "success";
	}
	else if($process_type=="update")
	{
		$table = "cities";
		$city_description=$_POST['city_description'];
		$city_name=$_POST['city_name'];
		$city_id=$_POST['city_id'];
		$where = " id=".$city_id;
		$rows = array("city_name" => $city_name,"city_description" => $city_description);
		$id=$db->update($table,$rows,$where);
		if($id)
		 	echo json_encode(array('status' => 1));
		else
		 	echo json_encode(array('status' => 0,'message' => "City Already exists"));
	}
	else if($process_type=="check_avail")
	{
		$table = "cities";
		$city_name=$_POST['city_name'];
		
		$where = ' city_name="'.$city_name.'"';


		$res = $db->select($table,'*',$where);
		if($res)
		{
			echo "City Already exists";
		}
		else
		{
			echo "success";
		}
	}
}
?>