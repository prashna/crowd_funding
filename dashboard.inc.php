<?php 
include_once("config/dbconnect.php");
$db = new Database();  
$db->connect();
if(!isset($_SESSION['USER_ID']))
	header("location:index.php");
if(isset($_POST['update']))
{
	$db->update("user_details",$_POST['detail'],"id=".$_POST['details_id']);
	$result=$db->select("cities","id","city_name='".$_POST['city_name']."'");
  $_POST['politician']['city_id']=$result[0]['id'];
	$db->update("politicians",$_POST['politician'],"id=".$_SESSION['USER_ID']);
	$msg="Profile updated Successfully";

}

if(isset($_POST['update_page'])){
	if(isset($_POST['page_id'])){
		$_POST['page']['approved'] = 0;
		$db->update("politician_pages",$_POST['page'],"id=".$_POST['page_id']);
		$db->update("politicians",array("approved"=>"0"),"id=".$_SESSION['USER_ID']);
		$msg="Page Updated Successfully";

	}
	else{
		extract($_POST['page']);
		$db->insert("politician_pages",array($page_name,$content,$_SESSION['USER_ID']),'page_name,content,politician_id');
	}
}
if(isset($_POST['update_pass']))
{
	$pass_res = $db->select("politicians","password","id=".$_SESSION['USER_ID']);
	$password = $pass_res[0]["password"];
	if(md5($password)==md5($_POST['old_password']))
	{
		$db->update("politicians",array("password"=>md5($_POST['password'])));
		$msg="Password Changed Successfully";
	}
}

$page = $db->select("politician_pages","*","politician_id=".$_SESSION['USER_ID']);
if($page){
	extract($page[0]);
			$page_id = $id;
		unset($id);
}
$parties = $db->select("parties","id,party_name");
$categories = $db->select("categories","id,category_name");
$politician_details = $db->process_select_query("select details_id,party_id,category_id,city_id,d.*,c.city_name from politicians as p left join user_details as d on d.id = p.details_id left join cities as c on c.id=p.city_id where p.id = ".$_SESSION['USER_ID']);
extract($politician_details[0]);
include("header.php");
