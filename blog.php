<div class="col-sm-4 b-categories-filter">
            <h4 class="f-primary-b b-h4-special f-h4-special c-primary" style="background-color:#EBEBEB; color:#666; padding:10px; border-radius: 10px 10px 0px 0px; -moz-border-radius: 10px 10px 0px 0px; -webkit-border-radius: 10px 10px 0px 0px;">Our blogs</h4>
      <div class="b-blog-short-post b-blog-short-post--img-hover-bordered b-blog-short-post--w-img f-blog-short-post--w-img row">
                <div class="b-blog-short-post b-blog-short-post--img-hover-bordered b-blog-short-post--w-img f-blog-short-post--w-img row">
		<?php
			$sql1246 = "SELECT * FROM blog where status='1' order by order_1 ASC";
			$result2146 = mysql_query($sql1246) or die (mysql_error());
			while($rw2 = mysql_fetch_array($result2146))
			{
            ?>		
				
    <div class="b-blog-short-post--popular col-md-12  col-xs-12 f-primary-b">
        <div class="b-remaining">
            <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
           <p ><?php echo $rw2['descrip'];?> </p>
                                <strong><a href="blog?autoid=<?php echo $rw2['autoid'];?>">Read more ...</a></strong>
            </div>
        </div>
    </div>
			<?php } ?>
   
       
</div>
            </div>
            </div>