<section class="b-desc-section-container b-diagonal-line-bg-light"  style="background-color:#EBEDF1; padding-bottom:10px;">
 <div class="container">
 <div class="b-some-examples__item f-some-examples__item b-radius-null">
<div class="container" style="background-color:#fff;">
        <div class="row">
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
                <h3 class="f-primary-b" style="background-color:#4496d2; padding:5px; text-align:right; color:#FFF;  border-radius: 10px 10px 0px 0px ;
-moz-border-radius: 10px 10px 0px 0px ;
-webkit-border-radius: 10px 10px 0px 0px ; border-bottom: 2px solid #E4E4E4;">أقسام المركز</h3>
                <ul class="c-primary c--inherit b-list-markers f-list-markers b-list-markers--without-leftindent f-list-markers--medium c-primary--all f-color-primary b-list-markers-2col f-list-markers-2col">
               <li><a href="#"> علاج العصب <i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i></a></li>
               <li><a href="#"> تقويم الاسنان <i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i></a></li>
               <li><a href="#"> تنظيف الاسنان <i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i></a></li>
               <li><a href="#"> جراحه الاسنان <i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i></a></li>
               <li><a href="#"> حشوات الاسنان <i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i></a></li>
               <li><a href="#"> تعويضات الاسنان <i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i></a></li>
               <li><a href="#"> طب اسنان الاطفال <i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i></a></li>
               <li><a href="#"> زراعه الاسنان <i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i></a></li>                              
               </ul>
            </div>
              <!--  <img data-retina data-animate="fadeInLeft" class="img-appearance-item-1" src="img/animation-data/imac.png" alt="imac"/>
                <img data-retina data-animate="fadeInLeft" class="img-appearance-item-2" src="img/animation-data/mac-book.png" alt="mac-book"/>
                <img data-retina data-animate="fadeInLeft" class="img-appearance-item-5" src="img/animation-data/iphone.png" alt="iphone"/>-->
            </div>
			<?php
			$sql212 = "SELECT * FROM header where autoid='H-4'";
			$result312 = mysql_query($sql212) or die (mysql_error());
			$sel22 = mysql_fetch_array($result312);
            ?>
            <div class="b-section-info__text f-section-info__text col-sm-6 col-xs-12">
                <div class="b-ol-list-text-container">
                    <div class="b-ol-list-text__item">
                        <div class="b-ol-list-text__item_info">
                        <h5 class="f-primary-b f-title-big" style="background-color:#CCC; padding:5px; text-align:right; border-radius: 10px 10px 0px 0px; -moz-border-radius: 10px 10px 0px 0px; -webkit-border-radius: 10px 10px 0px 0px; border-bottom: 2px solid #E4E4E4; color:#666;">حول مركز استشاري الأسنان الطبي</h5>
                        <?php echo $sel22['t_descrip1'];?>
                      </div>
                    </div>
                    <div class="b-ol-list-text__item">
                        <div class="b-ol-list-text__item_info">
                        <h5 class="f-primary-b f-title-big" style="background-color:#CCC; padding:5px; text-align:right; border-radius: 10px 10px 0px 0px; -moz-border-radius: 10px 10px 0px 0px; -webkit-border-radius: 10px 10px 0px 0px; border-bottom: 2px solid #E4E4E4; color:#666;">رسالتنا و أهدافنا</h5>
                            <?php echo $sel22['d_descrip1'];?>
                                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>
   </div>
                </section>