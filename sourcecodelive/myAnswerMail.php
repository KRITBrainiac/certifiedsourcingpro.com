<?php 


$fname=$_POST['fname'];
$email_address=$_POST['email_address'];
$contact_no=$_POST['contact_no'];
$ans1 = isset($_POST['ans1'])?$_POST['ans1']:'-';
$ans2 = isset($_POST['ans2'])?$_POST['ans2']:'-';
$ans3 = isset($_POST['ans3'])?$_POST['ans3']:'-';
$ans4 = isset($_POST['ans4'])?$_POST['ans4']:'-';
$ans5 = isset($_POST['ans5'])?$_POST['ans5']:'-';
$ans6 = isset($_POST['ans6'])?$_POST['ans6']:'-';
$ans7 = isset($_POST['ans7'])?$_POST['ans7']:'-';
$ans8 = isset($_POST['ans8'])?$_POST['ans8']:'-';
$ans9 = isset($_POST['ans9'])?$_POST['ans9']:'-';
$ans10 = isset($_POST['ans10'])?$_POST['ans10']:'-';


$subject = "Thank you for answering Contest - SourcePro";
	$message='';
	$message.='<html>
	<head>
	<title></title>
	</head>
	<body><table width="80%" border="0" align="left" cellpadding="" cellspacing="5">
										
									  
										
				<tr>
				  <td>Name : '.$fname.' </td>
			    </tr>
				<tr>
				  <td>Contact No : '.$contact_no.' </td>
			    </tr>
			    <tr>
				  <td>Email : '.$email_address.' </td>
			    </tr>

				<br><br>

				<tr>
				  <td><h3>Q1. Find out the name of a Sales Manger working in TVS (but for a Reseller) in Pune. Also find out 
				  the name of the dealer he works for. (To confirm, their Office is situated on a major Highway) [Result not on Linkedin]</h3>  </td>
			    </tr>
				
					<tr>
					<td> Ans : '.$ans1.'</td>
					</tr>
					<br>
				
				<tr>
				  <td><h3>Q2. Find out a list of people of a Non IIT workshop which has a list of a Lecturer from Annamalai University. On the same list there is a lady scientist.
				   Find which Institute is she associated with & her name contact details in the same document.</h3> </td>
			    </tr>
					
					<tr>
					<td> Ans : '.$ans2.'</td>
					</tr>	
					<br>				 
									 
				<tr>
				  <td><h3>Q3. On Linkedin there is a Sales/Marketing personnel from Hyderabad from Hotel Industry. He was in a different City previously where he was involved with Theater/Acting. 
				  At the same place he completed his Graduation. Find out which City he was in and what degree did he receive? </h3> </td>
			    </tr>					  
						
						<tr>
							<td> Ans : '.$ans3.'</td>
						</tr>	
						<br>		
									  
				<tr>
				  <td><h3>Q3. On Linkedin there is a Sales/Marketing personnel from Hyderabad from Hotel Industry. He was in a different City previously where he was involved with Theater/Acting. 
				  At the same place he completed his Graduation. Find out which City he was in and what degree did he receive? </h3> </td>
			    </tr>
				
						<tr>
							<td> Ans : '.$ans4.'</td>
						</tr>	
						<br>	
											  
				<tr>
				  <td><h3> Q5. An IT professional used to work in Amdocs – Pune as a Subject Matter Expert. He is currently in New Delhi. 
				      His Skills are - Servlets, Struts. His current Job title is Team Leader. Find his current Employer. [Linkedin] </h3> </td>
			    </tr>				
						
						<tr>
							<td> Ans : '.$ans5.'</td>
						</tr>	
						<br>
						
				<tr>
				  <td> <h3> Q6. Number of Foreigners who live in Pune and speak Cantonese on Facebook? </h3> </td>
			    </tr>		
						
						<tr>
							<td> Ans : '.$ans6.'</td>
						</tr>
						<br>
				
				<tr>
				  <td><h3> Q7. How many people on Facebook have their Designation listed as Java developer and work at Infosys in Bangalore? </h3> </td>
			    </tr>		
				
						<tr>
							<td> Ans : '.$ans7.'</td>
						</tr>
						<br>
					
				<tr>
				  <td><h3> Q8. How many software Engineers &android.have Twitter profile and have listed Bangalore as their City?</h3></td>
			    </tr>	
				
						<tr>
							<td> Ans : '.$ans8.'</td>
						</tr>
						<br>
									
				<tr>
				  <td><h3> Q9. How many company secretaries have twitter profile and Listed Kolkata as their City?</h3> </td>
			    </tr>
				
						<tr>
							<td> Ans : '.$ans9.'</td>
						</tr>
						<br>						  
					
				<tr>
				  <td><h3> Q10. Find an IT Alumni list of a Technical College in Sangli which offers various courses including Automobile Engineering.
                      In that document there are is a person placed and working as a Analyst. But the company mentioned there is a previous company as he has moved to Fiserv after that. Find his Name, & Personal Email and if possible his tel no.</h3> </td>
			    </tr>
				
						<tr>
							<td> Ans : '.$ans10.'</td>
						</tr>
						<br>						 
									
									
									</table>
	</body>
	</html>';
	
	
	   //$headers .='Reply-To: '. $to . "\r\n" ;
	   
	   $headers = 'From:SourcePro Team<training@certifiedsourcingpro.com>' . "\r\n" ;
	   $headers .= "MIME-Version: 1.0\r\n";
	   $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	   //$headers .= 'To: Sourcing Pro <mayur_tandale@keyresourcing.com>' . "\r\n";
	   $headers .= 'Bcc: chinmay@certifiedsourcingpro.com' . "\r\n";
	   //$headers .= 'cc: chinmay_chavan@keyresourcing.com' . "\r\n";
	  
	  //$headers .= 'Bcc: yusuf_pathan@keyresourcing.com' . "\r\n";

	   $to=$email_address;
	
		if(mail($to, $subject, $message, $headers)){		
		echo 1;
		}else{ echo 0; }
		
		exit;
	


?>