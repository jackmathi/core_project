  	<?php
	  
	         $autoid=$_GET['autoid'];
			$sql12 = "SELECT * FROM blog where autoid='$autoid'";
			$result21 = mysql_query($sql12) or die (mysql_error());
			$sel21 = mysql_fetch_array($result21);
            ?>
  
<div class="b-breadcrumbs f-breadcrumbs">
    <div class="container">
        <ul>
            <li><a href="../"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="../blog/"><i class="fa fa-angle-right"></i><span> All Blog </span></a></li>
            <li><i class="fa fa-angle-right"></i><span> <?php echo $sel21['title1'];?></span></li>
        </ul>
    </div>
</div>
  <div class="j-menu-container"></div>
  <section class="b-desc-section-container b-diagonal-line-bg-light"  style="background-color:#EBEDF1; padding-bottom:10px;">
   
   
  <div class="container" style="background-color:#FFF;">
        <div class="row" style="padding:10px;">
                    <div class="col-md-8 col-xs-12">
                        <div class="b-portfolio_info">
                            <div class="b-portfolio_info_title f-primary-b f-portfolio_info_title">
							<a href="#"><?php echo $sel21['title1'];?></a></div>
                            <div class="b-portfolio_info_description f-portfolio_info_description">
                               <div id="tabs-1">
    </br>
<?php echo $sel21['descrip1'];?>
    </div>
                               <!---------------------------------------------------------------------------------->
                            </div>
                        </div>
                    </div>
             
                </div>
    </div>
  </section>