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
 	$update_status = mysql_query("update news set status=1 where autoid='$id' and status='$status'");
		  }
		  else
		  {
 	$update_status = mysql_query("update news set status=0 where autoid='$id' and status='$status'");
		  }
				}
		  
		 $id=$_GET['id'];
if($_GET['delete'] == 'd') {
mysql_query("delete from news where id='$id'");
}

?>
<?php include'header.php';?>
     
<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="dashboard.php">Dashboard</a></li>
                <li>Home</li>
                <li class="active">Latest News</li>
            </ol>

            <div class="options">
                <div class="btn-toolbar">
                    <div class="btn-group hidden-xs">
                       <a href="add_news.php" class="btn btn-magenta">Add Latest News</a>
                       
                    </div>
                    <!--<a href="#" class="btn btn-default"><i class="fa fa-cog"></i></a>-->
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
              <div class="col-md-12">
                    <div class="panel panel-sky">
                        <div class="panel-heading">
                            <h4>View Latest News</h4>
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
                                        <th> Title</th>
                                        <th>Title (Arabic)</th>
                                        <th>Description</th>
										 <th>Image</th>
										 <th>Order</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								
								    <?php

  $sql2 = "SELECT * FROM news order by id DESC";
  $result3 = mysql_query($sql2) or die (mysql_error());
  while($sel = mysql_fetch_array($result3))

  {
	?>
         
                                    <tr class="odd gradeX">
                                        <td><?php echo $sel['title'];?>  </td>
										<td><?php echo $sel['title1'];?> </td>
                                           <td><?php echo $sel['descrip'];?> </br><?php echo $sel['descrip1'];?></td>
                                           <td class="center"><img src="<?php echo $sel['image1']; ?>" alt="profile picture" width="175" height="100" align="middle" class="shadow" /></td>
                                           <td class="center"><?php echo $sel['order_1'];?></td>
										   <td class="center"><a href="view_news.php?status=stus&id=<?php echo $sel['autoid'];?>&activeid=<?php echo $sel['status'];?>" class="buttn">
            <button class="<?php if($sel['status']==1) { echo "btn btn-green btn-sm";} else {  echo "btn btn-danger btn-sm";}?>">
			<?php if($sel['status']==1) { echo "Active";} else {  echo "Inactive";}?></button></a></td>
			
			
			<td>
					
			<a href="update_news.php?autoid=<?php echo $sel['autoid'];?>" class="btn btn-orange">Edit</a>
			<a href="view_news.php?delete=d&id=<?php echo $sel['id']; ?>"onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-inverse">Delete</a></td>
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