<?php
 include("config/dbconnect.php");
 // include("login.php");
 session_start();

 ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Candidate - Get Involved</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!-- STYLES -->
<link href='styles/fonts/lora.css' rel='stylesheet' type='text/css' id="themeFont">
<link href='styles/fonts/greatVibes.css' rel='stylesheet' type='text/css'>
<link href="styles/grid960.css" rel="stylesheet" type="text/css">

<link rel="icon" type="image/png" href="images/favicon.png">

<!-- SCRIPTS -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>

<!-- PRETTY PHOTO -->
<script type="text/javascript" src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
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
<link href="css/custom.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="js/themeblossom.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/tbDemo.js"></script>
<script type="text/javascript">
$(document).ready(function(){

// parties list show hide
    $("#party_list").hide();
    $(document).on("change","#userType",function()
    {
        if($(this).val() == "users" || $(this).val() == "")
            $("#party_list").hide();
        else
            $("#party_list").show();
    });

$("#login").validate({
       errorPlacement: function (error, element) {
           error.insertAfter(element.parent());
       }
   });



// Upload button clicks
   $(document).on("click","#login_button",function(){
       if($("#login").valid()){
            alert("success");
            document.loginForm.submit();
       }
       
    });
});

</script>

</head>

<body>
<a id="topAnchor"></a>
<?php include("style_changer.php"); ?>

    <div id="header" class="default width100">
	<div class="width100">
    <div class="width1000">
    	<div id="topNav"><div>
            <?php if(isset($_SESSION['LOGIN_STATUS']) && $_SESSION['LOGIN_STATUS']==true)
            {
                ?>
            <a href="myprofile.php" class="signUp ">My Profile</a> <span>|</span> <a href="logout.php" class="login inactive">Logout</a>

            <?php }
            else
            { ?>
	    	<a href="signup.php" class="signUp">Sign Up</a> <span>|</span> <a href="javascript:void()" class="login inactive">Login</a>
                <?php }?>
        </div></div>
        
        <div id="loginForm">
        	<div>
            	<form action="login.php" method="post" name="loginForm" id="login">
                	<p><input type="text" placeholder="Email" class="required email" name="email_login" id="email_login"/></p>
                	<p><input type="password" placeholder="Password" class="required" name="password_login" id="password_login"/></p>
                    <p><select name="userType_login"  class="required" id="userType_login">
                        <option value="">-- Select User Type --</option>
                        <option value="users">User</option>
                        <option value="politicians">Politician</option>
                    </select></p>
                
                </form>
                
                <div class="clear"></div>
                
                <a href="javascript:void()" id="login_button" class="redButton roundButtonX tinyButton">Login</a>
                
                <a href="javascript:void()" id="login_forget" title="Forgott password?" class="right">Forgott password?</a>
            </div>
        </div>
        
        <div class="clear"></div>
        
        <div id="logo"><h1><a href="index.php" title="Back to Home">Candidate - Wordpress Theme</a></h1></div>
        
        <div id="donate"><a href="getInvolved.php" title="Donate Now" class="whiteButton bigButton right roundButtonX">Donate Now</a></div>
    </div>
    </div>
</div>