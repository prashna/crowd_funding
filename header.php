
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
<script type="text/javascript" src="js/themeblossom.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/tbDemo.js"></script>

</head>

<body>
<a id="topAnchor"></a>
<?php include("style_changer.php"); ?>

    <div id="header" class="default width100">
	<div class="width100">
    <div class="width1000">
    	<div id="topNav"><div>
	    	<a href="signUp.php" class="signUp">Sign Up</a> <span>|</span> <a href="javascript:void()" class="login inactive">Login</a>
        </div></div>
        
        <div id="loginForm">
        	<div>
            	<form action="#" method="post" name="loginForm">
                	<input type="text" value="Email" name="loginUname" onBlur="if (this.value == '') {this.value = 'Email'};" onFocus="if (this.value == 'Email') {this.value = '';}" class="roundButton">
                	<input type="password" value="Password" name="loginPassword" onBlur="if (this.value == '') {this.value = 'Password'};" onFocus="if (this.value == 'Password') {this.value = '';}" class="roundButton">
                    
                </form>
                
                <div class="clear"></div>
                
                <a href="javascript:void()" onclick="document.loginForm.submit()" class="redButton roundButtonX tinyButton">Login</a>
                
                <a href="javascript:void()" title="Forgott password?" class="right">Forgott password?</a>
            </div>
        </div>
        
        <div class="clear"></div>
        
        <div id="logo"><h1><a href="index.php" title="Back to Home">Candidate - Wordpress Theme</a></h1></div>
        
        <div id="donate"><a href="getInvolved.php" title="Donate Now" class="whiteButton bigButton right roundButtonX">Donate Now</a></div>
    </div>
    </div>
</div>