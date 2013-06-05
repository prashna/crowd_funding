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
$sql = "SELECT * from cities order by id limit $start,$per_page";
$res = $db->process_select_query($sql);

// $order = "id limit $start,$per_page";
// $res = $db->select("users","*",null,$order);
$tblRow="";
for($i=0;$i<count($res);$i++)
{
	$tblRow .= "<tr>";  
	$tblRow .= "<td>" .  $res[$i]['id'] . "</td>";  
	$tblRow .= "<td>" .  $res[$i]['city_name'] . "</td>";  
	$tblRow .= "<td>" .  $res[$i]['city_description'] . "</td>";  
	
	$tblRow .= "<td><a href='#city_edit' role='button' class='rec_update' rel-id='".$res[$i]['id']."' rel-name='".$res[$i]['city_name']."' rel-des='".$res[$i]['city_description']."' data-toggle='modal'><i class='icon-pencil'></i></a></td>
	<td> <a href='#myModal' role='button' class='rec_delete' rel-id='".$res[$i]['id']."' data-toggle='modal'><i class='icon-remove'></i></a></td> "; 
	$tblRow .= "</tr>";
}

// new <a href='#city_edit' role='button' class='rec_update' rel-id='".$res[$i]['id']."' data-toggle='modal'><i class='icon-pencil'></i></a>

// old <a href=edit.php?table=users&id={$res[$i]['id']}><i class='icon-pencil'></i></a>
echo $tblRow;
?>