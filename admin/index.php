<?php
include 'dbc.php';
error_reporting(0);
$err = array();
foreach($_GET as $key => $value) {
$get[$key] = filter($value); //get variables are filtered.
}
if ($_POST['doLogin']=='Login')
{
foreach($_POST as $key => $value) {
$data[$key] = filter($value); // post variables are filtered
}
$user_email = $data['usr_email'];
$pass = $data['pwd'];
if (strpos($user_email,'@') === false) {
$user_cond = "user_name='$user_email'";
} else {
$user_cond = "user_email='$user_email'";
}
$result = mysql_query("SELECT `id`,`pwd`,`full_name`,`approved`,`user_level` FROM users WHERE
$user_cond
AND `banned` = '0'
")
or die (mysql_error());
$num = mysql_num_rows($result);
// Match row found with more than 1 results  - the user is authenticated.
if ( $num > 0 ) {
list($id,$pwd,$full_name,$approved,$user_level) = mysql_fetch_row($result);
if(!$approved) {
//$msg = urlencode("Account not activated. Please check your email for activation code");
$err[] = "Account not activated. Please check your email for activation code";
header("Location: .php?msg=$msg");
//exit();
}
//check against salt
if ($pwd === PwdHash($pass,substr($pwd,0,9))) {
if(empty($err)){
// this sets session and logs user in
session_start();
session_regenerate_id (true); //prevent against session fixation attacks.
// this sets variables in the session
$_SESSION['user_id']= $id;
$_SESSION['user_name'] = $full_name;
$_SESSION['user_level'] = $user_level;
$_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT']);
//update the timestamp and key for cookie
$stamp = time();
$ckey = GenKey();
mysql_query("update users set `ctime`='$stamp', `ckey` = '$ckey' where id='$id'") or die(mysql_error());
//set a cookie
if(isset($_POST['remember'])){
setcookie("user_id", $_SESSION['user_id'], time()+60*60*24*COOKIE_TIME_OUT, "/");
setcookie("user_key", sha1($ckey), time()+60*60*24*COOKIE_TIME_OUT, "/");
setcookie("user_name",$_SESSION['user_name'], time()+60*60*24*COOKIE_TIME_OUT, "/");
}
$msg ="login Successfully";
echo "<script>window.location.href='dashboard.php?msg=$msg';</script>";
//  header("Location: dashboard.html?msg=$msg");
}
}
else
{
$msg = "Invalid Login. Please try again with correct user email and password.";
header("Location: index.php?msg=1");
}
} else {
$err[] = "Error - Invalid login. No such user exists";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Esteshari Dental Center</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Esteshari Dental Center">
<meta name="author" content="Esteshari Dental Center ">
<link rel="stylesheet" href="assets/css/styles.min.css?=113">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
</head><body class="focusedform">
<div class="verticalcenter">
<!--<a href="index.html"><img src="assets/img/logo-big.png" alt="Logo" class="brand" /></a>-->
<div class="panel panel-primary">
<div class="panel-body">
<h4 class="text-center" style="margin-bottom: 25px;">Log in to Admin</h4>
<span style="color:#BE2424;">  <?php
if($_REQUEST['msg']==1){
echo "Incorrect Password";
}
?> </span>
<form action="#" method="post" class="form-horizontal" style="margin-bottom: 0px !important;">
<div class="form-group">
<div class="col-sm-12">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-user"></i></span>
<input type="text" name="usr_email" class="form-control" id="username" placeholder="Username">
</div>
</div>
</div>
<div class="form-group">
<div class="col-sm-12">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-lock"></i></span>
<input type="password" name="pwd" class="form-control" id="password" placeholder="Password">
</div>
</div>
</div>
<div class="panel-footer">
<a href="forgotpassword.php" class="pull-left btn btn-link" style="padding-left:0">Forgot password?</a>
<div class="pull-right">
<input type="submit" name="doLogin" class="btn btn-primary" value="Login" >
</div>
</div>
</form>
</div>
</div>
</div>
</body>
</html>