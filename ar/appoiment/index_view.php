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
    $page='appoiment';
   


 
 $ins_regdetls = mysql_query("INSERT INTO `form` (`id`,`name`, `email`, `phone`, `date`, `services`, `services1`, `services2`, `services3`, `services4`, `services5`, `services6`, `services7`, `social`, `desc`, `page`) VALUES
('null','$name','$email','$phone','$date','$services','$services1','$services2','$services3','$services4','$services5','$services6','$services7','$social','$desc','$page')");

 }

 if($ins_regdetls){
         $EmailSubject = "Arabic Appoiments Form: ".ucfirst($owner);
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


<section class="b-desc-section-container b-diagonal-line-bg-light"  style="background-color:#EBEDF1; padding-bottom:10px;">
 <div class="container" >
 <div class="b-full-search-form">
           <h4 class="f-right f-primary-b" style="color:#00476f; border-bottom: 1px solid #00476f; padding-bottom:10px; padding-top:10px;">إحجز موعد</h4>
  <form name="myForm"  action="" enctype="multipart/form-data" method="post">
                    <div class="row">
                            <div class="b-full-search-form_label f-full-search-form_label f-primary-b">الاسم</div>
                            <input type="text" name="name" id="name" class="form-control" placeholder="الاسم">
                            <div class="b-full-search-form_label f-full-search-form_label f-primary-b">البريد الإلكتروني</div>
                            <input type="text" name="email" id="email" class="form-control" placeholder="البريد الإلكتروني">
                        <div class="clearfix visible-md visible-sm"></div>
                            <div class="row">
                                <div class="col-md-12">
                                        <div class="b-form-row b-form-select b-select--alt">
                                        <div class="b-full-search-form_label f-full-search-form_label f-primary-b">رقم الجوال</div>
                                             <input type="text" name="phone" id="phone" class="form-control" placeholder="رقم الجوال">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                    <div class="b-full-search-form_label f-full-search-form_label f-primary-b">تاريخ الموعد</div>
                                    <div class="b-form-row b-form-control__icon-wrap">
                                        <input type="text" name="date" class="form-control datepicker datepicker" id="dp14">
                                        <i class="fa fa-calendar b-form-control__icon f-form-control__icon"></i>
                                    </div>
                                </div>
                            </div>
                        <div class="clearfix visible-md visible-sm"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="b-full-search-form_label f-full-search-form_label f-primary-b">اختر القسم</div>
                                                            <div class="clearfix"></div>
  <div class="col-md-6">
<label class="checkbox-inline"><input type="checkbox" value="علاج العصب	" name="services"><span style="padding-right:15px; font-size:13px; color:#FFF;">علاج العصب	</span></label>
<label class="checkbox-inline"><input type="checkbox" value="تقويم الاسنان" name="services1"><span style="padding-right:15px; font-size:13px; color:#FFF;">تقويم الاسنان</span></label>
<label class="checkbox-inline"><input type="checkbox" value="تنظيف الاسنان" name="services2"><span style="padding-right:15px; font-size:13px; color:#FFF;">تنظيف الاسنان</span></label>
<label class="checkbox-inline"><input type="checkbox" value="جراحه الاسنان" name="services3"><span style="padding-right:15px; font-size:13px; color:#FFF;">جراحه الاسنان</span></label></div>
  <div class="col-md-6">
<label class="checkbox-inline"><input type="checkbox" value="حشوات الاسنان" name="services4"><span style="padding-right:15px; font-size:13px; color:#FFF;">حشوات الاسنان</span></label>
<label class="checkbox-inline"><input type="checkbox" value="تعويضات الاسنان" name="services5"><span style="padding-right:15px; font-size:13px; color:#FFF;">تعويضات الاسنان</span></label>
<label class="checkbox-inline"><input type="checkbox" value="اسنان الاطفال" name="services6"><span style="padding-right:15px; font-size:13px; color:#FFF;">اسنان الاطفال</span></label>
<label class="checkbox-inline"><input type="checkbox" value="زراعة الأسنان" name="services7"><span style="padding-right:15px; font-size:13px; color:#FFF;">زراعة الأسنان</span></label>
    </div>
                                </div>
                            </div>
                                  <div class="b-form-row b-form-select b-select--alt">
                                        <div class="b-full-search-form_label f-full-search-form_label f-primary-b">كيف سمعتم عنا
</div>
                                             <select class="j-select" name="social" value="Default" >
                                                <option value="محركات البحث" selected="selected">محركات البحث</option>
                                                <option value="فيسبوك" >فيسبوك</option>
                                                <option value="تويتر">تويتر</option>
                                            </select>
                                        </div>
                            <div class="b-full-search-form_label f-full-search-form_label f-primary-b">الرسالة</div>
                            <div class="row">
                                <div class="col-md-12">
                                <textarea class="form-control" placeholder="الرسالة" name="desc" id="desc" rows="3"></textarea>
                                </div>
                                   <div class="col-md-3">
                                 <button class="b-search-map__submit b-btn f-btn b-btn-light f-btn-light b-left " type="submit" name="save" value="Submit">إرسل طلب الموعد</button>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
   </div>
                </section>