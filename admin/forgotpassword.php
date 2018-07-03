<?php 
include 'dbc.php';

error_reporting(0);
/******************* ACTIVATION BY FORM**************************/
if ($_POST['doReset']=='Reset')
{
$err = array();
$msg = array();

foreach($_POST as $key => $value) {
	$data[$key] = filter($value);
}
if(!isEmail($data['user_email'])) {
$err[] = "ERROR - Please enter a valid email"; 
}
$user_email = $data['user_email'];
//check if activ code and user is valid as precaution
$rs_check = mysql_query("select id from users where user_email='$user_email'") or die (mysql_error()); 
$num = mysql_num_rows($rs_check);
  // Match row found with more than 1 results  - the user is authenticated. 
    if ( $num <= 0 ) { 
	$err[] = "Error - Sorry no such account exists or registered.";
	//header("Location: forgot.php?msg=$msg");
	//exit();
	}


if(empty($err)) {

$new_pwd = GenPwd();
$pwd_reset = PwdHash($new_pwd);
//$sha1_new = sha1($new);	
//set update sha1 of new password + salt
$rs_activ = mysql_query("update users set pwd='$pwd_reset' WHERE 
						 user_email='$user_email'") or die(mysql_error());
						 
$host  = $_SERVER['HTTP_HOST'];
$host_upper = strtoupper($host);						 
						 
//send email

$message = 
"Here are your new password details ...\n
User Email: $user_email \n
Passwd: $new_pwd \n

Thank You

Administrator
$host_upper
______________________________________________________
THIS IS AN AUTOMATED RESPONSE. 
***DO NOT RESPOND TO THIS EMAIL****
";
	mail($user_email, "Reset Password", $message,
    "From: \"Member Registration\" <auto-reply@$host>\r\n" .
     "X-Mailer: PHP/" . phpversion());	
	 $msgtype="normal";
$msg = "Your account password has been reset and a new password has been sent to your email address please check your inbox and spam.";						 			 

header("Location: forgot.php?msg=$msg&msgtype=$msgtype");						 
//exit();
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Halal</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Halal">
    <meta name="author" content="The Halal ">
    <link rel="stylesheet" href="assets/css/styles.min.css?=113">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
    
</head><body class="focusedform">

<div class="verticalcenter">
	<!--<a href="index.htm"><img src="assets/img/logo-big.png" alt="Logo" class="brand" /></a>-->
	<div class="panel panel-primary">
		<div class="panel-body">
			<h4 class="text-center" style="margin-bottom: 25px;">Reset Password</h4>
			<?php
	  /******************** ERROR MESSAGES*************************************************
	  This code is to show error messages 
	  **************************************************************************/
	  if(!empty($err))  {
	   echo "<div class=\"msg\">";
	  foreach ($err as $e) {
	    echo "$e <br>";
	    }
	  echo "</div>";	
	   }
	  /******************************* END ********************************/	  
	  ?>
				<form action="#" method="post" class="form-horizontal" style="margin-bottom: 0px !important;">
						
						<div class="form-group">
							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
									<input type="text" name="user_email" class="form-control" id="email" placeholder="Email">
								</div>
							</div>
						</div>
						<div class="pull-right">
						<input name="doReset" type="submit" id="doLogin3" class="btn btn-success" value="Reset" class="button sub">
				
			</div>
					</form>
					
		</div>
		<div class="panel-footer">
			<div class="pull-left">
				<a href="index.php" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</a>
			</div>
			
		</div>
	</div>
 </div>
      
</body>
</html>