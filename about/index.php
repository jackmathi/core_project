<?php include'../admin/dbc.php';?>
<?php include'../inc/header.php';?>
    <div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
	 <?php
			$sql21 = "SELECT * FROM in_banner where autoid='IN-About'";
			$result31 = mysql_query($sql21) or die (mysql_error());
			$sel2 = mysql_fetch_array($result31);
            ?>	
	
  <div class="b-inner-page-header__content" style="background-image:url(../admin/<?php echo $sel2['image1'];?>);  background-position:left; background-repeat:no-repeat; background-color:#FFF;">
   <?php include'index_view.php';?>
</div>
<?php include'../inc/footer.php';?>