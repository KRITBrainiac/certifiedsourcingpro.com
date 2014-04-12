<?php

$fname=$_POST['fname'];
$co_name=$_POST['co_name'];
$email_address=$_POST['email_address'];
$contact_no=$_POST['contact_no'];
$textarea=$_POST['textarea'];


$subject = "Contact Us Form - Sourcing Pro";

$message='';
$message.='<html>
<head>

<title>Contact Us Form</title>

</head>

<body><table width="80%" border="0" align="center" cellpadding="" cellspacing="5">
                                  
								  <tr>
								    <td colspan="2">Hi, <p> Message from contac us page.</p></td>
                                  </tr>
								   <tr>
								    <td>&nbsp;</td>
                                    <td height="40" align="left" valign="middle">&nbsp;</td>
                                  </tr>
								  <tr>
								    <td>Name : </td>
                                    <td height="40" align="left" valign="middle">'.$fname.'</td>
                                  </tr>
                                  <tr>
								    <td>Company Name : </td>
                                    <td height="40" align="left" valign="middle">'.$co_name.'</td>
                                  </tr>
                                  <tr>
								    <td>Email Address : </td>
                                    <td height="40" align="left" valign="middle">'.$email_address.'</td>
                                  </tr>
								  <tr>
								    <td>Contact No : </td>
                                    <td height="40" align="left" valign="middle">'.$contact_no.'</td>
                                  </tr>
								  <tr>
								   <td>Message : </td>
                                    <td height="40" align="left" valign="middle">'.$textarea.'</td>
                                  </tr>
                                </table>
</body>
</html>';


   //$headers .='Reply-To: '. $to . "\r\n" ;
   $headers = 'From:'.$fname.'<'.$email_address.'>' . "\r\n" ;
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
   
  $headers .= 'To: Sourcing Contact Us <anil_shelke@keyresourcing.com>' . "\r\n";
  $headers .= 'Cc: jasmine_joseph@keyresourcing.com' . "\r\n";
  $headers .= 'Bcc: yusuf_pathan@keyresourcing.com' . "\r\n";

 
if(mail($to, $subject, $message, $headers))
	{ 
		echo "1";exit;		
	}else
	{
		echo "0";exit;
	}


?>

