<?php
 include("config/dbconnect.php");
 
 $_SESSION['USER_TYPE']=false;
 $_SESSION['USER_ID']=false;
 $_SESSION['ADMIN_STATUS']=false;
 $_SESSION['LOGIN_STATUS']=false;
 header("location: index.php");
 ?>