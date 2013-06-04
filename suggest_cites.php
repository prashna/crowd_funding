<?php
 
// if the 'term' variable is not sent with the request, exit
if ( !isset($_REQUEST['term']) )
	exit;
 
include("config/dbconnect.php");
 $db = new Database();
 $db->connect();
 $rs = $db->select("cities","*",'city_name like "%'.mysql_real_escape_string($_REQUEST['term']).'%"');
 $data=array();
	for( $i = 0; $i<count($rs);$i++)
	{
		$data[] = array('label' => $rs[$i]['city_name']);
	}

 
// jQuery wants JSON data
echo json_encode($data);
flush();
