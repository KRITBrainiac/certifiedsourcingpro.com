<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Registration - Source Pro</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />

<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<link href="css/nav.css" rel="stylesheet" type="text/css" />

<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
  
  <script src="js/cufon-yui.js" type="text/javascript"></script>
  <script src="js/cufon-replace.js" type="text/javascript"></script>
  <script src="js/Futura_Lt_BT_400.font.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/backgroundPosition.js" ></script>   
  <script type="text/javascript" src="js/script.js"></script>     
  <script type="text/javascript" src="js/jquery.easing.1.3.js" ></script>
  <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
   
   <!--For Ajax-->
  <script>
 
	$(document).ready(function(){ 
		$('#submit').click(function(){
			var valid=validateForm();
			if(valid){
			var myValues = new Array();
			myValues[$(this).attr('first_name')] = $(this).val();
				   myValues[$(this).attr('last_name')] = $(this).val();
				   myValues[$(this).attr('email_address')] = $(this).val();
				   myValues[$(this).attr('location')] = $(this).val();
				   myValues[$(this).attr('contact_no')] = $(this).val();
				   myValues[$(this).attr('position')] = $(this).val();
				   myValues[$(this).attr('company_name')] = $(this).val();
				   myValues[$(this).attr('discount')] = $(this).val();

					var var_form_data = $('#form2').serialize();   

					$('#form2').submit();
					
			}//End of ifvalid()
			
            return false;
		
        });//End of .click function
	 
		
		
		// manage module onload
		<?PHP if(isset($_GET['m']) && !empty($_GET['m']) || isset($_GET['d']) && !empty($_GET['d']) ){?>
		changeSecond(<?=$_GET['m'];?>,<?=$_GET['d'];?>);
		<?PHP }else{ ?>
		changeSecond(1);
		<?PHP } ?>
		
	});//End of document.ready()
  </script>
  <!--For Ajax-->
  
  
  <!--For Ajax-->
  <script>
  <?php /*?> test(<?=$_GET['d'];?>)<?php */?>
  /*function test(id)
  { 
	 alert(id) 
	 }*/
		function changeSecond(objVs,dvsv){	
		
		
			$.ajax({
			   type: "POST",
			   url: "http://certifiedsourcingpro.com/version1.2/moduleData.php",
			   data: "tdate="+dvsv+"&pro_module="+objVs+"&matchfn="+Math.random(), 
			   dataType: 'html',
			   success: function(data){
				//alert(dvsv);
				$("#mod").html(data);
				return false;
               }//End of succes msg function
			});	
            return false;
		}//End of changeSecond
 </script>
  <!--For Ajax-->
  
  
  <!--Start For Validation-->
  <script>
  $(document).ready(function(){
		  
  $("#contact_no").keydown(function(event){
			// Allow: backspace, delete, tab, escape, and enter
			if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || 
				 // Allow: Ctrl+A
				(event.keyCode == 65 && event.ctrlKey === true) || 
				 // Allow: home, end, left, right
				(event.keyCode >= 35 && event.keyCode <= 39)){
					 // let it happen, don't do anything
					 return;
			}
			else {
				// Ensure that it is a number and stop the keypress
				if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )){
					event.preventDefault(); 
				}   
			}
  	});//End of #contact_no
	
	
	$("#first_name, #last_name ").keydown(function(event){
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
  
   
   function validateForm(){
   var isValid = true; 
   
   /*For First Name*/
     var un = $('#first_name').val().trim();
       if(!un && un.length <= 0){
         isValid = false;
         $('#msg_first_name').html('Please provide First Name').show();
       }else{
         $('#msg_first_name').html('').hide();
     }
	 
	 /*For last Name*/
	  var un = $('#last_name').val().trim();
       if(!un && un.length <= 0){
         isValid = false;
         $('#msg_last_name').html('Please provide Last Name').show();
       }else{
         $('#msg_last_name').html('').hide();
     }
	 
	 /*For Company Name*/
	  var un = $('#company_name').val().trim();
       if(!un && un.length <= 0){
         isValid = false;
         $('#msg_company_name').html('Please provide Company Name').show();
       }else{
         $('#msg_company_name').html('').hide();
     }
	
	 
	//For Contact No
	 var un = $('#contact_no').val();
       if(!un && un.length <= 0){
         isValid = false;
         $('#msg_contact_no').html('Please provide Contact Number').show();
       }else if(un.length < 10 || un.length >10){
		   isValid = false;
		   $('#msg_contact_no').html('Please provide 10 Digit Number').show();
		   }
	   else{
         $('#msg_contact_no').html('').hide();
     }
	 
	 
	 //validate email  email
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
		 
		  
	  /*For Location*/
	  /*var un = $('#location').val().trim();
       if(!un && un.length <= 0){
         isValid = false;
         $('#msg_location').html('Please provide Location').show();
       }else{
         $('#msg_location').html('').hide();
     }*/
	 
	 /*For Position*/
	 /* var un = $('#position').val().trim();
       if(!un && un.length <= 0){
         isValid = false;
         $('#msg_position').html('Please provide Position Name').show();
       }else{
         $('#msg_position').html('').hide();
     }*/
	 
	 /*For Discount Code*/
	  /*var un = $('#discount').val();
       if(!un && un.length <= 0){
         isValid = false;
         $('#msg_discount').html('Please provide Discount code').show();
       }else{
         $('#msg_discount').html('').hide();
     }*/
	 
	  /*For Module PRO*/
	 /* var un = $('#pro_module').val();
       if(!un && un.length <= 0){
         isValid = false;
         $('#msg_pro_module').html('Please provide Module').show();
       }else{
         $('#msg_pro_module').html('').hide();
     }*/
	
	  if(!isValid){
	  		alert('Please fill all the mandatory details!!!');
	  } 
		 
   return isValid;

 }
 
 function isValidEmailAddress(emailAddress){
	   var n=emailAddress.lastIndexOf(".");
		var result = emailAddress.substring(n + 1);
		if(result.length>0 && result.length<4){
			 var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
	  return pattern.test(emailAddress);
		
		}else{
			return false;
		}
    } 
	
	</script>	
    
	<style>
	#submit{
		    background-color: #FFFFFF !important;
			border: none !important;
			font-size: 150% !important;
			padding-bottom: 5% !important;
			text-decoration:none !important;
	}
	#submit:hover{
		color:#FF3801 !important;
	}
	</style>
		
		<!--End of Validation-->
        
 
