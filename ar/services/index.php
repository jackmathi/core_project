<?php include'../../admin/dbc.php';
error_reporting(0);?>
<?php include'../inc/header.php';?>
  <?php
			$sql21 = "SELECT * FROM in_banner where autoid='IN-Service'";
			$result31 = mysql_query($sql21) or die (mysql_error());
			$sel2 = mysql_fetch_array($result31);
            ?>	
    <div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
  <div class="b-inner-page-header__content" style="background-image:url(../../admin/<?php echo $sel2['image1'];?>);  background-position:left; background-repeat:no-repeat; background-color:#FFF;">
    <div class="container">
      <h1 class="f-primary-l c-default"><span style="color:#333; border-right:3px solid #09F;"> <?php echo $sel2['title1'];?></span></h1>
    </div>
  </div>
</div>
<div class="b-breadcrumbs f-breadcrumbs">
    <div class="container">
        <ul>
            <li><a href="../"><i class="fa fa-home"></i>الرئيسية</a></li>
            <li><i class="fa fa-angle-left"></i><span> أقسام المركز </span></li>
        </ul>
    </div>
</div>
  <div class="j-menu-container"></div>
  <?php include'index_view.php';?>
  <?php include'../inc/footer.php';?>