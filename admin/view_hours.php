<?php
include "dbc.php"; 
page_protect();
if(!checkAdmin()) {
header("Location: login.php");
exit();
}
error_reporting (0);
if($_POST['Submit'] == 'Update') 	
            {
			$id=$_POST['id'];
			$title=$_POST['title'];
			$title1=$_POST['title1'];
			$title11=$_POST['title11'];
			$title2=$_POST['title2'];
    mysql_query("UPDATE `header` SET `title`='$title',`title1`='$title1',`title11`='$title11',`title2`='$title2'  WHERE autoid ='$id'");
	
	       $attch1 = $_FILES['attch1']['name'];	
				if($attch1 != "")
				{
				$secondname=rand(0,10000000000);
			    $uploaddir = "product/banner/";
			    $upload_pic = $uploaddir.$secondname.$attch1;
				copy($_FILES['attch1']['tmp_name'], $upload_pic);
				chmod("$upload_pic",0777);
				mysql_query("UPDATE `header` SET `image1` = '$upload_pic' WHERE `autoid` ='$id'");
				}
		       
	header('Location:view_hours.php?msg=1');
		}
?>
<?php include'header.php';?>
<div id="page-content">
	<div id="wrap">
		<div id="page-heading">
			<ol class="breadcrumb">
				<li><a href="dashboard.php">Dashboard</a></li>
				<li>Home </li>
				<li class="active">Working Hours</li>
			</ol>
			  <center> <p style="color:#C33; font-size:12px;"> <?php
  if($_REQUEST['msg']==1){
	   echo $msg="Insert Successfully !!! ";
	    } ?>
  </p> </center>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
				  <div class="panel panel-primary">
				      <div class="panel-heading">
				          <h4>Edit Working Hours</h4>
				      </div>
				      <div class="panel-body">
				      	 <?php 
		    $rs_settings = mysql_query("select * from header where autoid='H-3'");?>
          <?php $row_settings = mysql_fetch_array($rs_settings); ?>
						<form class="form-horizontal"  enctype="multipart/form-data" method="post">
						  <div class="form-group">
						    <label for="focusedinput" class="col-sm-3 control-label">On Saturday</label>
						    <div class="col-xs-6">
							 <input type="hidden" name="id" class="form-control" value="<?php echo $row_settings['autoid']; ?>" readonly >
						     <input type="text" name="title" class="form-control" value="<?php echo $row_settings['title']; ?>" >
						    </div>
						  </div>
						    <div class="form-group">
						    <label for="focusedinput" class="col-sm-3 control-label">Sunday to Thursday</label>
						    <div class="col-xs-6">
						     <input type="text" name="title1" class="form-control" value="<?php echo $row_settings['title1']; ?>" > <br>
							 <input type="text" name="title11" class="form-control" value="<?php echo $row_settings['title11']; ?>" >
						    </div>
						  </div>
						      <div class="form-group">
						    <label for="focusedinput" class="col-sm-3 control-label">On Friday</label>
						    <div class="col-xs-6">
						     <input type="text" name="title2" class="form-control" value="<?php echo $row_settings['title2']; ?>" >
						    </div>
						  </div>
						  
						  <div class="form-group">
                <label class="col-sm-3 control-label">Image Upload </label>
                <div class="col-sm-9">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"><img src="<?php echo $row_settings['image1']; ?>"></div>
                        <div>
                          <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="attch1"></span>
                          <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>
                </div>
            </div>
						    <div class="panel-footer">
				      	<div class="row">
				      		<div class="col-sm-6 col-sm-offset-3">
				      			<div class="btn-toolbar">
								<input name="Submit" type="submit" id="Submit" value="Update" class="btn-primary btn">
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