</head>

<body id="page14">
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
        <a href="index.html"><img alt="" src="images/logol.png" class="logo" /></a>
<!--        <a href="#" id="rss" class="rss"><img alt="" src="images/rss.gif" /></a>
-->        
  <div class="menu">      
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
            <li><a href="blog.php">Blogs</a></li>
            <li><a href="faq.html">FAQS</a></li>
           
            
      </ul>
        </div>
        </div>
		
    
  <div id="content">		
        <div class="indent-main">
        <h2> Registration </h2>
     <div class="formtext">
        
        <div class="container">
        
        <div class="col-3">
                       <!-- <img src="images/register.png" alt="register"  />--></div>
        
                <div class="col-1">
                <form action="registration_submit.php" id="form2" name="form2" method="post" novalidate="novalidate">
       	            <div class="container1">
                   First Name*
           	              <div class="h">
           	                <input  type="text"  id="first_name" name="first_name"  value=""  this.value=''  />
 							&nbsp;<span id="msg_first_name" style="color:#F00; margin-left:105px;"></span>
      	                  </div>
                               E-mail*   	              
                           <div class="h">
           	                <input  type="text" id="email_address" name="email_address" value=""  this.value=''  />
       	                    &nbsp;<span id="msg_email_address" style="color:#F00; margin-left:105px;"></span>   
                          </div>
                            Company Name*      	              
                           <div class="h">
           	                <input  type="text" id="company_name"  name="company_name" value=""  this.value='' />
       	                 &nbsp;<span id="msg_company_name" style="color:#F00; margin-left:105px;"></span>
                          </div>
                          
                            Position        	              
                            <div class="h">
           	                <input type="text" id="position"  name="position" value=""  this.value=''  />
       	                  &nbsp;<span id="msg_position" style="color:#F00; margin-left:105px;"></span>
                          </div>
                         Date
                           <div id="mod" class="h">
                            <?php /*?><?php if($row=="tdate"){echo 'selected=selected';}?> <?php */?>
                           
						   <?php echo "<select id=\"t_date\" name=\"t_date\">"; ?>
						   <?php foreach($new_array as $row){ ?>
							   <option value="<?php echo $row; ?>"><?php echo $row; ?></option>
						   <?php }
						   echo "</select>";
						    ?>
                            
