<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Blog - Source Pro</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />

<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 


<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<link href="css/nav.css" rel="stylesheet" type="text/css" />


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="js/cufon-yui.js" type="text/javascript"></script>
  <script src="js/cufon-replace.js" type="text/javascript"></script>
  <script src="js/Futura_Lt_BT_400.font.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/backgroundPosition.js" ></script>   
  <script type="text/javascript" src="js/script.js"></script>     
  <script type="text/javascript" src="js/jquery.easing.1.3.js" ></script>
  <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
   
 <style >

#header {
	height:244px;
}	
#footer a {
    color: #5B5B5A;
    font-size: 12px;
    line-height: 25px;
    text-decoration: none;
}
#footer .indent-footer1 {
    margin-top: 52px;
    position: absolute;
    text-align: center;
    width: 960px;
}
#header h1 {
    color: #000000;
    font-family: Georgia,"Times New Roman",Times,serif;
    font-size: 1.84em;
    font-style: italic;
    font-weight: normal;
    line-height: 1.2em;
    margin-bottom: 13px;
    padding: 25px 0 0 15px;
	letter-spacing: 0.2px;
}
.uppercase{
	text-transform:none;
</style>
</head>

<body id="page13">
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
            </li>-->         
</ul>            
        </li>
            
            </li>
            <li><a href="training-structure.html">Training Structure</a>
            
            </li>
            <li><a href="resources.html">Resources</a></li>
            <li><a href="event.php">Events</a></li>
            <li><a href="blog.php">Blogs</a></li><li><a href="faq.html" class="uppercase">FAQs</a></li>
           
            
      </ul>
        </div>
        </div>
		
    
  <div id="content">		
        <div class="indent-main">
          <?php 
					// create curl resource 
					$ch = curl_init(); 
			
					// set url 
					curl_setopt($ch, CURLOPT_URL, "http://sourcingadda.ning.com/blog"); 
			
					//return the transfer as a string 
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
			
					// $output contains the output string 
					$output = curl_exec($ch); 
					
					$output = str_replace('class="ningbar cf"','class="ningbar cf" style="display:none;"',$output);
					$output = str_replace('class="site-headerFrame"','class="site-headerFrame" style="display:none;"',$output);
					$output = str_replace('class="content-nav condenseable subnavBar cl"','class="content-nav condenseable subnavBar cl" style="display:none;"',$output);
					$output = str_replace('class="site-body container"','class="site-body container" style="padding:0px;"',$output);
					
					// remove footer
					$output = str_replace('class="site-footerFrame"','class="site-footerFrame" style="display:none;"',$output);
					$output = str_replace('class="module-footer"','class="module-footer" style="display:none;"',$output);
						$output = str_replace('class="button-tiny likeButton"','class="button-tiny likeButton" style="display:none;"',$output);
						
						// update member links
						$output = str_replace('href="/members/','target="new" href="http://sourcingadda.ning.com/members/',$output);
						
					
					echo "$output";
			
					// close curl resource to free up system resources 
					curl_close($ch); 
				  ?>
     
        
          
        </div>
  </div>	 
    <div id="footer">
    	<div class="indent-footer1"> 
        <br />
          <div> 
    <a href="privacy-policy.html"> Privacy policy </a> | 
    <a href="terms-conditions.html">Terms & Conditions</a> | 
    <a href="shipping-policy.html">Delivery & Shipping Policy</a> | 
    <a href="cancellation-policy.html">Cancellation Policy</a> <br />
    <a href="about-certification.html">About Certification </a> |
    <a href="training-structure.html" >Training Structure  </a> |
    <a href="event.php">Events</a> |
    <a href="blog.php">Blogs</a> |
    <a href="resources.html">Resources  </a> |
    <a href="faq.html">FAQS</a>
    <br /> 

        	<a href="#"><img alt="" src="images/icon1.png" /></a>
            <a href="https://twitter.com/search?q=%40contacsourcepro&src=typd"><img alt="" src="images/icon2.png" /></a>
            <a href="https://www.facebook.com/certifiedsourcingpro"><img alt="" src="images/icon3.png" /></a>
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



