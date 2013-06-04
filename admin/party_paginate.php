<?php
include_once("../config/dbconnect.php");
$db = new Database();
$db->connect();

$per_page = 3; 
if($_GET)
{
$page=$_GET['page'];
}

$start = ($page-1)*$per_page;
// $sql = "select * from users order by id limit $start,$per_page";
$sql = "SELECT * from parties order by id limit $start,$per_page";
$res = $db->process_select_query($sql);

// $order = "id limit $start,$per_page";
// $res = $db->select("users","*",null,$order);
$tblRow="";
for($i=0;$i<count($res);$i++)
{
	$tblRow .= "<tr>";  
	$tblRow .= "<td>" .  $res[$i]['id'] . "</td>";  
	$tblRow .= "<td>" .  $res[$i]['party_name'] . "</td>";  
	
	$tblRow .= "<td><a href='#party_edit' role='button' class='rec_update' rel-id='".$res[$i]['id']."' rel-name='".$res[$i]['party_name']."' data-toggle='modal'><i class='icon-pencil'></i></a></td>
	<td> <a href='#myModal' role='button' class='rec_delete' rel-id='".$res[$i]['id']."' data-toggle='modal'><i class='icon-remove'></i></a></td> "; 
	$tblRow .= "</tr>";
}

// new <a href='#party_edit' role='button' class='rec_update' rel-id='".$res[$i]['id']."' data-toggle='modal'><i class='icon-pencil'></i></a>

// old <a href=edit.php?table=users&id={$res[$i]['id']}><i class='icon-pencil'></i></a>
echo $tblRow;
?>