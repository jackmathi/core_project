<section class="b-desc-section-container b-diagonal-line-bg-light"  style="background-color:#EBEDF1; padding-bottom:10px;">
  <div class="container" style="background-color:#FFF;" >
        <div class="row">
            <div class="row j-masonry b-col-default-indent" >
            <div class="masonry-gridSizer col-xs-12 col-sm-6 col-md-3"></div>
           <?php
			$sql214= "SELECT * FROM service where status='1' order by order_1='ASC'";
			$result314 = mysql_query($sql214) or die (mysql_error());
			while($sel24 = mysql_fetch_array($result314))
			{
            ?>	
            <div class="j-masonry-item col-xs-12 col-sm-6 col-md-3">
                <div class="b-blog-preview">
    <div class="b-blog-preview__img view view-sixth">
    <img data-retina="" src="../../admin/<?php echo $sel24['image1'];?>" alt="">
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
           <!-- <div class="b-item-hover-action__inner-btn_group">
                <a href="services4.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
            </div>-->
        </div>
    </div>
</div>
    <div class="b-blog-preview__content b-diagonal-line-bg-light">
        <div class="b-blog-preview__content-padding_box">
            <p class="f-blog-preview__content-title f-primary-b"><a href="../service1?slug=<?php echo $sel24['slug'];?>"><?php echo $sel24['heading1'];?></a></p>
           <?php echo $sel24['descrip1'];?>
        </div>
        <div class="b-footer-mini b-alternative-bg">
            <a class="f-footer-mini__link f-more f-primary-b" href="../service1?slug=<?php echo $sel24['slug'];?>"><i class="fa fa-angle-double-left"></i>  اقرأ المزيد</a>
        </div>
    </div>
</div>
            </div>
       <?php } ?>
        </div>
        </div>
    </div>
  </section>