<?php 

session_start();
if(isset($_SESSION['ADMIN_STATUS']) && $_SESSION['ADMIN_STATUS']==true)
{
    header("location: home.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Candidate - Coming Soon</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!-- STYLES -->
<link href='../styles/fonts/lora.css' rel='stylesheet' type='text/css' id="themeFont">
<link href="../styles/grid960.css" rel="stylesheet" type="text/css">
<link href="../styles/custom.css" rel="stylesheet" type="text/css">
<link href="../style.css" rel="stylesheet" type="text/css">

<link rel="icon" type="image/png" href="../images/favicon.png">

<!-- SCRIPTS -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<!-- PRETTY PHOTO -->
<script type="text/javascript" src="../js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<link href="../js/prettyPhoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">

<!-- SLIDES -->
<script type="text/javascript" src="../js/slides.min.jquery.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>

<!-- JQUERY COUNTDOWN -->
<script type="text/javascript" src="../js/jquery.countdown.min.js"></script>

<!-- JQUERY UNIFORM -->
<script type="text/javascript" src="../js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="../js/tbUniform.js"></script>

<!-- THEME BLOSSOM SCRIPTS AND STYLES -->
<link href="../demo.css" rel="stylesheet" type="text/css">
<link href="../style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../js/themeblossom.js"></script>
<script type="text/javascript" src="../js/jquery.cookie.js"></script>
<script type="text/javascript" src="../js/tbDemo.js"></script>

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
        
        <div id="logoBig"><h1>Candidate - Your political Wordpress theme</h1></div>
        
        <div class="clear"></div>
        
        <div id="adminLogin">
        	<p>Hello there! We are not ready yet, but why don't you leave your email address and<br>
			we'll let you know as soon as we're in business!</p>
            
            <div class="formHolder">
            	<form action="" method="post" id="newsletterForm">
                	<input type="text" name="email_admin" id="email_admin" placeholder="Enter Your Email...">
                    <input type="password" name="password_admin" id="password_admin" placeholder="Enter Your Password..." >
                    <input type="submit" value="Login" class="redButton bigButton roundButton" id="submit">
                
                	<span>Valid email required!</span>
                </form>
            </div>
            
            <div class="infoBox greenBox">Success!</div>
        </div>
        
        <div class="clear"></div>
        
        <div id="credits" class="default">
        	Copyright <a href="index.php">Candidate &copy;2012 A Political Wordpress Theme</a>
            
            <div class="clear"></div>
            
            <ul class="footerSoc">
            	<li><a href="https://twitter.com/#!/ThemeBlossom" title="Follow Us on Twitter" class="twitter">Follow Us on Twitter</a></li>
            	<li><a href="https://twitter.com/#!/ThemeBlossom" title="Follow Us on Facebook" class="facebook">Follow Us on Facebook</a></li>
            	<li><a href="https://twitter.com/#!/ThemeBlossom" title="Follow Us on LinkedIn" class="linkedin">Follow Us on LinkedIn</a></li>
            </ul>
        </div>
    </div>
    </div>
</div>

</body>
</html>
