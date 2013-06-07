
<?php
require 'mail/class.phpmailer.php';
define('GUSER', 'testing@devbrother.com'); // GMail username
define('GPWD', 'devbrother'); // GMail password

if( $status==1){
$uemail=$email;
$uname="Reset Password"
}
$uemail=$user_email;
$uname=	$user_name;
 $link=$_SERVER["SERVER_NAME"]."/reset_process.php?key=".$key;

$body = "<html>
	<head>
		<title></title>
	</head>
	<body>
						<h2>Welcome to campaignfunds.co.uk</h2>
						<p style='font-size:14px;line-height:1.4em;color:#444444;font-family:&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif;margin:0 0 1em 0;margin:0 0 20px 0'>
							Reset Password
							Click the button below to Reset your Password.
						</p>

						<p style='font-size:14px;line-height:1.4em;color:#444444;font-family:&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif;margin:0 0 1em 0;margin:5px 0 10px 0'>
							<a href='".$link."' style='text-decoration:underline;color:#2585b2;border-radius:10em;border:1px solid #11729e;text-decoration:none;color:#fff;background-color:#2585b2;padding:5px 15px;font-size:16px;line-height:1.4em;font-family:Helvetica Neue,Helvetica,Arial,sans-serif;font-weight:normal' target='_blank'>Reset Password</a>
						</p>

		<table width='100%' border='0' cellspacing='0' cellpadding='0' height='3' style='width:100%;background-image:url('');background-repeat:repeat-x;background-color:#43a4d0;min-height:3px'>
										<tbody><tr>
											<td></td>
										</tr>
									</tbody></table>

								</div>

		  </div>
			</body>
</html>
";

$a = smtpmailer($uemail, '', 'testing@devbrother.com', $uname, $body, 'Activate account');
if($a)
{
	// echo json_encode(array('status' => 1));
 echo "sent";
}
else
{
	 echo "error";
	// echo json_encode(array('status' => 0));
}
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



?>
