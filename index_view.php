<?php

 
 if($_POST['save']=="Submit"){
	 
 	 $id=$_POST['id'];
	$name=$_POST['name'];
	
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $date=$_POST['date'];
    $services=$_POST['services'];
    $services1=$_POST['services1'];
    $services2=$_POST['services2'];
    $services3=$_POST['services3'];
    $services4=$_POST['services4'];
    $services5=$_POST['services5'];
    $services6=$_POST['services6'];
    $services7=$_POST['services7'];
    $social=$_POST['social'];
    $desc=$_POST['desc'];
    $page='Home';
   


 
 $ins_regdetls = mysql_query("INSERT INTO `form` (`id`,`name`, `email`, `phone`, `date`, `services`, `services1`, `services2`, `services3`, `services4`, `services5`, `services6`, `services7`, `social`, `desc`, `page`) VALUES
('null','$name','$email','$phone','$date','$services','$services1','$services2','$services3','$services4','$services5','$services6','$services7','$social','$desc','$page')");

 }

 if($ins_regdetls){
         $EmailSubject = "MAKE A APPOIMENT Form: ".ucfirst($owner);
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
                <tr><td><strong><font face='Arial, Helvetica, sans-serif' size='2' >Date / Microchip No</font></strong></td> 
                <td>:</td>    
                <td><font face='Arial, Helvetica, sans-serif' size='2' >".$date."</font></td>  </tr>
                <tr><td><strong><font face='Arial, Helvetica, sans-serif' size='2' >Service</font></strong></td> 
                <td>:</td>    
                <td><font face='Arial, Helvetica, sans-serif' size='2' >".$services."</font></td>  </tr>
                
                <td><font face='Arial, Helvetica, sans-serif' size='2' >".$services1."</font></td>  </tr>
                 
                <td><font face='Arial, Helvetica, sans-serif' size='2' >".$services2."</font></td> 
                <td><font face='Arial, Helvetica, sans-serif' size='2' >".$services3."</font></td>  
                <td><font face='Arial, Helvetica, sans-serif' size='2' >".$services4."</font></td>
                <td><font face='Arial, Helvetica, sans-serif' size='2' >".$services5."</font></td>				
				<td><font face='Arial, Helvetica, sans-serif' size='2' >".$services6."</font></td>
				<td><font face='Arial, Helvetica, sans-serif' size='2' >".$services7."</font></td>
				</tr>
				
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

<section class="b-full-search" style="background-color:#EBEDF1;">
            <div class="container" >
                <div class="b-full-search-form">
           <h4 class="f-right f-primary-b" style="color:#00476f; border-bottom: 1px solid #00476f; padding-bottom:10px; padding-top:10px;">Make a Appoiment</h4>
                    <form action="" enctype="multipart/form-data" method="post" >
                    <div class="row">
                      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 b-full-search-form_col">
                            <div class="b-full-search-form_label f-full-search-form_label f-primary-b">Name :</div>
                            <input type="text" name="name" class="form-control" placeholder="Type your Name">
                            <div class="b-full-search-form_label f-full-search-form_label f-primary-b">E-mail :</div>
                            <input type="text" name="email" class="form-control" placeholder="Type your Email">
                        </div>
                        <div class="clearfix visible-md visible-sm"></div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 b-full-search-form_col" >
                            <div class="row">
                                <div class="col-md-12">
                                        <div class="b-form-row b-form-select b-select--alt">
                                        <div class="b-full-search-form_label f-full-search-form_label f-primary-b">Mobile :</div>
                                             <input type="text" name="phone" class="form-control" placeholder="Type your Mobile no">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                    <div class="b-full-search-form_label f-full-search-form_label f-primary-b">Appointment date</div>
                                    <div class="b-form-row b-form-control__icon-wrap">
                                        <input type="text" name="date" class="form-control datepicker datepicker" placeholder="Date" id="dp14">
                                        <i class="fa fa-calendar b-form-control__icon f-form-control__icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix visible-md visible-sm"></div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 b-full-search-form_col">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="b-full-search-form_label f-full-search-form_label f-primary-b">Choose services :</div>
                                                            <div class="clearfix"></div>
  <div class="col-md-6">
    <label class="checkbox-inline"><input type="checkbox" name="services" value="Endo dentistry"><span style="padding-right:15px; font-size:13px; color:#FFF;">Endo dentistry</span></label>
    <label class="checkbox-inline"><input type="checkbox" name="services1" value="Ortho dentistry"><span style="padding-right:15px; font-size:13px; color:#FFF;">Ortho dentistry</span></label>
    <label class="checkbox-inline"><input type="checkbox" name="services2" value="Scaling" ><span style="padding-right:15px; font-size:13px; color:#FFF;">Scaling</span></label>
    <label class="checkbox-inline"><input type="checkbox" name="services3" value="Oral surgery"><span style="padding-right:15px; font-size:13px; color:#FFF;">Oral surgery</span></label></div>
  <div class="col-md-6">
    <label class="checkbox-inline"><input type="checkbox" name="services4" value="Dental fillings"> <span style="padding-right:15px; font-size:13px; color:#FFF;">Dental fillings</span></label>
    <label class="checkbox-inline"><input type="checkbox" name="services5" value="Restorative dentistry"><span style="padding-right:15px; font-size:13px; color:#FFF;">Restorative dentistry</span></label>
    <label class="checkbox-inline"><input type="checkbox" name="services6" value="اسنان الاطفال"><span style="padding-right:15px; font-size:13px; color:#FFF;">اسنان الاطفال</span></label>
    <label class="checkbox-inline"><input type="checkbox" name="services7" value="زراعة الأسنان"><span style="padding-right:15px; font-size:13px; color:#FFF;">زراعة الأسنان</span></label>
    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 b-full-search-form_col">
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
                                <textarea class="form-control" name="desc" placeholder="Type your Comments" rows="3"></textarea>
                                 <button class="b-search-map__submit b-btn f-btn b-btn-light f-btn-light b-left" type="submit" name="save" value="Submit" >Book now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </section>