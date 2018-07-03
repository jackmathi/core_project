<section class="b-desc-section-container b-diagonal-line-bg-light"  style="background-color:#EBEDF1; padding-bottom:10px;">
 <div class="container" style="background-color:#FFF;">
 <div class="col-md-12" >
  <h5 class="f-primary-b f-title-big" style=" background-color:#4496d2; padding:5px; color:#FFF;  text-align:left; border-radius: 10px 10px 0px 0px;">Latest news</h5>
                    <div class="b-blog-listing__block">
                        <div class="b-shortcode-example">
            <div class="row">
                <div class="col-sm-12">
                    <div class="j-accordion b-accordion f-accordion b-accordion--smallindent">
   
  <?php
			$sql12 = "SELECT * FROM news where status='1' order by order_1 ASC";
			$result21 = mysql_query($sql12) or die (mysql_error());
			while($sel21 = mysql_fetch_array($result21))
			{
            ?>
    <h3 class="b-accordion__title f-accordion__title"><?php echo $sel21['title'];?></h3>
   <div class="b-accordion__content">
        <div class="b-accordion__img b-left b-margin-right-standard">
            <img data-retina src="../admin/<?php echo $sel21['image1'];?>" width="50%" alt=""/>
        </div>
        


       <?php echo $sel21['descrip'];?></br>

 <!--<div><span style="background-color:#036; color:#FFF; border-radius: 5px 5px 5px 5px; -moz-border-radius: 5px 5px 5px 5px; -webkit-border-radius: 5px 5px 5px 5px; padding:5px;">
 Posted April 24th, 2016</span></div>-->
 
                                
    </div>
			<?php } ?>
</div>
                </div>
            </div>
        </div>
                    </div>
                  <!--  <div class="b-pagination f-pagination">
    <ul>
        <li><a href="#">First</a></li>
        <li><a class="prev" href="#"><i class="fa fa-angle-left"></i></a></li>
        <li class="is-active-pagination"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a class="next" href="#"><i class="fa fa-angle-right"></i></a></li>
        <li><a href="#">Last</a></li>
    </ul>
</div>-->
                </div>
   </div>
                </section>