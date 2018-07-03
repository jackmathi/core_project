<?php
include "dbc.php"; 
page_protect();
if(!checkAdmin()) {
header("Location: login.php");
exit();
}
error_reporting (0);
  
  if($_GET['status']=="stus"){
	
	  	  $id = $_REQUEST['id'];
	  	  $status = $_REQUEST['activeid'];
		  if($status==0){
 	$update_status = mysql_query("update in_banner set status=1 where autoid='$id' and status='$status'");
		  }
		  else
		  {
 	$update_status = mysql_query("update in_banner set status=0 where autoid='$id' and status='$status'");
		  }
				}
		  
		 $id=$_GET['id'];
if($_GET['delete'] == 'd') {
mysql_query("delete from in_banner where id='$id'");
}

?>
<?php include'header.php';?>
     
<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="dashboard.php">Dashboard</a></li>
                <li>Home</li>
                <li class="active">Banner</li>
            </ol>

            <div class="options">
                <div class="btn-toolbar">
                  <!--  <div class="btn-group hidden-xs">
                       <a href="add_banner.php" class="btn btn-magenta">Add Banner</a>
                       
                    </div>-->
                    <!--<a href="#" class="btn btn-default"><i class="fa fa-cog"></i></a>-->
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
              <div class="col-md-12">
                    <div class="panel panel-sky">
                        <div class="panel-heading">
                            <h4>View Banner</h4>
							<center> <p style="color: #C33;font-size: 12px;background-color: #EAEEE5;width: 141px; font-size: 11px; font-weight: bold;"> <?php
  if($_REQUEST['msg']==1){
	   echo $msg="Update Successfully !!! ";
	    } ?>
  </p> </center>
                            <div class="options">   
                                <a href="javascript:;"><i class="fa fa-cog"></i></a>
                                <a href="javascript:;"><i class="fa fa-wrench"></i></a>
                                <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                            </div>
                        </div>
                        <div class="panel-body collapse in">
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                                <thead>
                                    <tr>
									<th> ID</th>
                                        <th> Title</th>
                                         <th>Bannner</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								
								    <?php

  $sql2 = "SELECT * FROM in_banner where title !='logo' order by id DESC";
  $result3 = mysql_query($sql2) or die (mysql_error());
  while($sel = mysql_fetch_array($result3))

  {
	?>
         
                                    <tr class="odd gradeX">
									<td><?php echo $sel['autoid'];?></td>
                                        <td><?php echo $sel['title'];?>
										<br><?php echo $sel['title1'];?>
										</td>
                                       
                                           <td class="center"><img src="<?php echo $sel['image1']; ?>" alt="profile picture" width="175" height="100" align="middle" class="shadow" /></td>
                                           
			
			
			<td>
					
			<a href="update_inbanner.php?autoid=<?php echo $sel['autoid'];?>" class="btn btn-orange">Edit</a>
			</td>
                                  </td>
										   
										   
  <?php } ?>										   
                                       </tr>
                                       
                                      
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container -->
    </div> <!--wrap -->
</div> <!-- page-content -->

    <?php include'footer.php';?>