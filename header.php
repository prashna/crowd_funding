<?php
 include_once("config/dbconnect.php");
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
<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> -->
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.1.0.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script src="js/underscore.js" type="text/javascript"></script>


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
<link href="styles/custom.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="js/themeblossom.js"></script>
<!-- <script type="text/javascript" src="js/jquery.cookie.js"></script> -->
<!-- <script type="text/javascript" src="js/tbDemo.js"></script> -->

<!-- ckeditor -->
  <script src="admin/ckeditor/ckeditor.js"></script>
  <link rel="stylesheet" href="admin/ckeditor/samples/sample.css">

<script type="text/javascript">
$(document).ready(function(){

$("#login").validate({
       rules:{
          // uname:"required",
          email_login:{
              required:true,
              email: true
          },
          password_login:{
            required:true,
            minlength: 6
          },
          userType_login:{
            required:true
          }
        },
        messages:{
          email_login:{
            required:"Enter your email",
            email:"Enter valid email"
          },
          password_login:{
            required:"Enter your Password",
            minlength:"Password must be minimum 6 characters"
          },
          userType_login:{
            required:"Select user type"
          }
        },
        errorPlacement: function (error, element) {
           error.insertAfter(element);
       }
   });



// login button clicks
   $(document).on("click","#login_button",function(){
       if($("#login").valid()){

            $.ajax({
                type: "POST",
                url: "login.php",
                data: {
                    "email_login":$("#email_login").val(),
                    "password_login":$("#password_login").val(),
                    "userType_login":$("#userType_login").val()
                    },
                cache: false,
                dataType:"json",
                success: function(result){
                    console.log(result);
                         if(result.status==1){
                            location.reload(); 
                         }else{
                            $("#valid_login_error").html(result.message);
                            $("#valid_login_error").css("display","inline-block");
                         }
                }
            });
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
           <!--      
            <a href="biography.php?<?php echo "userType=".$_SESSION['USER_TYPE']."&userid=".$_SESSION['USER_ID']; ?>" class="signUp ">My Profile</a>

            <span>|</span>  -->

            <a href="logout.php" class="login inactive">Logout</a>

            <?php }
            else
            { ?>
	    	<a href="signup.php" class="signUp">Sign Up</a> <span>|</span> <a href="javascript:void()" class="login inactive">Login</a>
                <?php }?>
        </div></div>
        
        <div id="loginForm">
        	<div>
            	<form action="" method="post" name="loginForm" id="login">
                	<p>
                        <input type="text" placeholder="Email" name="email_login" id="email_login"/>
                        <label for="email_login"  class="error" style=""></label>
                    </p>
                	<p>
                        <input type="password" placeholder="Password" name="password_login" id="password_login"/>
                        <label for="password_login"  class="error" style=""></label>
                    </p>
                    <p>
                    <select name="userType_login" id="userType_login">
                        <option value="">-- Select User Type --</option>
                        <option value="users">User</option>
                        <option value="politicians">Politician</option>
                    </select>
                    <label for="userType_login" id="userType_login_error" class="error" style=""></label>
                    <label for="" id="valid_login_error" class="error" style=""></label>
                    </p>
                </form>
                
                <div class="clear"></div>
                
                <a  id="login_button" class="redButton roundButtonX tinyButton">Login</a>
                
                <a  id="login_forget" title="Forgott password?" class="right">Forgott password?</a>
            </div>
        </div>
        
        <div class="clear"></div>
        
        <div id="logo"><h1><a href="index.php" title="Back to Home">Candidate - Wordpress Theme</a></h1></div>
        
        <div id="donate"><a href="admin/home.php" title="Admin" class="whiteButton bigButton right roundButtonX">Admin</a></div>
        <!-- 
        <div id="donate"><a href="getInvolved.php" title="Donate Now" class="whiteButton bigButton right roundButtonX">Donate Now</a></div> -->
    </div>
    </div>
</div>