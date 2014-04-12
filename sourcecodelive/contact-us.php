<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title> Contact Us - Source Pro </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />

<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 

<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<link href="css/nav.css" rel="stylesheet" type="text/css" />

  <script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
  <script src="js/cufon-yui.js" type="text/javascript"></script>
  <script src="js/cufon-replace.js" type="text/javascript"></script>
  <script src="js/Futura_Lt_BT_400.font.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/backgroundPosition.js" ></script>   
  <script type="text/javascript" src="js/script.js"></script>     
  <script type="text/javascript" src="js/jquery.easing.1.3.js" ></script>
  <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
  
  <script>
  $(document).ready(function(){
  
  $("#fname").keydown(function(event){
			// Allow: backspace=8, delete=46, tab=9, escape=27,space=32 and enter=13,
			if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 32 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || 
				 // Allow: Ctrl+A
				(event.keyCode == 65 && event.ctrlKey === true) ||
				//Allow:shift+A-to-Z
				 (event.keyCode <= 97 && event.keyCode <= 122 && event.shiftKey === true) ||
				 // Allow: home=36, end=35, left=37, right=39, up=38
				(event.keyCode >= 35 && event.keyCode <= 39)){
					 // let it happen, don't do anything
					 return;
			}
			else {
				// A=65 & Z=90
				if (event.shiftKey || (event.keyCode < 65 || event.keyCode > 90) ){//&& (event.keyCode < 97 || event.keyCode > 122 )
					event.preventDefault(); 
				}   
			}
  	});//End of #first_name
  });//End of document.ready()
  
  
  </script>
  
<script>
  function validateForm(){
   var isValid = true; 
   /*For First Name*/
     var un = $('#fname').val().trim();
       if(!un && un.length <= 0){
         isValid = false;
         $('#msg_fname').html('Please provide Name').show();
       }else{
         $('#msg_fname').html('').hide();
     }
	 
	 /*For Company Name*/
	  var un = $('#co_name').val().trim();
       if(!un && un.length <= 0){
         isValid = false;
         $('#msg_co_name').html('Please provide Company Name').show();
       }else{
         $('#msg_co_name').html('').hide();
     }
     
     //validate email
      var email = $('#email_address').val();
       if(email && email.length > 0){
         if(!isValidEmailAddress(email)){
           isValid = false;
           $('#msg_email_address').html('Invalid email address').show();           
         }else{
          $('#msg_email_address').html('').hide();
         }
       }else{
         isValid = false;
         $('#msg_email_address').html('Please provide email address').show();
		 } 
		 
	 if(!isValid){
	  		alert('Please fill all the mandatory details!!!');
	  } 
		 
   return isValid;

 }//End of function validateForm	
 
 function isValidEmailAddress(emailAddress){
	   var n=emailAddress.lastIndexOf(".");
		var result = emailAddress.substring(n + 1);
		if(result.length>0 && result.length<4){
			 var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
	  return pattern.test(emailAddress);
		
		}else{
			return false;
		}
    } 
  
         </script>
         
         
     <style>
	#sub{
		    /*margin-left:-107px;*/
		    background-color: #FFFFFF !important;
			border: none !important;
			font-size: 150% !important;
			padding-bottom: 5% !important;
			text-decoration:none !important;
			color:#3B3B3B;
	}
	#sub:hover{
		color:#FF3801 !important;
	}
.height {
    height: 45px;
}     
.fright1 {
    float: left;
    margin-left: -184px;
}
.col-border {
    background: none repeat scroll 0 0 #FEFEFE;
    border: 1px solid #D3D3D3;
    margin: auto 0;
    overflow: hidden;
    padding: 10px;
    text-align: inherit;
    width: 432px;
}

</style>
         
  
</head>

<body id="page5">
<div class="main">
    <div id="header">
        <div class="indent">
        	<div class="slogan">
            	<h1>Talent Sourcing Training  
                            <br />
                	<span class="indent1"><b>& </b> <strong>Certification Program </strong></span>
                </h1>
            </div>
            
        </div>
        <a href="index.html"> <img alt="" src="images/logol.png" class="logo" /></a>
