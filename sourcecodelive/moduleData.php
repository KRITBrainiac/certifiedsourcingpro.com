<?php
//  echo base64_decode($tdate); 

$new_array=array();
	 $basic_array = array("2014-05-13","2014-05-27","2014-06-17");
	 $research_array = array("2014-05-14","2014-05-28","2014-06-18");
	 $social_array = array("2014-05-15","2014-05-29","2014-06-19");
	 $headhunt_array = array("2014-05-16","2014-05-30","2014-06-20"); 



     if($_REQUEST['pro_module']==1)
	 { 
	 $new_array = $basic_array;
	
	  } 
     elseif($_REQUEST['pro_module']==2)
	 {
		 $new_array = $research_array;
		
     } 
	 elseif($_REQUEST['pro_module']==3)
	 {
		 $new_array = $social_array;
		
     } 
	 elseif($_REQUEST['pro_module']==4)
	 {
		 $new_array = $headhunt_array;
		
     }else{
		$new_array = array(''); 
	 }
	 // <?php if($row==tdate){echo 'selected=selected';}
	  
	//echo $_REQUEST['tdate'];
	//echo $row." = ".$selected_date;
	$selected_date = '';
	if( $_REQUEST['tdate'] != 'undefined'){
	$selected_date = base64_decode($_REQUEST['tdate']);
	}

	  ?>
    
    
 <?php echo "<select id='t_date' name='t_date'>"; ?>
						   <?php foreach($new_array as $row){ ?>
							   <option value="<?php echo $row; ?>" <?PHP if($selected_date === $row){ echo 'selected="selected"';} ?>  ><?php echo date('j F Y',strtotime($row));  ?></option>
						   <?php }
						   echo "</select>";
						    ?>