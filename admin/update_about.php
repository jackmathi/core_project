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
			 $title= $_POST['title'];
				 $descrip= $_POST['descrip'];
				 $title1= $_POST['title1'];
				 $descrip1= $_POST['descrip1'];
			
					
    mysql_query("UPDATE `contact` SET `title`='$title',`title1`='$title1',`descrip`='$descrip',`descrip1`='$descrip1'  WHERE autoid ='$id'");

	header('Location:view_about.php?msg=1');
		}
?>
<?php include'header.php';?>

<div id="page-content">
	<div id="wrap">
		<div id="page-heading">
			<ol class="breadcrumb">
				<li><a href="dashboard.php">Dashboard</a></li>
				<li>Home </li>
				<li class="active">About Us</li>
			</ol>
			  <center> <p style="color:#C33; font-size:12px;"> <?php
  if($_REQUEST['msg']==1){
	   echo $msg="Insert Successfully !!! ";
	    } ?>
  </p> </center>
			<div class="options">
                <div class="btn-toolbar">
                    <div class="btn-group hidden-xs">
                        <a href="view_about.php" class="btn btn-magenta">View About Us</a>
                    </div>
                </div>
            </div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
				  <div class="panel panel-primary">
				      <div class="panel-heading">
				          <h4>Edit About Us</h4>
				      </div>
				      <div class="panel-body">
				      	 <?php 
		  $autoid = $_GET['autoid'];
		    $rs_settings = mysql_query("select * from contact where autoid='$autoid'");?>
          <?php $row_settings = mysql_fetch_array($rs_settings); ?>
						<form class="form-horizontal"  enctype="multipart/form-data" method="post">
						
						  <div class="form-group">
						    <label for="focusedinput" class="col-sm-3 control-label"> Title</label>
						    <div class="col-xs-6">
							 <input type="hidden" name="id" class="form-control" value="<?php echo $row_settings['autoid']; ?>" readonly >
						     <input type="text" name="title" class="form-control" value="<?php echo $row_settings['title']; ?>" > 
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="focusedinput" class="col-sm-3 control-label">Arabic Title</label>
						    <div class="col-xs-6">
							
							 <input type="text" name="title1" class="form-control" value="<?php echo $row_settings['title1']; ?>">
						    </div>
						   
						  </div>
						  <div class="form-group">
						    <label for="disabledinput" class="col-sm-3 control-label">Description</label>
						    <div class="col-xs-6">
							<textarea name="descrip" class="ckeditor" rows="3" cols="50" id="descrip"   ><?php echo $row_settings['descrip']; ?></textarea> 
						    </div>
						  </div>
						    <div class="form-group">
						    <label for="disabledinput" class="col-sm-3 control-label">Arbic Description</label>
						    <div class="col-xs-6">
							
							
							<textarea name="descrip1" class="ckeditor" rows="3" cols="50" id="descrip"   ><?php echo $row_settings['descrip1']; ?></textarea>
						      
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