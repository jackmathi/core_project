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
			$address=$_POST['address'];
			$address1=$_POST['address1'];
		    $mail1=$_POST['mail1'];
					
    mysql_query("UPDATE `header` SET `address`='$address',`address1`='$address1', `mail1`='$mail1' WHERE autoid ='$id'");
			
		       
	header('Location:view_footer.php?msg=1');
		}
?>
<?php include'header.php';?>

<div id="page-content">
	<div id="wrap">
		<div id="page-heading">
			<ol class="breadcrumb">
				<li><a href="dashboard.php">Dashboard</a></li>
				<li>Home </li>
				<li class="active">Footer</li>
			</ol>
			  <center> <p style="color:#C33; font-size:12px;"> <?php
  if($_REQUEST['msg']==1){
	   echo $msg="Update Successfully !!! ";
	    } ?>
  </p> </center>

		</div>
		<div class="container">
		
			<div class="row">
				<div class="col-sm-12">
				  <div class="panel panel-primary">
				      <div class="panel-heading">
				          <h4>Edit Footer</h4>
				          
				      </div>
				      <div class="panel-body">
				      	 <?php 
		    $rs_settings = mysql_query("select * from header where autoid='H-2'");?>
          <?php $row_settings = mysql_fetch_array($rs_settings); ?>
						<form class="form-horizontal"  enctype="multipart/form-data" method="post">
						
						  <div class="form-group">
						    <label for="focusedinput" class="col-sm-3 control-label">Email</label>
						    <div class="col-xs-6">
							 <input type="hidden" name="id" class="form-control" value="<?php echo $row_settings['autoid']; ?>" readonly >
						     <input type="text" name="mail1" class="form-control" value="<?php echo $row_settings['mail1']; ?>" >
						    </div>
						   
						  </div>
						  
						    <div class="form-group">
						    <label for="focusedinput" class="col-sm-3 control-label">Address</label>
						    <div class="col-xs-6">
							<textarea name="address" class="ckeditor" rows="3" cols="50" id="descrip"   ><?php echo $row_settings['address']; ?></textarea>
						    </div>
						   
						  </div>
						  
						    <div class="form-group">
						    <label for="focusedinput" class="col-sm-3 control-label">Arabic Address</label>
						    <div class="col-xs-6">
							<textarea name="address1" class="ckeditor" rows="3" cols="50" id="descrip"   ><?php echo $row_settings['address1']; ?></textarea>
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