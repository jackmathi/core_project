 <div class="col-md-4">
                    <h5 class="f-primary-b f-title-big"  style="background-color:#fff; padding:0px; text-align:left; color:#666;  border-radius: 10px 10px 0px 0px ;
-moz-border-radius: 10px 10px 0px 0px ;
-webkit-border-radius: 10px 10px 0px 0px ; border-bottom: 2px solid #006ead; color:#999;">Latest Offers</h5>
                    <div class="b-slidercontainer b-small-arr f-small-arr b-shadow-container">
                        <div class="b-slider j-smallslider" data-height="600">
                            <ul>
							<?php
			$sql124 = "SELECT * FROM banner where page='offer' && status='1' order by order_1 ASC";
			$result214 = mysql_query($sql124) or die (mysql_error());
			while($sel214 = mysql_fetch_array($result214))
			{
            ?>
                                <li data-transition="3dcurtain-vertical" data-slotamount="10">
                                    <img data-retina src="admin/<?php echo $sel214['image1'];?>">
                                </li>
			<?php } ?>
                            </ul>
                        </div>
                    </div>
   </div>