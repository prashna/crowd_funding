<?php
include("../config/dbconnect.php"); 
$db=new Database();
$db->connect();

if(isset($_GET['city_id']))
{
	$city_id=$_GET['city_id'];
    $table = "cities";
    $where ='id='.$city_id;
    $result=$db->select($table,'*',$where);
    echo $result[0]["city_description"];
}

if(isset($_GET['pol_id']))
{
	$pol_id=$_GET['pol_id'];
    $table = "politicians";
    $where ='id='.$pol_id;
    $result=$db->select($table,'*',$where);
    echo $result[0]["id"];
    // echo $result[0]["politician_description"];
}

?>