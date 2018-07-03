 <div class="container">
      <h1 class="f-primary-l c-default"><span style="color:#333; border-left:3px solid #09F; padding-left:15px;"> <?php echo $sel2['title'];?> </span></h1>
    </div>
  </div>
</div>
<div class="b-breadcrumbs f-breadcrumbs">
    <div class="container">
        <ul>
            <li><a href="../"><i class="fa fa-home"></i>Home</a></li>
            <li><i class="fa fa-angle-right"></i><span> About us </span></li>
        </ul>
    </div>
</div>
  <div class="j-menu-container"></div>
  <div class="l-main-container">
<section class="b-desc-section-container b-diagonal-line-bg-light"  style="background-color:#EBEDF1; padding-bottom:10px;">
 <div class="container">
 <div class="b-some-examples__item f-some-examples__item b-radius-null">
<div class="container" style="background-color:#fff;">
        <div class="row">
		<?php
			$sql212 = "SELECT * FROM header where autoid='H-4'";
			$result312 = mysql_query($sql212) or die (mysql_error());
			$sel22 = mysql_fetch_array($result312);
            ?>
            <div class="b-section-info__text f-section-info__text col-sm-6 col-xs-12">
			
                <div class="b-ol-list-text-container">
                    <div class="b-ol-list-text__item">
                        <div class="b-ol-list-text__item_info">
                        <h5 class="f-primary-b f-title-big" style="background-color:#E6E6E6; padding:5px; text-align:left; border-radius: 10px 10px 0px 0px; -moz-border-radius: 10px 10px 0px 0px; -webkit-border-radius: 10px 10px 0px 0px; border-bottom: 2px solid #E4E4E4; color:#666;">About medical dental consultative status</h5>
                    <?php echo $sel22['t_descrip'];?>
                      </div>
                    </div>
                    <div class="b-ol-list-text__item">
                        <div class="b-ol-list-text__item_info">
                        <h5 class="f-primary-b f-title-big" style="background-color:#E6E6E6; padding:5px; text-align:left; border-radius: 10px 10px 0px 0px; -moz-border-radius: 10px 10px 0px 0px; -webkit-border-radius: 10px 10px 0px 0px; border-bottom: 2px solid #E4E4E4; color:#666;">Our mission and our goals</h5>
                            <?php echo $sel22['d_descrip'];?>
                                       </div>
                    </div>
                </div>
            </div>
          <div class="col-sm-6 col-xs-12"  style="padding-top:53px;">
             <div class="b-video-player b-video-payer-size-secondary">
              <video id="MY_VIDEO_1" class="b-video-default video-js vjs-default-skin" controls
                     preload="auto" width="1000" height="600" data-setup="{}">
                  <source src="video/Comp 1.mp4" type='video/mp4' />
                 <!-- <source src="video/oceans-clip.webm" type='video/webm' />
                  <source src="video/oceans-clip.ogv" type='video/ogg' />-->
              </video>
          </div>
          <div class="col-md-12" style="border-bottom: 2px solid #E4E4E4;">
                <h3 class="f-primary-b" style="background-color:#4496d2; padding:5px; text-align:left; color:#FFF;  border-radius: 10px 10px 0px 0px ;
-moz-border-radius: 10px 10px 0px 0px ;
-webkit-border-radius: 10px 10px 0px 0px ; border-bottom: 2px solid #E4E4E4;">Services</h3>
                <ul class="c-primary c--inherit b-list-markers f-list-markers b-list-markers--without-leftindent f-list-markers--medium c-primary--all f-color-primary b-list-markers-2col f-list-markers-2col">
               <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> علاج العصب </a></li>
               <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> تقويم الاسنان </a></li>
               <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> تنظيف الاسنان </a></li>
               <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> جراحه الاسنان </a></li>
               <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> حشوات الاسنان </a></li>
               <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> تعويضات الاسنان </a></li>
               <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> طب اسنان الاطفال </a></li>
               <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> زراعه الاسنان </a></li>
               </ul>
            </div>
              <!--  <img data-retina data-animate="fadeInLeft" class="img-appearance-item-1" src="img/animation-data/imac.png" alt="imac"/>
                <img data-retina data-animate="fadeInLeft" class="img-appearance-item-2" src="img/animation-data/mac-book.png" alt="mac-book"/>
                <img data-retina data-animate="fadeInLeft" class="img-appearance-item-5" src="img/animation-data/iphone.png" alt="iphone"/>-->
            </div>  
        </div>
    </div>
            </div>
   </div>
                </section>