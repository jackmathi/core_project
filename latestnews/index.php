<?php include'../admin/dbc.php';
error_reporting(0);?>
<?php include'../inc/header.php';?>

<style>
 .add-img{
	   width: 100%;
      margin: auto;
  }
</style>

    <div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
	
	<?php
			$sql21 = "SELECT * FROM in_banner where autoid='IN-news'";
			$result31 = mysql_query($sql21) or die (mysql_error());
			$sel2 = mysql_fetch_array($result31);
            ?>	
  <div class="b-inner-page-header__content" style="background-image:url(../admin/<?php echo $sel2['image1'];?>);  background-position:left; background-repeat:no-repeat; background-color:#FFF;">
    <div class="container">
      <h1 class="f-primary-l c-default"><span style="color:#333; border-left:3px solid #09F; padding-left:15px;"> <?php echo $sel2['title'];?> </span></h1>
    </div>
  </div>
</div>
<div class="b-breadcrumbs f-breadcrumbs">
    <div class="container">
        <ul>
            <li><a href="../"><i class="fa fa-home"></i>Home</a></li>
            <li><i class="fa fa-angle-right"></i><span> Latest news </span></li>
        </ul>
    </div>
</div>
  <div class="j-menu-container"></div>
  <div class="l-main-container">
<?php include'index_view.php';?>
</div>
<?php include'../inc/footer.php';?>