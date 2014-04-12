<?php
ini_set("display_errors",0);
include('dbConnect.php');
$cid='';
$result = mysql_query("SELECT * FROM candidates WHERE email_address ='".$_POST['email_address']."' ");
/*echo "<pre>";
print_r($row);
echo "</pre>".$row['cid'];*/
if( mysql_num_rows($result) > 0){
		$row=mysql_fetch_array($result);
	
	 $sql_upd ="UPDATE candidates SET first_name = '".$_POST['first_name']."',
	 last_name = '".$_POST['last_name']."', 
	 location = '".$_POST['location']."',
	 contact_no = '".$_POST['contact_no']."', 
	 position = '".$_POST['position']."', 
	 company_name = '".$_POST['company_name']."'
     WHERE cid = '".$row['cid']."' ";
	 
	 if (!mysql_query($sql_upd,$con))
	{
		die('Error: upd ' . mysql_error());
	}
	
	$cid = $row['cid'];
	
	//echo "updated";
	
	}else{  
	
	$cid=insert_Candidate($_POST);
	//echo "insert";
		
  }//End of else


//insert training order
if(!empty($cid)){
$t_order_unique_no = uniqid();
$module_query = mysql_query("select * from training_module where t_module_id = ".$_POST['pro_module']." ");
$module_array = mysql_fetch_array($module_query);
$t_module_id = 	$module_array['t_module_id'];	
$t_module_amount = 	$module_array['t_module_amount'];	
$dc_query = mysql_query("select * from discount_code where dc_name = '".$_POST['discount']."' ");
$dc_array = mysql_fetch_array($dc_query);
$dc_id = 	$dc_array['dc_id'];
$dc_name = 	$dc_array['dc_name'];
$t_date = $_POST['t_date'];

$sql2="INSERT INTO training_orders(t_module_id, cid, dc_id, dc_name, t_order_amount, t_date, t_unique_id)
   VALUES(
    '".$t_module_id."',
	'".$cid."',
	'".$dc_id."',
	'".$dc_name."',
	'".$t_module_amount."',
	'".$t_date."',
	'".$t_order_unique_no."')";
	
	if (!mysql_query($sql2))
	{
		die('Error: ' . mysql_error());
	}
	
	$oid = mysql_insert_id();
	//echo $oid ;
}

function insert_Candidate()
{
		$sql="INSERT INTO candidates(first_name, last_name, email_address, location, contact_no, position, company_name)
   VALUES(
    '".$_POST['first_name']."',
	'".$_POST['last_name']."',
	'".$_POST['email_address']."',
	'".$_POST['location']."',
	'".$_POST['contact_no']."',
	'".$_POST['position']."',
	'".$_POST['company_name']."')";
	
	if (!mysql_query($sql))
	{
		die('Error: ' . mysql_error());
	}
	return $cid = mysql_insert_id();
		
}
	
	
	
	
	
	
	
	


/*Start for Email*/
function sendmail()
{

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email_address=$_POST['email_address'];
$location=$_POST['location'];
$contact_no=$_POST['contact_no'];
$position=$_POST['position'];
$company_name=$_POST['company_name'];
$discount=$_POST['discount'];
$pro_module=$_POST['pro_module'];
$date=$_POST['date'];

$subject = "Registration of PRO";

$message='';
$message.='<html>
<head>

<title>Registration Form</title>
</head>

<body>
<table width="100%" border="1" align="left" cellpadding="0" cellspacing="5">
                                  <tr>
								    <td width="20%">First Name :</td>
                                    <td  align="left" valign="middle">'.$first_name.'</td>
                                  </tr>
								  <tr>
								    <td>Last Name :</td>
                                    <td  align="left" valign="middle">'.$last_name.'</td>
                                  </tr>
                                  <tr>
								    <td>Email :</td>
                                    <td  align="left" valign="middle">'.$email_address.'</td>
                                  </tr>
                                  <tr>
								    <td>Location :</td>
                                    <td  align="left" valign="middle">'.$location.'</td>
                                  </tr>
								  <tr>
								   <td>Contact No :</td>
                                    <td  align="left" valign="middle">'.$contact_no.'</td>
                                  </tr>
								  <tr>
								    <td>Position :</td>
                                    <td  align="left" valign="middle">'.$position.'</td>
                                  </tr>
								  <tr>
								    <td>Company Name :</td>
                                    <td  align="left" valign="middle">'.$company_name.'</td>
                                  </tr>
								  <tr>
								    <td>Discount :</td>
                                    <td  align="left" valign="middle">'.$discount.'</td>
                                  </tr>
								  <tr>
								    <td>Module :</td>
                                    <td  align="left" valign="middle">'.$pro_module.'</td>
                                  </tr>
								  <tr>
								    <td>Date :</td>
                                    <td  align="left" valign="middle">'.$date.'</td>
                                  </tr>
                                </table>


</body>
</html>';

$headers = 'From:Certified Sourcing Pro' . "\r\n" ;
  // $headers .='Reply-To: '. $to . "\r\n" ;
 
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
   $headers .= 'To: Sourcing Pro <mayur_tandale@keyresourcing.com>' . "\r\n";
   //$headers .= 'To: Sourcing Pro <contactsourcepro@gmail.com>' . "\r\n";
   //$headers .= 'Cc: jasmine_joseph@keyresourcing.com' . "\r\n";
   //$headers .= 'Bcc: yusuf_pathan@keyresourcing.com' . "\r\n";

  
    
 mail($to, $subject, $message, $headers, '');

}//End of function sendmail
 
 /*End of Email*/
 
//mysql_close($con);
$p_url = 'http://keyresourcing.com/sourcepro29862014/sourceProRequest.php?su='.$t_order_unique_no;
//$p_url = 'http://keyresourcing.com/sourcepro29862014/ccavRequestHandler.php?su='.$t_order_unique_no;
?>


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
  
   /*function submitForm(){
	   var valid = validateForm();
	   if(valid){
		   $('#form2').submit();
		   return true;
	   }else{
		   return false;
	   }
   }*/
 

	
	</script>	
    
	<style>
	#submit{
		    background-color: #F3F2F1 !important;
			border: none !important;
			font-size: 150% !important;
			padding-bottom: 5% !important;
			text-decoration:none !important;
			color:#3B3B3B;
	}
	#submit:hover{
		color:#FF3801 !important;
	}
.formtext{
    background:#f3f2f1;
    margin-left: auto;
    margin-right: auto;
    margin-top: 0;
    padding-bottom: 30px;
    padding-left: 10px;
    padding-top: 10px;
    width: 866px;
}	</style>
		
		<!--End of Validation-->
  
  
  
</head>

<body id="page6">
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
        <div class="container bg">
                <div class="col-1" style="width:900px">
                <h2> Payment options </h2>
                <iframe src="<?php echo $p_url;?>" id="Frame1" width="995px" height="300px" frameborder="0" scrolling="auto" ></iframe>
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