<!--        <a href="#" id="rss" class="rss"> <img alt="" src="images/rss.gif" /></a>
-->  <div class="menu">      
<ul>
            <li><a href="about-certification.html">About Certification</a>
            
<ul>
            <li>
              <a href="team.html">Team </a>
            </li>
            <li>
              <a href="contact-us.html">Contact US</a>
            </li>
<!--            <li>
                <a href="testimonial.html">Testimonial</a>
            </li>
-->            </ul>            
        </li>
            
            </li>
            <li><a href="training-structure.html">Training Structure</a>
            
            </li>
            <li><a href="#">Resources</a></li>
            <li><a href="event.php">Events</a></li>
            <li><a href="blog.php">Blogs</a></li><li><a href="faq.html" class="uppercase">FAQs</a></li>
           
            
      </ul>
        </div>
        </div>
		
    
  <div id="content">		
        <div class="indent-main">
        <div class="container bg">
                <div class="col-1">
                <h2> Contact Us</h2>
           	    <img src="images/p_telephone_orange.jpg" alt="" width="382" height="228" /> <br /> <br /><br /> <br /><br />
 <div class="col-border">
                <h3> Let's Discuss</h3><br />

                	<div class="indent">
                    
       	          <form action="" id="form2" method="post">

       	            <div class="container1">
                          
           	              <!--<div class="h">
           	                <input type="text" onblur="if(this.value=='') this.value='Your Name:'" onfocus="if(this.value =='Your Name:' ) this.value=''"  />
       	                  </div>
           	              <div class="h">
           	                <input  type="text" onblur="if(this.value=='') this.value='company name:'" onfocus="if(this.value =='E-mail:' ) this.value=''"  />
       	                  </div>
           	              <div class="h">
           	                <input  type="text" onblur="if(this.value=='') this.value='E-mail:'" onfocus="if(this.value =='E-mail:' ) this.value=''"  />
       	                  </div>
                           <textarea name="textarea" cols="30" rows="40" onfocus="if(this.value =='Message:' ) this.value=''" onblur="if(this.value=='') this.value='Message:'"  > Message: </textarea>-->
                          
                          <div class="height">
           	                <input type="text" id="fname" name="fname" placeholder="Your Name"  />&nbsp;<span id="msg_fname" style="color:#F00;"></span>
                           <!-- &nbsp;<span id="msg_fname" style="color:#F00;"></span>-->
       	                  </div>
           	              <div class="height">
           	                <input  type="text" id="co_name" name="co_name" placeholder="Company Name"  />
                            &nbsp;<span id="msg_co_name" style="color:#F00;"></span>
       	                  </div>
           	              <div class="height">
           	                <input  type="text" id="email_address" name="email_address" placeholder="E-mail" />
                            &nbsp;<span id="msg_email_address" style="color:#F00;"></span>
       	                  </div>
                          <textarea name="textarea" id="textarea" cols="30" rows="40" placeholder="Your Message"></textarea> <!--Message: </textarea>-->
                          
           	            
           	              <div class="container">
                           <div class="fright1">
           	               
                        <!-- <a href="javascript:void(0);" class="link-1" name="submit" id="submit" onclick="validateForm();"><em><b>Submit</b></em></a> -->
                           <input type="submit" name="sub" id="sub" onclick="return validateForm();" value="Submit" />
                           </div>  	                 
                             
                      	  </div>
                          
                           </div>
   	                  </div>
           	          </form>
       	            </div><!--col-border-->
                </div>
                
                <div class="col-2">
                <h2> </h2>
                	<div class="indent">
<div class="text">
              

           	        <h5 class="p1">SourcePro<br />
           	          D/203, Choice Arcade<br />
           	          Dhole Patil Road<br />
            Pune, India – 411 001</h5>
           	        <h5 class="block-contact">
           	         <h5> Telephone:  +91 020 4135 5786 </h5> 
