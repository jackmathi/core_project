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
			 $title1= $_POST['title1'];
    mysql_query("UPDATE `in_banner` SET `title`='$title',`title1`='$title1'  WHERE autoid ='$id'");
			
		        $attch1 = $_FILES['attch1']['name'];	
				if($attch1 != "")
				{
				$secondname=rand(0,10000000000);
				
			    $uploaddir = "product/banner/";
				
			    $upload_pic = $uploaddir.$secondname.$attch1;
							
				copy($_FILES['attch1']['tmp_name'], $upload_pic);
				
				chmod("$upload_pic",0777);
				
				mysql_query("UPDATE `in_banner` SET `image1` = '$upload_pic' WHERE `autoid` ='$id'");
				}
				
	header('Location:view_in.php?msg=1');
		}
?>
<?php include'header.php';?>

<div id="page-content">
	<div id="wrap">
		<div id="page-heading">
			<ol class="breadcrumb">
				<li><a href="dashboard.php">Dashboard</a></li>
				<li>Home </li>
				<li class="active">Banner</li>
			</ol>
			  <center> <p style="color:#C33; font-size:12px;"> <?php
  if($_REQUEST['msg']==1){
	   echo $msg="Insert Successfully !!! ";
	    } ?>
  </p> </center>

			<div class="options">
                <div class="btn-toolbar">
                    <div class="btn-group hidden-xs">
                        <a href="view_in.php" class="btn btn-magenta">View Banner</a>
                       
                    </div>
                    
                </div>
            </div>
		</div>
		<div class="container">
		
			<div class="row">
				<div class="col-sm-12">
				  <div class="panel panel-primary">
				      <div class="panel-heading">
				          <h4>Edit Banner</h4>
				          
				      </div>
				      <div class="panel-body">
				      	 <?php 
		  $autoid = $_GET['autoid'];
		    $rs_settings = mysql_query("select * from in_banner where autoid='$autoid'");?>
          <?php $row_settings = mysql_fetch_array($rs_settings); ?>
						<form class="form-horizontal"  enctype="multipart/form-data" method="post">
						
						  <div class="form-group">
						    <label for="focusedinput" class="col-sm-3 control-label">Title</label>
						    <div class="col-xs-2">
							 <input type="hidden" name="id" class="form-control" value="<?php echo $row_settings['autoid']; ?>" readonly >
						     <input type="text" name="title" class="form-control" value="<?php echo $row_settings['title']; ?>" >
						    </div>
						   
						  </div>
						  
						   <div class="form-group">
						    <label for="focusedinput" class="col-sm-3 control-label">Arabic Title</label>
						    <div class="col-xs-2">
						     <input type="text" name="title1" class="form-control" value="<?php echo $row_settings['title1']; ?>" >
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