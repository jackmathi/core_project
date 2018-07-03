  
 	<?php
	  
	         $slug=$_GET['slug'];
			$sql12 = "SELECT * FROM service where slug='$slug'";
			$result21 = mysql_query($sql12) or die (mysql_error());
			$sel21 = mysql_fetch_array($result21);
            ?>
  <section class="b-desc-section-container b-diagonal-line-bg-light"  style="background-color:#EBEDF1; padding-bottom:10px;">
  <div class="container" style="background-color:#FFF;">
        <div class="row" style="padding:10px;">
                    <div class="col-md-4 col-xs-12">
                        <div class="b-portfolio_image">
                            <div class="b-portfolio_image_box view view-sixth">
    <img data-retina="" src="../../admin/<?php echo $sel21['image1'];?>" alt="">
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
        </div>
    </div>
</div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="b-portfolio_info">
                            <div class="b-portfolio_info_title f-primary-b f-portfolio_info_title"><a href="#"><?php echo $sel21['heading1'];?> </a></div>
                            <div class="b-portfolio_info_description f-portfolio_info_description">
                               <div id="tabs-1">
    </br><?php echo $sel21['descrip1'];?><br /> 
    </div>
                               <!---------------------------------------------------------------------------------->
                            </div>
                        </div>
                    </div>
                </div>
    </div>
  </section>