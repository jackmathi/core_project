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
					 $heading= $_POST['heading'];
					  $heading1= $_POST['heading1'];
				 $slug2 = preg_replace('~[^\\pL\d]+~u', '-',$heading);
			$slug = trim($slug2, '-');
				 $page= $_POST['page'];
				   
				
				
				 $sql=mysql_query("INSERT INTO `title`(`id`, `autoid`,`heading`,`heading1`,`page`,`slug` ) 
				 VALUES (null,'$autoid','$heading','$heading1','$page','$slug')");
				

				
header("Location: add_title.php?msg=1");
 
	}
	
?>
<?php include'header.php';?>

<div id="page-content">
	<div id="wrap">
		<div id="page-heading">
			<ol class="breadcrumb">
				<li><a href="dashboard.php">Dashboard</a></li>
				<li>Home </li>
				<li class="active">Menu</li>
			</ol>
			  

			<div class="options">
                <div class="btn-toolbar">
                    <div class="btn-group hidden-xs">
                        <a href="view_title.php" class="btn btn-magenta">View  Menu</a>
                       
                    </div>
                    
                </div>
            </div>
		</div>
		<div class="container">
		
			<div class="row">
				<div class="col-sm-12">
				  <div class="panel panel-primary">
				      <div class="panel-heading">
				          <h4>Add  Menu</h4>
				          <center> <p style="color: #C33;font-size: 12px;background-color: #EAEEE5;width: 141px; font-size: 11px; font-weight: bold;"> <?php
  if($_REQUEST['msg']==1){
	   echo $msg="Insert Successfully !!! ";
	    } ?>
  </p> </center>
				      </div>
				      <div class="panel-body">
				      	
						<form class="form-horizontal"  enctype="multipart/form-data" method="post">
						<?php
					  $max = $db->maxOfAll("id","title");
					  $max=$max+1;
					  $autoid="TT-".$max."";
					  ?>
					  
					  
					  <div class="form-group">
						    <label for="focusedinput" class="col-sm-3 control-label">Main Menu</label>
						    <div class="col-xs-6">
							 <input type="hidden" name="autoid" class="form-control" value="<?php echo $autoid; ?>" readonly >
							<select class="form-control" data-placeholder="Choose a Category" name="page" readonly  tabindex="1">
                                    <option value="Service">Service</option>
                                 </select>
						    </div>
						   
						  </div>
						  <div class="form-group">
						    <label for="focusedinput" class="col-sm-3 control-label">Sub Menu</label>
						    <div class="col-xs-6">
						     <input type="text" name="heading" class="form-control" placeholder="English Menu"><br> 
							 <input type="text" name="heading1" class="form-control" placeholder="Arabic Menu">
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