<?php /*?><select id="t_date" name="t_date" >
  <option id="1" value="2014-05-13" <?php $d=$_GET['d'];if($d=="2014-05-13"){echo 'selected=selected';} ?>>13-05-2014</option>
  <option id="2" value="2014-05-14" <?php $d=$_GET['d'];if($d=="2014-05-14"){echo 'selected=selected';} ?>>14-05-2014</option>
  <option id="3" value="2014-05-15" <?php $d=$_GET['d'];if($d=="2014-05-15"){echo 'selected=selected';} ?>>15-05-2014</option>
  <option id="4" value="2014-05-16" <?php $d=$_GET['d'];if($d=="2014-05-16"){echo 'selected=selected';} ?>>16-05-2014</option>
  
  <option id="1" value="2014-05-27" <?php $d=$_GET['d'];if($d=="2014-05-27"){echo 'selected=selected';} ?>>27-05-2014</option>
  <option id="2" value="2014-05-28" <?php $d=$_GET['d'];if($d=="2014-05-28"){echo 'selected=selected';} ?>>28-05-2014</option>
  <option id="3" value="2014-05-29" <?php $d=$_GET['d'];if($d=="2014-05-29"){echo 'selected=selected';} ?>>29-05-2014</option>
  <option id="4" value="2014-05-30" <?php $d=$_GET['d'];if($d=="2014-05-30"){echo 'selected=selected';} ?>>30-05-2014</option>

  <option id="1" value="2014-06-17" <?php $d=$_GET['d'];if($d=="2014-06-17"){echo 'selected=selected';} ?>>17-06-2014</option>
  <option id="2" value="2014-06-18" <?php $d=$_GET['d'];if($d=="2014-06-18"){echo 'selected=selected';} ?>>18-06-2014</option>
  <option id="3" value="2014-06-19" <?php $d=$_GET['d'];if($d=="2014-06-19"){echo 'selected=selected';} ?>>19-06-2014</option>
  <option id="4" value="2014-06-20" <?php $d=$_GET['d'];if($d=="2014-06-20"){echo 'selected=selected';} ?>>20-06-2014</option>
  
</select>  <?php */?>       

</div>                
                      
        	              <div class="container">

                     <a href="javascript:void(0);" id="submit" name="submit">Submit</a><!--uncomment for ajax call-->
                      </div>
   	                  </div>
           	      
                </div>
                
                <div class="col-2">
                	<div class="indent">
                    
                    
       	          
       	            <div class="container1">
                         Last Name*
           	              <div class="h">
           	                <input  type="text"  id="last_name" name="last_name" value=""  this.value=''  />
       	                  &nbsp;<span id="msg_last_name" style="color:#F00; margin-left:105px;"></span>
                          </div>
                      Contact Number*
           	              <div class="h">
           	                <input  type="text" id="contact_no"  name="contact_no" value=""  this.value='' />
       	                    &nbsp;<span id="msg_contact_no" style="color:#F00; margin-left:105px;"></span>
                          </div>
                           Location
                           <div class="h">
						<input  type="text" id="location"  name="location" value="" this.value='' />
       	                 &nbsp;<span id="msg_location" style="color:#F00; margin-left:105px;"></span>
							</div>
                          Module
           	             <div class="h">
    <select id="pro_module" name="pro_module" onchange="changeSecond(this.value)">
  <option value="1" <?php $m=$_GET['m'];if($m==1){echo 'selected=selected';}?>>BasicPro</option>
  <option value="2" <?php $m=$_GET['m'];if($m==2){echo 'selected=selected';}?>>ResearchPro</option>
  <option value="3" <?php $m=$_GET['m'];if($m==3){echo 'selected=selected';}?>>SocialPro</option>
  <option value="4" <?php $m=$_GET['m'];if($m==4){echo 'selected=selected';}?>>HeadhuntPro</option>

						</select>  
                         &nbsp;<span id="msg_pro_module" style="color:#F00; margin-left:105px;"></span>   
                          </div>
                          Discount Code
           	              <div class="h">
           	                <input  type="text" id="discount" name="discount" value=""  this.value=''  />
       	                  &nbsp;<span id="msg_discount" style="color:#F00; margin-left:105px;"></span> 
                          </div>
           	              
   	                  </div>
           	          </form>
       	            </div><!--End of container-->
                </div><!--End of form text-->

                   
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
    <a href="cancellation-policy.html">Cancellation Policy</a><br />
    <a href="index.html">About Certification </a> |
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
</body>
</html>



