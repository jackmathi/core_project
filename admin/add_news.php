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
				 $descrip= $_POST['descrip'];
				 $title1= $_POST['title1'];
				 $descrip1= $_POST['descrip1'];
				 $order_1= $_POST['order_1'];
			$slug21 = preg_replace('~[^\\pL\d]+~u', '-',$title);
			$slug = trim($slug21, '-');
				  
				 
				
				 $sql=mysql_query("INSERT INTO `news`(`id`, `autoid`,`title`,`descrip`,`title1`,`descrip1`,`order_1`,`slug` ) 
				 VALUES (null,'$autoid','$title','$descrip','$title1','$descrip1','$order_1','$slug')");
				
  $attch1 = $_FILES['attch1']['name'];	
				if($attch1 != "")
				{
				$secondname=rand(0,10000000000);
				
			    $uploaddir = "product/in/";
				
			    $upload_pic = $uploaddir.$secondname.$attch1;
							
				copy($_FILES['attch1']['tmp_name'], $upload_pic);
				
				chmod("$uploaddir",0777);
				
				
				mysql_query("UPDATE `news` SET `image1` = '$upload_pic' WHERE `autoid` ='$autoid'");
				}
				
header("Location: add_news.php?msg=1");
 
	}
	
?>
<?php include'header.php';?>

<div id="page-content">
	<div id="wrap">
		<div id="page-heading">
			<ol class="breadcrumb">
				<li><a href="dashboard.php">Dashboard</a></li>
				<li>Home </li>
				<li class="active">Latest News</li>
			</ol>
			 

			<div class="options">
                <div class="btn-toolbar">
                    <div class="btn-group hidden-xs">
                        <a href="view_news.php" class="btn btn-magenta">View Latest News</a>
                       
                    </div>
                    
                </div>
            </div>
		</div>
		<div class="container">
		
			<div class="row">
				<div class="col-sm-12">
				  <div class="panel panel-primary">
				      <div class="panel-heading">
				          <h4>Add Latest News</h4>
				           <center> <p style="color: #C33;font-size: 12px;background-color: #EAEEE5;width: 141px; font-size: 11px; font-weight: bold;"> <?php
  if($_REQUEST['msg']==1){
	   echo $msg="Insert Successfully !!! ";
	    } ?>
  </p> </center>
				      </div>
				      <div class="panel-body">
				      	
						<form class="form-horizontal"  enctype="multipart/form-data" method="post">
						<?php
					  $max = $db->maxOfAll("id","news");
					  $max=$max+1;
					  $autoid="NW-".$max."";
					  ?>
					  
					  	
						  <div class="form-group">
						    <label for="focusedinput" class="col-sm-3 control-label"> Title</label>
						    <div class="col-xs-6">
							 <input type="hidden" name="autoid" class="form-control" value="<?php echo $autoid; ?>" readonly >
						     <input type="text" name="title" class="form-control" placeholder="Title"><br> 
							 <input type="text" name="title1" class="form-control" placeholder="Arabic Title">
						    </div>
						   
						  </div>
					
						  
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
						    <label for="disabledinput" class="col-sm-3 control-label">Description</label>
						    <div class="col-xs-6">
							<textarea name="descrip" class="ckeditor" rows="3" cols="50" id="descrip"   ></textarea>
						
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="disabledinput" class="col-sm-3 control-label">Arbic Description</label>
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