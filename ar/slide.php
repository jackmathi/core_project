<div class="b-slidercontainer">
      <div class="b-slider j-fullscreenslider">
        <ul>
		
		<?php
			$sql12 = "SELECT * FROM banner where page='banner' && status='1' order by order_1 ASC";
			$result21 = mysql_query($sql12) or die (mysql_error());
			while($sel21 = mysql_fetch_array($result21))
			{
            ?>
          <li data-transition="3dcurtain-vertical" data-slotamount="7">
            <div class="tp-bannertimer"></div>
            <img data-retina src="admin/<?php echo $sel21['image1'];?>">
          </li>
			<?php } ?>
          
        </ul>
      </div>
   </div>