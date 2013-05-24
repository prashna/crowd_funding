<?php
 include("config/dbconnect.php");
 session_start();
 $_SESSION['LOGIN_STATUS']=false;
 header("location: index.php");
 ?>