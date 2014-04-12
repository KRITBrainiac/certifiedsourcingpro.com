<?php
/*echo "<pre>";
print_r($_POST);
echo "</pre>";
exit;*/
$cid='';
$con = mysql_connect("mysql401.opentransfer.com", "respons_keyr", "Locked1243");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("respons_kr02", $con);?>
  
 
 <?php /*?> $result = mysql_query("SELECT * FROM candidates WHERE email_address ='".$_POST['email_address']."' ");
  		 <!--If want to add update by email ID-->
	if( mysql_num_rows($result) > 0) {
		$row=mysql_fetch_array($result);
		
		echo "<pre>";
		print_r($row);
		echo "</pre>".$row['cid'];
	
	 $sql_upd ="UPDATE candidates SET first_name = '".$_POST['first_name']."',
	 last_name = '".$_POST['last_name']."', 
	 location = '".$_POST['location']."',
	 contact_no = '".$_POST['contact_no']."', 
	 position = '".$_POST['position']."', 
	 company_name = '".$_POST['company_name']."'
     WHERE cid = '".$row['cid']."' ";
	 
	 if (!mysql_query($sql_upd,$con))
	{
		die('Error: ' . mysql_error());
	}
	 sendmail();
	 echo "0";exit;
	
	}else{ <?php */?> 
    
    
<?php	

//echo $tdate;exit;
$tdate = '2014-04-18';

  $sql="INSERT INTO candidates_free(first_name, last_name, email_address, location, contact_no, position, company_name, tdate)
   VALUES(
    '".$_POST['first_name']."',
	'".$_POST['last_name']."',
	'".$_POST['email_address']."',
	'".$_POST['location']."',
	'".$_POST['contact_no']."',
	'".$_POST['position']."',
	'".$_POST['company_name']."',
	'".$tdate."')";
	
	
	
	if (!mysql_query($sql,$con))
	{
		die('Error: ' . mysql_error());
	}
		sendmail();
		echo "1";exit;

  //}//End of else

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
$tdate='2014-04-18';

$subject = "Thank you for your Registration - SourcePro";
	$message='';
	$message.='<html>
	<head>
	<title></title>
	</head>
	<body><table width="80%" border="0" align="left" cellpadding="" cellspacing="5">
										
									  Dear '.$first_name.' '.$last_name.',	
									  <br><br>
										<tr>
										<td>Please register for Introduction to Boolean Search on Apr 18, 2014 7:00 PM IST at: </td>
									  </tr>
									  <br><br>
									 https://attendee.gotowebinar.com/register/8473977154887984642
									 
									  <p>
									  We would discuss how Boolean search can be included in finding candidates.
									  We will share and discuss different Boolean search strings on Google which would help us in generating more candidates.
									  </p>
									
									  After registering, you will receive a confirmation email containing information about joining the webinar.
									  
									  <tr><td>&nbsp;</td></tr>
									  
									  <tr>
										<td colspan="2">Brought to you by GoToWebinar® <br>Webinars Made Easy® </td>
									  </tr>
									 
									</table>
	</body>
	</html>';
	
	
	   //$headers .='Reply-To: '. $to . "\r\n" ;
	   
	   $headers = 'From:SourcePro Team<training@certifiedsourcingpro.com>' . "\r\n" ;
	   $headers .= "MIME-Version: 1.0\r\n";
	   $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	   //$headers .= 'To: Sourcing Pro <mayur_tandale@keyresourcing.com>' . "\r\n";
	   $headers .= 'Bcc: mayur_tandale@keyresourcing.com' . "\r\n";
	  
	  //$headers .= 'Bcc: yusuf_pathan@keyresourcing.com' . "\r\n";

	   $to=$email_address;
	
		mail($to, $subject, $message, $headers);
	
}//End of function sendmail()
 
 /*End of Email*/
 
//mysql_close($con);

?>
