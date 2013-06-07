<?php
include("config/dbconnect.php");
$ak=date("Y-m-d H:i:s")."-".microtime();
$key=md5($ak);

  $db=new Database();
  $db->connect();
function smtpmailer($to, $from, $from_name, $subject, $body) {
			  global $error;
			  $mail = new PHPMailer();  // create a new object
			  $mail->IsSMTP(); // enable SMTP
			  $mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
			  $mail->SMTPAuth = true;  // authentication enabled
			  $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
			  $mail->Host = 'smtp.gmail.com';
			  $mail->Port = 465;
			  $mail->Username = GUSER;
			  $mail->Password = GPWD;
			  $mail->SetFrom($from, $from_name);
			  $mail->Subject = $subject;
			  $mail->MsgHTML($body);
			  $mail->AddAddress($to);
			  if(!$mail->Send()) {
			    $error = 'Mail error: '.$mail->ErrorInfo;
			    return false;
			  } else {
			    $error = 'Message sent!';
			    return true;
			  }
			}
 if(isset($_POST['email']))
{

	$email=$_POST['email'];
	$where ='email="'.$email.'"';
	$res = $db->select('users','*',$where);
	if($res)
	{
		//echo "sent";
	  $target=$email; //$_POST['email'];
    $values=array('reset_token' =>$key);
    $condition='email="'.$target.'"';

    $state=$db->update("users",$values,$condition);

    $state1=$db->update("politicians",$values,$condition);
    //mailer code
    require 'mail/class.phpmailer.php';
			define('GUSER', 'testing@devbrother.com'); // GMail username
			define('GPWD', 'devbrother'); // GMail password

			$uemail=$email;
			$uname="Reset Password";

			 $link=$_SERVER["SERVER_NAME"]."/crowd_funding/reset_process.php?key=".$key;

			$body = "<html><head>
					      <title></title></head>
				         <body>	<a href='".$link."' style='text-decoration:underline;color:#2585b2;border-radius:10em;border:1px solid #11729e;text-decoration:none;color:#fff;background-color:#2585b2;padding:5px 15px;font-size:16px;line-height:1.4em;font-family:Helvetica Neue,Helvetica,Arial,sans-serif;font-weight:normal' target='_blank'>Reset Password</a>
						</body>
			</html>";
			$a = smtpmailer($uemail, '', 'testing@devbrother.com', $uname, $body, 'Activate account');
			if($a)
			{
				// echo json_encode(array('status' => 1));
			 // echo "sent";
			}
			else
			{
				 $status=4;
				// echo json_encode(array('status' => 0));
			}




    $status= ($state==1 || $state1==1) ? 1 : 2;
	}
	else
	{
		 $status=3;
	}
	echo $status;
 }

 ?>