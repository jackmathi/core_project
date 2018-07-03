<?php
include "dbc.php";
page_protect();
if(!checkAdmin()) {
header("Location: login.php");
exit();
}
error_reporting (0);
if($_POST['Submit'] == 'Save')
{
$autoid= $_POST['autoid'];
$id= $_POST['id'];
$page= $_POST['page'];
$order_1= $_POST['order_1'];
$sql=mysql_query("INSERT INTO `banner`(`id`, `autoid`,`order_1`,`page` )
VALUES (null,'$autoid','$order_1','$page')");
$attch1 = $_FILES['attch1']['name'];
if($attch1 != "")
{
$secondname=rand(0,10000000000);
$uploaddir = "product/banner/";
$upload_pic = $uploaddir.$secondname.$attch1;
copy($_FILES['attch1']['tmp_name'], $upload_pic);
chmod("$uploaddir",0777);
mysql_query("UPDATE `banner` SET `image1` = '$upload_pic' WHERE `autoid` ='$autoid'");
}
header("Location: add_offer.php?msg=1");
}
?>
<?php include'header.php';?>
<div id="page-content">
<div id="wrap">
<div id="page-heading">
<ol class="breadcrumb">
<li><a href="dashboard.php">Dashboard</a></li>
<li>Home </li>
<li class="active">Latest Offers</li>
</ol>
<div class="options">
<div class="btn-toolbar">
<div class="btn-group hidden-xs">
<a href="view_offer.php" class="btn btn-magenta">View Latest Offers</a>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="panel panel-primary">
<div class="panel-heading">
<h4>Add Latest Offers</h4>
<center> <p style="color: #C33;font-size: 12px;background-color: #EAEEE5;width: 141px; font-size: 11px; font-weight: bold;"> <?php
if($_REQUEST['msg']==1){
echo $msg="Insert Successfully !!! ";
} ?>
</p> </center>
</div>
<div class="panel-body">
<form class="form-horizontal"  enctype="multipart/form-data" method="post">
<?php
$max = $db->maxOfAll("id","banner");
$max=$max+1;
$autoid="OF-".$max."";
?>
<input type="hidden" name="autoid" class="form-control" value="<?php echo $autoid; ?>" readonly >
<input type="hidden" name="page" class="form-control" value="offer" readonly >
<div class="form-group">
<label class="col-sm-3 control-label">Image Upload </label>
<div class="col-sm-9">
<div class="fileinput fileinput-new" data-provides="fileinput">
<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
<div>
<span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="attch1"></span>
<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
</div>
</div>
</div>
</div>
<div class="form-group">
<label for="focusedinput" class="col-sm-3 control-label">Order</label>
<div class="col-xs-1">
<input type="text" name="order_1" class="form-control" >
</div>
</div>
<div class="panel-footer">
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
<div class="btn-toolbar">
<input name="Submit" type="submit" id="Submit" value="Save" class="btn-primary btn">
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div> <!-- row -->
</div> <!-- container -->
</div> <!-- wrap -->
</div> <!-- page-content -->
<?php include'footer.php';?>