<?php
include_once("../config/dbconnect.php");
$db = new Database();
$db->connect();

$per_page = 10; 
if($_GET)
{
$page=$_GET['page'];
}

$start = ($page-1)*$per_page;
// $sql = "select * from users order by id limit $start,$per_page";
$sql = "SELECT a.*,b.first_name,b.last_name,b.address,b.city,b.state,b.zip,b.phone_number FROM users as a left join user_details as b on a.details_id=b.id order by id limit $start,$per_page";
$res = $db->process_select_query($sql);

// $order = "id limit $start,$per_page";
// $res = $db->select("users","*",null,$order);
$tblRow="";
for($i=0;$i<count($res);$i++)
{
	$tblRow .= "<tr>";  
	$tblRow .= "<td>" .  $res[$i]['id'] . "</td>";  
	$tblRow .= "<td>" .  $res[$i]['first_name'] ." ". $res[$i]['last_name'] . "</td>";  
	$tblRow .= "<td>" .  $res[$i]['email'] . "</td>";  
	$tblRow .= "<td>" .  $res[$i]['address'].",<br/>". $res[$i]['city'].",<br/>". $res[$i]['state']." - ".$res[$i]['zip'].".</td>";  
	$tblRow .= "<td>" .  $res[$i]['phone_number'] . "</td>"; 
	// $tblRow .= "<td>" .  $res[$i]['zip_code'] . "</td>";  
	$tblRow .= "<td>" .  $res[$i]['created_at'] . "</td>";  
	if($res[$i]['approved']==1)
		$tblRow .= "<td><i class='icon-ok'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class='change_approve' id='".$res[$i]['approved']."' data_user_id='".$res[$i]['id']."' href='#' title='Disapprove this'>Disapprove</a></td>";  
	else
		$tblRow .= "<td><i class='icon-remove'></i>&nbsp;<a class='change_approve' id='".$res[$i]['approved']."' data_user_id='".$res[$i]['id']."' href='#' title='Approve this'>Approve</a></td>";  

	// $tblRow .= "<td><a href=edit.php?table=users&id={$res[$i]['id']}><i class='icon-pencil'></i></a></td>
	// <td> <a href='#myModal' role='button' class='rec_delete' rel-url=user_delete.php?user_id={$res[$i]['id']} data-toggle='modal'><i class='icon-remove'></i></a></td> "; 
	// $tblRow .= "</tr>";
}
echo $tblRow;
?>