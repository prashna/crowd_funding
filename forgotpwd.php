
<!DOCTYPE HTML>
<html>
<head>
<title>Candidate - Coming Soon</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!-- STYLES -->
<link href='styles/fonts/lora.css' rel='stylesheet' type='text/css' id="themeFont">
<link href="styles/grid960.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">

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



<div id="header" class="default width100 fullHeight">
  <div class="width100">
    <div class="width1000">
      <div id="topNav"></div>

        <div class="clear"></div>

        <div id="logoBig"><h1>Candidate - Your political Wordpress theme</h1></div>

        <div class="clear"></div>

        <div id="landing">
          <p>Enter your Email Address We will send the Reset Password link To Your Email</p>

            <div class="formHolder">
              <div action="" method="post" id="newsletterform">
                  <input type="text" name="email" id="reset_mail" value="Type in Your Email Address..." onBlur="if (this.value == '') {this.value = 'Type in Your Email Address...'};" onFocus="if (this.value == 'Type in Your Email Address...') {this.value = '';}">
                    <input type="submit" value="Reset" class="redButton roundButton" id="reset">

                  <span>Valid email required!</span>
                </div>
            </div>

            <div class="infoBox greenBox">Success!</div>
        </div>

        <div class="clear"></div>

        <div id="credits" class="default">
          Copyright <a href="index.php">Candidate &copy;2012 CampaignFunds.co.uk</a>

            <div class="clear"></div>

            <ul class="footerSoc">
              <li><a href="#" title="Follow Us on Twitter" class="twitter">Follow Us on Twitter</a></li>
              <li><a href="#" title="Follow Us on Facebook" class="facebook">Follow Us on Facebook</a></li>
              <li><a href="#" title="Follow Us on LinkedIn" class="linkedin">Follow Us on LinkedIn</a></li>
            </ul>
        </div>
    </div>
    </div>
</div>




<script type="text/javascript">
$(document).ready(function(){

   $("#reset").on("click",function(){
    var target=$("#reset_mail").val();
    $.ajax({
      url: "forget_request.php",
      type: "POST",
      data: {email:target},
      success:function(data){
        alert(data);
        if(data=="1"){
          alert("Reset Password sent to your email id Please check !");
        }else{
          alert("Invalid Email !");
        }
      },
      error:function(){
        alert("Oops Somthing went to wrong!");
      }
    });

   });





  });
</script>

</body>
</html>