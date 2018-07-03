 <footer>
  <div class="b-footer-primary" style="background-color:#00476f; background-image:url(../img/footerbg.jpg);">
  <div class="container">
    <div class="b-footer-secondary row">
      
      <div class="col-md-4">
	  
	  <?php
			$sql22 = "SELECT * FROM header where autoid='H-2'";
			$result32 = mysql_query($sql22) or die (mysql_error());
			$sel2 = mysql_fetch_array($result32);
            ?>
        <h4 class="f-primary-b" style="color:#FFF; ">Contact us</h4>
        <div class="b-contacts-short-item-group">
          <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
            <div class="b-contacts-short-item__icon f-contacts-short-item__icon f-contacts-short-item__icon_lg b-left">
              <i class="fa fa-map-marker"></i>
            </div>
            <div class="b-remaining f-contacts-short-item__text"><?php echo $sel2['address'];?>
<br/>
            </div>
          </div>
          <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
            <div class="b-contacts-short-item__icon f-contacts-short-item__icon b-left f-contacts-short-item__icon_xs">
              <i class="fa fa-envelope"></i>
            </div>
            <div class="b-remaining f-contacts-short-item__text f-contacts-short-item__text_email">
              <a href="mailto:<?php echo $sel2['mail1'];?>"><span class="santext1"><?php echo $sel2['mail1'];?></span></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5" style="float:right">
        <h4 class="f-primary-b" style="color:#FFF; ">Find where we </h4>
              <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7250.618604147606!2d46.68534765991217!3d24.6818920351926!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ssa!4v1419151414785" height="200" width="100%" frameborder="0" style="border:0;border-radius: 5px 5px 5px 5px;
-moz-border-radius: 5px 5px 5px 5px;;
-webkit-border-radius: 5px 5px 5px 5px; float:right;"></iframe>
      </div>
    </div>
    <div class="container" style="background-color:#00476f; border-radius: 5px 5px 0px 0px ;
-moz-border-radius: 5px 5px 0px 0px ;
-webkit-border-radius: 5px 5px 0px 0px ;
">
        <div class="row">
        <div class="col-sm-8 col-xs-12">
                <div class="b-btn f-btn b-btn-default b-left b-footer__btn_up f-footer__btn_up j-footer__btn_up">
                    <i class="fa fa-chevron-up"></i>
                </div>
                <nav class="b-bottom-nav f-bottom-nav b-left hidden-xs">
                    <ul>
                        <li class="is-active-bottom-nav"><a href="../">Home</a>
    <!--index-->
    </li>
    <li><a href="../about/">About us</a>
        <!--about-->
    </li>
     <li><a href="../service/">Services</a>
        <!--about-->
    </li>
    <li>
        <a href="../appoiment/">Appoiment</a>
        <!--appoiment-->
    </li>
     <li>
        <a href="../atestnews/">Latest News</a>
        <!--latest news-->
    </li>
     <li>
<a href="../contactus/">Contact us</a>        
    </li>
                    </ul>
                </nav>
            </div>
            <div class="col-sm-4 col-xs-12 f-copyright b-copyright">Copyright © 2016 - All Rights Reserved</div>
        </div>
    </div>
  </div>
</div>
</footer>
<script src="../js/breakpoints.js"></script>
<script src="../js/jquery/jquery-1.11.1.min.js"></script>
<!-- bootstrap -->
<script src="../js/scrollspy.js"></script>
<script src="../js/bootstrap-progressbar/bootstrap-progressbar.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!-- end bootstrap -->
<script src="../js/masonry.pkgd.min.js"></script>
<script src='../js/imagesloaded.pkgd.min.js'></script>
<!-- bxslider -->
<script src="../js/bxslider/jquery.bxslider.min.js"></script>
<!-- end bxslider -->
<!-- flexslider -->
<script src="../js/flexslider/jquery.flexslider.js"></script>
<!-- end flexslider -->
<!-- smooth-scroll -->
<script src="../js/smooth-scroll/SmoothScroll.js"></script>
<!-- end smooth-scroll -->
<!-- carousel -->
<script src="../js/jquery.carouFredSel-6.2.1-packed.js"></script>
<!-- end carousel -->
<script src="../js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script src="../js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="../js/rs-plugin/videojs/video.js"></script>
<!-- jquery ui -->
<script src="../js/jqueryui/jquery-ui.js"></script>
<!-- end jquery ui -->
<script type="text/javascript" language="javascript"
        src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyCfVS1-Dv9bQNOIXsQhTSvj7jaDX7Oocvs"></script>
<!-- Modules -->
<script src="../js/modules/sliders.js"></script>
<script src="../js/modules/ui.js"></script>
<script src="../js/modules/retina.js"></script>
<script src="../js/modules/animate-numbers.js"></script>
<script src="../js/modules/parallax-effect.js"></script>
<script src="../js/modules/settings.js"></script>
<script src="../js/modules/maps-google.js"></script>
<script src="../js/modules/color-themes.js"></script>
<!-- End Modules -->
<!-- Audio player -->
<script type="text/javascript" src="../js/audioplayer/js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="../js/audioplayer/js/jplayer.playlist.min.js"></script>
<script src="../js/audioplayer.js"></script>
<!-- end Audio /player -->
<!-- radial Progress -->
<script src="../js/radial-progress/jquery.easing.1.3.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/d3/3.4.13/d3.min.js"></script>
<script src="../js/radial-progress/radialProgress.js"></script>
<script src="../js/progressbars.js"></script>
<!-- end Progress -->
<!-- Google services -->
<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart']}]}"></script>
<script src="../js/google-chart.js"></script>
<!-- end Google services -->
<script src="../js/j.placeholder.js"></script>
<!-- Fancybox -->
<script src="../js/fancybox/jquery.fancybox.pack.js"></script>
<script src="../js/fancybox/jquery.mousewheel.pack.js"></script>
<script src="../js/fancybox/jquery.fancybox.custom.js"></script>
<!-- End Fancybox -->
<script src="../js/user.js"></script>
<script src="../js/timeline.js"></script>
<script src="../js/fontawesome-markers.js"></script>
<script src="../js/markerwithlabel.js"></script>
<script src="../js/cookie.js"></script>
<script src="../js/loader.js"></script>
<script src="../js/scrollIt/scrollIt.min.js"></script>
<script src="../js/modules/navigation-slide.js"></script>
    <script src="../js/owl.carousel.js"></script>
</body>
</html>