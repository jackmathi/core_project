<?php include'admin/dbc.php';
error_reporting(0);?>
<?php include'header.php';?>
  <div class="j-menu-container"></div>
  <div class="l-main-container">
    <?php include'slide.php';?>
 <?php include'index_view.php';?>
<section class="b-desc-section-container b-diagonal-line-bg-light"  style="background-color:#EBEDF1; padding-bottom:10px;">
 <div class="container" style="background-color:#FFF;">
<div class="col-md-5">
<h5 class="f-primary-b f-title-big" style="background-color:#FFF; padding:0px; text-align:left; border-radius: 10px 10px 0px 0px; -moz-border-radius: 10px 10px 0px 0px; -webkit-border-radius: 10px 10px 0px 0px; border-bottom: 2px solid #006ead; color:#999;">News updates</h5>
<div id="myCarousel" class="carousel slide " data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <!--<li data-target="#myCarousel" data-slide-to="3"></li>-->
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
	 <?php
			$sql188= "SELECT * FROM news where status='1' order by order_1 ASC";
			$result78 = mysql_query($sql188) or die (mysql_error());
			$row3 = mysql_fetch_array($result78);
		
            ?>
      <div class="item active">
        <img src="admin/<?php echo $row3['image1'];?>" width="458" height="305" alt="Chania">
          <br>
		   
        <div class="carousel-caption">
          <h5><?php echo $row3['descrip'];?></h5>
          <p><a href="../latestnews">Read more ...</a></p>
        </div>
      </div>
    <?php
			$sql18 = "SELECT * FROM news where status='1' order by order_1 DESC limit 3";
			$result7 = mysql_query($sql18) or die (mysql_error());
			while($row = mysql_fetch_array($result7))
			{
            ?>
      <div class="item">
        <img src="admin/<?php echo $row['image1'];?>" width="458" height="305" alt="Flower">
         <br>
        <div class="carousel-caption">
         <h5><?php echo $row['descrip'];?></h5>
          <p><a href="../latestnews">Read more ...</a></p>
        </div>
      </div>
			<?php } ?>
    </div>
  </div>
</div>
<?php include'offer.php';?>


 <div class="b-some-examples__item f-some-examples__item b-radius-null">
 <?php
			$sql15 = "SELECT * FROM header where autoid='H-3'";
			$result26 = mysql_query($sql15) or die (mysql_error());
		$sel7 = mysql_fetch_array($result26);
			
            ?>
 
  <h5 class="f-primary-b f-title-big"  style="background-color:#fff; padding:0px; text-align:left; color:#666;  border-radius: 10px 10px 0px 0px ;
-moz-border-radius: 10px 10px 0px 0px ;
-webkit-border-radius: 10px 10px 0px 0px ; border-bottom: 2px solid #006ead; color:#999;">Working hours</h5>
<div class="b-some-examples__item_img b-radius-null b-item-hover-action-parent" style="color:#666; padding:5px; background-color:#FFF;">
  <p style="color:#000; font-size:16px;"> On Saturday <a href="#"></a></p>
             <p style="text-align:left; direction:ltr;"><span class="glyphicon glyphicon-time"></span>
			 From <span class="santime"> <?php echo $sel7['title'];?></span> </p>
			 
            <p style="color:#000; font-size:16px; line-height:normal">Sunday to Thursday</a></p>
          <p style="text-align:left; direction:ltr;"><span class="glyphicon glyphicon-time"></span>
		  Morning<span class="santime"> <?php echo $sel7['title1'];?> </p>
             <p style="text-align:left; direction:ltr;"> Eve<span class="santime">  <?php echo $sel7['title11'];?></span></p>
			 
   <p style="color:#000; font-size:16px;">On Friday </p>
             <p style="text-align:left; direction:ltr;"><span class="glyphicon glyphicon-time"></span>
			 
			 Eve <span class="santime">  <?php echo $sel7['title2'];?></span></p>
              <!--<p style="text-align:right; direction:rtl; font-size:14px;">call us</p>-->
               <img data-retina src="admin/<?php echo $sel7['image1'];?>">
            </div>
            </div>
<!-- <div class="col-sm-12">
             <img data-retina src="img/call.jpg">
           </div>-->
   </div>
        </div>
                </section>
<div class="container" style="padding-top:50px;">
 <div class="row">
        <?php include'blog.php';?>
        <div class="col-sm-4 b-categories-filter">
            <h4 class="f-primary-b b-h4-special f-h4-special c-primary" style="background-color:#3c5a99; color:#FFF; padding:10px;  border-radius: 10px 10px 0px 0px ;
-moz-border-radius: 10px 10px 0px 0px ;
-webkit-border-radius: 10px 10px 0px 0px ;">Our Facebook</h4>
             <div style="background-color:#CCC;"> <fb:like-box href="https://www.facebook.com/binrushdDental" width="370" colorscheme="light" show_faces="false" header="false" stream="true" show_border="false"></fb:like-box></div>
            </div>
        <div class="col-sm-4 b-categories-filter">
           <h4 class="f-primary-b b-h4-special f-h4-special c-primary" style="background-color:#32a7df; color:#FFF; padding:10px;  border-radius: 10px 10px 0px 0px ;
-moz-border-radius: 10px 10px 0px 0px ;
-webkit-border-radius: 10px 10px 0px 0px ;">Our Twitter</h4>
            <div style="background-color:#CCC;"><a class="twitter-timeline" href="https://twitter.com/binrushdDental" data-widget-id="547644907888713730">Tweets by @binrushdDental</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></div>
            </div>
            </div>
</div>
</div>
<?php include'footer.php';?>