<h5> <span> E-mail: <a href="mailto:info@certifiedsourcingpro.com" class="link"  > info@certifiedsourcingpro.com</a>
             </span>  </h5>
<h5> <span> E-mail: <a href="mailto:sales@certifiedsourcingpro.com" class="link"  > sales@certifiedsourcingpro.com</a></span>  </h5>
 <h5> <span> E-mail: <a href="mailto:training@certifiedsourcingpro.com" class="link"  > training@certifiedsourcingpro.com</a></span>
             
              </h5>
                </div>       	          
       	            </div>

                   
                </div>
            </div>
          
        </div>
  </div>	 
    <div id="footer">
    	<div class="indent-footer1"> 
        <br />
          <div>  
    <a href="privacy-policy.html"> Privacy policy </a> | 
    <a href="terms-conditions.html">Terms & Conditions</a> | 
    <a href="shipping-policy.html">Delivery & Shipping Policy</a> | 
    <a href="cancellation-policy.html">Cancellation Policy</a> | <br />
    <a href="index.html" class="current">About Certification </a> |
    <a href="training-structure.html" >Training Structure  </a> |
    <a href="event.php">Events</a> |
    <a href="blog.php">Blogs</a> |
    <a href="index-3.html">Resources  </a> |
    <a href="faq.html">FAQS</a>
    <br /> 

        	<a href="http://www.linkedin.com/groups?home=&amp;gid=6662776"><img alt="" src="images/icon1.png" /></a>
            <a href="https://twitter.com/search?q=%40contacsourcepro&amp;src=typd"><img alt="" src="images/icon2.png" /></a>
            <a href="https://www.facebook.com/pages/Sourcepro/1417484901834703"><img alt="" src="images/icon3.png" /></a>
            <a href="https://www.youtube.com/"><img alt="" src="images/icon4.png" /></a>
            <br />
 
       </div> <br />
     <div>  <strong>SourcePro</strong> &copy; 2014 </div>
          
        </div>
        
    </div>
 </div>

<script type="text/javascript"> Cufon.now(); </script>


<?php
if(isset($_POST['sub']))
{
$fname=$_POST['fname'];
$co_name=$_POST['co_name'];
$email_address=$_POST['email_address'];
$textarea=$_POST['textarea'];


$subject = "Contact Us Form - Sourcing Pro";

$message='';
$message.='<html>
<head>

<title>Contact Us Form</title>

</head>

<body><table width="100%" border="2" align="center" cellpadding="" cellspacing="5">
                                  <tr>
								    <td>Name : </td>
                                    <td height="40" align="center" valign="middle">'.$fname.'</td>
                                  </tr>
                                  <tr>
								    <td>Company Name : </td>
                                    <td height="40" align="center" valign="middle">'.$co_name.'</td>
                                  </tr>
                                  <tr>
								    <td>Email Address : </td>
                                    <td height="40" align="center" valign="middle">'.$email_address.'</td>
                                  </tr>
								  <tr>
								   <td>Message : </td>
                                    <td height="40" align="center" valign="middle">'.$textarea.'</td>
                                  </tr>
                                </table>
</body>
</html>';


   //$headers .='Reply-To: '. $to . "\r\n" ;
 $headers = 'From:<prasad_yenpure@keyresourcing.com>' . "\r\n" ;
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
   
    $headers .= 'To: Sourcing Pro <mayur_tandale@keyresourcing.com>' . "\r\n";
  // $headers .= 'Cc: jasmine_joseph@keyresourcing.com' . "\r\n";
   //$headers .= 'Bcc: yusuf_pathan@keyresourcing.com' . "\r\n";

 
if( mail($to, $subject, $message, $headers))
	{ 
		echo "The email has been sent!";		
	}else
	{
		echo "The email has failed!";
	}
}

?>

</body>
</html>



