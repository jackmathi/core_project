<?php

 
 if($_POST['save']=="Submit"){
	 
 	 $id=$_POST['id'];
	$name=$_POST['name'];
	
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $social=$_POST['social'];
    $desc=$_POST['desc'];
    $page='Contact';
   


 
 $ins_regdetls = mysql_query("INSERT INTO `form` (`id`,`name`, `email`, `phone`,`social`, `desc`, `page`) VALUES
('null','$name','$email','$phone','$social','$desc','$page')");

 }

 if($ins_regdetls){
         $EmailSubject = "Contact Form: ".ucfirst($owner);
        $to_email="jackmathi2016@gmail.com,webrjpm@gmail.com,$email";
        $mailheader = "From: ".ucfirst($owner)." mathibsc20@gmail.com\r\n";
        $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

        $MESSAGE_BODY = "<html><head></head><body topmargin='0' rightmargin='0' bottommargin='0' leftmargin='0' bgcolor='white'><font face='Arial, Helvetica, sans-serif'></font>
        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
        <tr><td bgcolor='white'><table width='743' border='0' align='center' cellpadding='0' cellspacing='15'>  
            <tr><td width='113'><strong><font face='Arial, Helvetica, sans-serif' size='2' >Name</font></strong></td> 
                <td width='20'><font face='Arial, Helvetica, sans-serif' size='2' >:</font></td> 
                <td width='550'><font face='Arial, Helvetica, sans-serif' size='2' >".$name."</font></td>  </tr>  
            <tr><td><strong><font face='Arial, Helvetica, sans-serif' size='2' >Email</font></strong></td> 
                <td><font face='Arial, Helvetica, sans-serif' size='2' >:</font></td>  
                <td><font face='Arial, Helvetica, sans-serif' size='2' >".$email."</font></td>  </tr>
            <tr><td><strong><font face='Arial, Helvetica, sans-serif' size='2' >Phone</font></strong></td> 
                <td>:</td>    
                <td><font face='Arial, Helvetica, sans-serif' size='2' >".$phone."</font></td>  </tr>
				
                <tr><td><strong><font face='Arial, Helvetica, sans-serif' size='2' >How do you hear about us</font></strong></td> 
                <td>:</td>    
                <td><font face='Arial, Helvetica, sans-serif' size='2' >".$social."</font></td>  </tr>
                <tr><td><strong><font face='Arial, Helvetica, sans-serif' size='2' >Message</font></strong></td> 
                <td>:</td>    
                <td><font face='Arial, Helvetica, sans-serif' size='2' >".$desc."</font></td>  </tr>
                
                </table></td></tr></table></body></html>"; 
 
      $mail = mail($to_email, $EmailSubject, $MESSAGE_BODY, $mailheader, "-f " . $email);
 }
 
 
 ?>



<section class="b-desc-section-container b-diagonal-line-bg-light"  style="background-color:#EBEDF1; padding-bottom:10px;">
 <div class="container">
 <div class="b-some-examples__item f-some-examples__item b-radius-null">
<div class="container" style="background-color:#fff;">
        <div class="row">
            <div class="col-sm-6 col-xs-12"  style="padding-top:53px;">
             <div class="b-full-search-form">
           <h4 class="f-right f-primary-b" style="color:#00476f; border-bottom: 1px solid #00476f; padding-bottom:10px; padding-top:10px;">Send your feedback</h4>
                    <form name="myForm"  action="" enctype="multipart/form-data" method="post">
                    <div class="row">
                            <div class="b-full-search-form_label f-full-search-form_label f-primary-b">Name :</div>
                            <input type="text" name="name" id="name" class="form-control" placeholder="name">
                            <div class="b-full-search-form_label f-full-search-form_label f-primary-b">E-mail :</div>
                            <input type="text" name="email" id="email" class="form-control" placeholder="E-mail">
                        <div class="clearfix visible-md visible-sm"></div>
                            <div class="row">
                                <div class="col-md-12">
                                        <div class="b-form-row b-form-select b-select--alt">
                                        <div class="b-full-search-form_label f-full-search-form_label f-primary-b">Mobile :</div>
                                             <input type="text" name="phone" id="phone" class="form-control" placeholder="Mobile">
                                        </div>
                                    </div>
                            </div>
                        <div class="clearfix visible-md visible-sm"></div>
                                  <div class="b-form-row b-form-select b-select--alt">
                                        <div class="b-full-search-form_label f-full-search-form_label f-primary-b">How do you hear about us :
</div>
                                            <select name="social" class="j-select">
                                                <option value="Search Engine" selected="selected">Search engine</option>
                                                <option value="Facebook">Facebook</option>
                                                <option value="Twitter">Twitter</option>
                                            </select>
                                        </div>
                            <div class="b-full-search-form_label f-full-search-form_label f-primary-b">Message :</div>
                            <div class="row">
                                <div class="col-md-12">
                                <textarea class="form-control" placeholder="Message" name="desc" id="desc" rows="10"></textarea>
                                </div>
                                   <div class="col-md-3" style="padding-top:10px; padding-bottom:10px;">
                                 <button class="b-search-map__submit b-btn f-btn b-btn-light f-btn-light b-left " type="submit" name="save" value="Submit">Book now</button>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="b-section-info__text f-section-info__text col-sm-6 col-xs-12">
                <div class="b-ol-list-text-container">
                    <div class="b-ol-list-text__item">
                        <div class="b-ol-list-text__item_info">
                        <h5 class="f-primary-b f-title-big" style="background-color:#E6E6E6; padding:5px; text-align:left; border-radius: 10px 10px 0px 0px; -moz-border-radius: 10px 10px 0px 0px; -webkit-border-radius: 10px 10px 0px 0px; border-bottom: 2px solid #E4E4E4; color:#666;">Out contact</h5>
                       <div class="b-contacts-short-item-group">
          <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
            <div class="b-contacts-short-item__icon f-contacts-short-item__icon f-contacts-short-item__icon_lg b-left">
              <i class="fa fa-map-marker"></i>
            </div>
			
			 <?php
			$sql213 = "SELECT * FROM header where autoid='H-2'";
			$result313 = mysql_query($sql213) or die (mysql_error());
			$sel23 = mysql_fetch_array($result313);
            ?>	
            <div class="b-remaining f-contacts-short-item__text" style="color:#666;">
          <?php echo $sel23['address'];?>
<br/>
            </div>
          </div>
          <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
            <div class="b-contacts-short-item__icon f-contacts-short-item__icon b-left f-contacts-short-item__icon_xs">
              <i class="fa fa-envelope"></i>
            </div>
            <div class="b-remaining f-contacts-short-item__text f-contacts-short-item__text_email">
              <a href="mailto:<?php echo $sel23['mail1'];?>"><span> <?php echo $sel23['mail1'];?></span></a>
            </div>
          </div>
        </div>
                      </div>
                    </div>
                    <div class="b-ol-list-text__item">
                        <div class="b-ol-list-text__item_info">
                        <h5 class="f-primary-b f-title-big" style="background-color:#E6E6E6; padding:5px; text-align:left; border-radius: 10px 10px 0px 0px; -moz-border-radius: 10px 10px 0px 0px; -webkit-border-radius: 10px 10px 0px 0px; border-bottom: 2px solid #E4E4E4; color:#666;">Our location</h5>
                           <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7250.618604147606!2d46.68534765991217!3d24.6818920351926!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ssa!4v1419151414785" height="400" width="100%" frameborder="0" style="border:0;border-radius: 5px 5px 5px 5px;
-moz-border-radius: 5px 5px 5px 5px;;
-webkit-border-radius: 5px 5px 5px 5px; float:right;"></iframe>
                                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>
   </div>
                </section>