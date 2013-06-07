<?php
if( isset($_GET['cpwd']) ){
//$key=$_GET['key'];
	var_dump($_GET['cpwd']);
	$key="22";
$pwd=md5($_GET['cpwd']);
include("config/dbconnect.php");
 $db=new Database();
  $db->connect();
$values=array('password' =>$pwd);
    $condition='reset_token="'.$key.'"';
    $state=$db->update("users",$values,$condition);
    //echo "string status".$state;
    if($state=1){
     header("location:index.php");
    }else{
    	echo '<div class="infoBox redBox" id="abs_pos">Error TryAgain!</div>';
    }
}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Candidate - Coming Soon</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!-- STYLES -->
<link href='styles/fonts/lora.css' rel='stylesheet' type='text/css' id="themeFont">
<link href="styles/grid960.css" rel="stylesheet" type="text/css">
<link href="styles/custom.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">

<link rel="icon" type="image/png" href="../images/favicon.png">

<!-- SCRIPTS -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<!-- PRETTY PHOTO -->
<script type="text/javascript" src="../js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<link href="js/prettyPhoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">

<!-- SLIDES -->
<script type="text/javascript" src="js/slides.min.jquery.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<!-- JQUERY COUNTDOWN -->
<script type="text/javascript" src="js/jquery.countdown.min.js"></script>

<!-- JQUERY UNIFORM -->
<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="js/tbUniform.js"></script>

<!-- THEME BLOSSOM SCRIPTS AND STYLES -->
<link href="demo.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
 <!-- <script type="text/javascript" src="js/themeblossom.js"></script> -->
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/tbDemo.js"></script>

</head>

<body>

<a id="topAnchor"></a>

<!-- STYLE CHANGER -->
<?php include("../style_changer.php");?>



<!-- .STYLE CHANGER -->

<div id="header" class="default width100 fullHeight">
	<div class="width100">
    <div class="width1000">
    	<div id="topNav"></div>

        <div class="clear"></div>

        <div id="logoBig"><h1></h1></div>

        <div class="clear"></div>
            <div class="infoBox redBox">Enter Valid Details!</div>
        <div id="adminLogin">
        	<p>Enter the Password details</p>

            <div class="formHolder">
            	<form action="" method="get" id="cpwdForm">
                	 <input type="password" name="pwd" id="rpwd" placeholder="Enter Your Password..." >
                    <input type="password" name="cpwd" id="crpwd" placeholder="Repeat Password..." >
                    <!-- <input type="submit" value="Change password" class="redButton bigButton roundButton" id="submit" style="width: 200px;"> -->
                    <a class="redButton bigButton roundButton" id="change_btn" style="width: 200px;"> Change password</a>

                	<span>Valid email required!</span>
                </form>
            </div>


        </div>

        <div class="clear"></div>
<!--
        <div id="credits" class="default">
        	Copyright <a href="index.php">Campaign &copy;2013 </a>

            <div class="clear"></div>

            <ul class="footerSoc">
            	<li><a href="https://twitter.com/" title="Follow Us on Twitter" class="twitter">Follow Us on Twitter</a></li>
            	<li><a href="https://facebook.com/" title="Follow Us on Facebook" class="facebook">Follow Us on Facebook</a></li>
            	<li><a href="https://linkedin.com/" title="Follow Us on LinkedIn" class="linkedin">Follow Us on LinkedIn</a></li>
            </ul>
        </div> -->
    </div>
    </div>
</div>




<script type="text/javascript">

    $(document).ready(function() {
    	$(".infoBox").hide();

    	$('#change_btn').on("click",function(){
	      var pwd=$('#rpwd').val();
	      var cpwd=$('#crpwd').val();
	      alert(pwd+"-----"+cpwd);
        if(cpwd!="" && pwd==cpwd){
        	 $("#cpwdForm").submit();
        }else{
            $(".infoBox").show();
        }

    	});

    });
 </script>

</body>
</html>