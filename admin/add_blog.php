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
$title= $_POST['title'];
$title1= $_POST['title1'];

$descrip= $_POST['descrip'];
$descrip1= $_POST['descrip1'];

$order_1= $_POST['order_1'];
$sql=mysql_query("INSERT INTO `blog`(`id`, `autoid`,`order_1`,`title`,`title1` ,`descrip` ,`descrip1`  )
VALUES (null,'$autoid','$order_1','$title','$title1','$descrip','$descrip1')");

header("Location: add_blog.php?msg=1");
}
?>
<?php include'header.php';?>
<div id="page-content">
<div id="wrap">
<div id="page-heading">
<ol class="breadcrumb">
<li><a href="dashboard.php">Dashboard</a></li>
<li>Home </li>
<li class="active">Our Blog</li>
</ol>
<div class="options">
<div class="btn-toolbar">
<div class="btn-group hidden-xs">
<a href="view_blog.php" class="btn btn-magenta">View Our Blog</a>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="panel panel-primary">
<div class="panel-heading">
<h4>Add Our Blog</h4>
<center> <p style="color: #C33;font-size: 12px;background-color: #EAEEE5;width: 141px; font-size: 11px; font-weight: bold;"> <?php
if($_REQUEST['msg']==1){
echo $msg="Insert Successfully !!! ";
} ?>
</p> </center>
</div>
<div class="panel-body">
<form class="form-horizontal"  enctype="multipart/form-data" method="post">
<?php
$max = $db->maxOfAll("id","blog");
$max=$max+1;
$autoid="BG-".$max."";
?>
<input type="hidden" name="autoid" class="form-control" value="<?php echo $autoid; ?>" readonly >

 <div class="form-group">
						    <label for="focusedinput" class="col-sm-3 control-label">Title</label>
						    <div class="col-xs-6">
						     <input type="text" name="title" class="form-control" value="" Placeholder="Title" > <br>
							 <input type="text" name="title1" class="form-control" value="" Placeholder="Arabic Title" >
						    </div>
						  </div>
						  
						  
						    <div class="form-group">
						    <label for="focusedinput" class="col-sm-3 control-label">Description</label>
						    <div class="col-xs-6">
							<textarea name="descrip" class="ckeditor" rows="3" cols="50" id="descrip"   ></textarea>
						    </div>
						   
						  </div>
						  
						  <div class="form-group">
						    <label for="focusedinput" class="col-sm-3 control-label">Arabic Description</label>
						    <div class="col-xs-6">
							<textarea name="descrip1" class="ckeditor" rows="3" cols="50" id="descrip"   ></textarea>
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