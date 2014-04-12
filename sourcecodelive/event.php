<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Events - Source Pro</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />

<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 


<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<link href="css/nav.css" rel="stylesheet" type="text/css" />


<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
<link rel="stylesheet" href="fullcalendar-1.6.4/fullcalendar/fullcalendar.css" type="text/css" /><!--For Calender-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><!--For Calender-->
<script src="fullcalendar-1.6.4/fullcalendar/fullcalendar.js" type="text/javascript"></script><!--For Calender-->

  <script src="js/cufon-yui.js" type="text/javascript"></script>
  <script src="js/cufon-replace.js" type="text/javascript"></script>
  <script src="js/Futura_Lt_BT_400.font.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/backgroundPosition.js" ></script>   
  <script type="text/javascript" src="js/script.js"></script>     
  <script type="text/javascript" src="js/jquery.easing.1.3.js" ></script>
  <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
   
  <script>
  
$(document).ready(function()
{

    $('#calendar').fullCalendar({
       header: {
				right: ''
			},
			
	    events: [
		
		{//For Free Webinar
		 
            title: 'Webinar 1',
            start: '2014-04-18',
			//end: '2014-04-14',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration_free.php?m=5&d=2014-04-18'
        },
		
		/*{
            title: 'Webinar 2',
            start: '2014-04-25',
			//end: '2014-04-14',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration_free.php?m=5&d=2014-04-25'
        },
		
		{
            title: 'Webinar 3',
            start: '2014-05-09',
			//end: '2014-04-14',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration_free.php?m=5&d=2014-05-09'
        },
		
		{
            title: 'Webinar 4',
            start: '2014-05-23',
			//end: '2014-04-14',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration_free.php?m=5&d=2014-05-23'
        },
		
		{
            title: 'Webinar 5',
            start: '2014-06-06',
			//end: '2014-04-14',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration_free.php?m=5&d=2014-06-06'
        },*/
	  
	  /* {
            title: 'testLink',
            start: '2014-04-14',
			//end: '2014-04-14',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration_free.php?m=5&d=2014/04/14'
        },
	   */
	   
	   {//For Training 1 - May 2014
		
			id:'1',
            title: 'BasicPro',
            start: '2014-05-13',
			//end: '2014-04-04',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration.php?m=1&d=<?PHP echo base64_encode("2014-05-13");?>'
        },
        // other events here
		 {
			id:'2',
            title: 'ResearchPro',
            start: '2014-05-14',
			//end: '2014-04-14',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration.php?m=2&d=<?PHP echo base64_encode("2014-05-14");?>'
        },
		
		{
			id:'3',
            title: 'SocialPro',
            start: '2014-05-15',
			//end: '2014-04-10',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration.php?m=3&d=<?PHP echo base64_encode("2014-05-15");?>'
        },
		
		{
			id:'4',
            title: 'HeadhuntPro',
            start: '2014-05-16',
			//end: '2014-04-17',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration.php?m=4&d=<?PHP echo base64_encode("2014-05-16");?>'
        },
		
		/*{
            title: 'Onsite Training - Schedule',
            start: '2014-04-18',
			//end: '2014-04-20',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration.php'
			
        }*/
		
		//For Training 2- May 2014
		{
			id:'1',
            title: 'BasicPro',
            start: '2014-05-27',
			//end: '2014-04-04',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration.php?m=1&d=<?PHP echo base64_encode("2014-05-27");?>'
        },
		
		{
			id:'2',
            title: 'ResearchPro',
            start: '2014-05-28',
			//end: '2014-04-14',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration.php?m=2&d=<?PHP echo base64_encode("2014-05-28");?>'
        },
		
		{
			id:'3',
            title: 'SocialPro',
            start: '2014-05-29',
			//end: '2014-04-10',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration.php?m=3&d=<?PHP echo base64_encode("2014-05-29");?>'
        },
		
		{
			id:'4',
            title: 'HeadhuntPro',
            start: '2014-05-30',
			//end: '2014-04-17',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration.php?m=4&d=<?PHP echo base64_encode("2014-05-30");?>'
        },
		
		 //For Training 3 - June 2014
		{
			id:'1',
            title: 'BasicPro',
            start: '2014-06-17',
			//end: '2014-04-04',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration.php?m=1&d=<?PHP echo base64_encode("2014-06-17");?>'
        },
		
		{
			id:'2',
            title: 'ResearchPro',
            start: '2014-06-18',
			//end: '2014-04-14',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration.php?m=2&d=<?PHP echo base64_encode("2014-06-18");?>'
        },
		
		{
			id:'3',
            title: 'SocialPro',
            start: '2014-06-19',
			//end: '2014-04-10',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration.php?m=3&d=<?PHP echo base64_encode("2014-06-19");?>'
        },
		
		{
			id:'4',
            title: 'HeadhuntPro',
            start: '2014-06-20',
			//end: '2014-04-17',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration.php?m=4&d=<?PHP echo base64_encode("2014-06-20");?>'
        }
	
    ],
    eventClick: function(event) {
        if (event.url) {
            window.open(event.url());
            return false;
        }
	 },
	 eventMouseover: function(event, jsEvent, view){
		$( this ).css({
			cursor: "pointer",
			backgroundColor: "#FF3801"
			});
			return false;
		},
		
		eventMouseout : function( event, jsEvent, view ) {
		$( this ).css({
			cursor: "auto",
			backgroundColor: "#858585"
			});
			return false;
		},
	 
	   
    })

//End of calender
	
	$('#calendar_2').fullCalendar({
       header: {
				right: ''
			},
			
	    events: [
		
		{//For Free Webinar
		 
            title: 'Webinar 1',
            start: '2014-04-18',
			//end: '2014-04-14',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration_free.php?m=5&d=2014-04-18'
        },
		
		/*{
            title: 'Webinar 2',
            start: '2014-04-25',
			//end: '2014-04-14',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration_free.php?m=5&d=2014-04-25'
        },
		
		{
            title: 'Webinar 3',
            start: '2014-05-09',
			//end: '2014-04-14',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration_free.php?m=5&d=2014-05-09'
        },
		
		{
            title: 'Webinar 4',
            start: '2014-05-23',
			//end: '2014-04-14',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration_free.php?m=5&d=2014-05-23'
        },
		
		{
            title: 'Webinar 5',
            start: '2014-06-06',
			//end: '2014-04-14',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration_free.php?m=5&d=2014-06-06'
        },*/
	  
	  /* {
            title: 'testLink',
            start: '2014-04-14',
			//end: '2014-04-14',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration_free.php?m=5&d=2014/04/14'
        },
	   */
	   
	   {//For Training 1 - May 2014
		
			id:'1',
            title: 'BasicPro',
            start: '2014-05-13',
			//end: '2014-04-04',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration.php?m=1&d=<?PHP echo base64_encode("2014-05-13");?>'
        },
        // other events here
		 {
			id:'2',
            title: 'ResearchPro',
            start: '2014-05-14',
			//end: '2014-04-14',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration.php?m=2&d=<?PHP echo base64_encode("2014-05-14");?>'
        },
		
		{
			id:'3',
            title: 'SocialPro',
            start: '2014-05-15',
			//end: '2014-04-10',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration.php?m=3&d=<?PHP echo base64_encode("2014-05-15");?>'
        },
		
		{
			id:'4',
            title: 'HeadhuntPro',
            start: '2014-05-16',
			//end: '2014-04-17',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration.php?m=4&d=<?PHP echo base64_encode("2014-05-16");?>'
        },
		
		/*{
            title: 'Onsite Training - Schedule',
            start: '2014-04-18',
			//end: '2014-04-20',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration.php'
			
        }*/
		
		//For Training 2- May 2014
		{
			id:'1',
            title: 'BasicPro',
            start: '2014-05-27',
			//end: '2014-04-04',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration.php?m=1&d=<?PHP echo base64_encode("2014-05-27");?>'
        },
		
		{
			id:'2',
            title: 'ResearchPro',
            start: '2014-05-28',
			//end: '2014-04-14',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration.php?m=2&d=<?PHP echo base64_encode("2014-05-28");?>'
        },
		
		{
			id:'3',
            title: 'SocialPro',
            start: '2014-05-29',
			//end: '2014-04-10',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration.php?m=3&d=<?PHP echo base64_encode("2014-05-29");?>'
        },
		
		{
			id:'4',
            title: 'HeadhuntPro',
            start: '2014-05-30',
			//end: '2014-04-17',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration.php?m=4&d=<?PHP echo base64_encode("2014-05-30");?>'
        },
		
		 //For Training 3 - June 2014
		{
			id:'1',
            title: 'BasicPro',
            start: '2014-06-17',
			//end: '2014-04-04',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration.php?m=1&d=<?PHP echo base64_encode("2014-06-17");?>'
        },
		
		{
			id:'2',
            title: 'ResearchPro',
            start: '2014-06-18',
			//end: '2014-04-14',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration.php?m=2&d=<?PHP echo base64_encode("2014-06-18");?>'
        },
		
		{
			id:'3',
            title: 'SocialPro',
            start: '2014-06-19',
			//end: '2014-04-10',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration.php?m=3&d=<?PHP echo base64_encode("2014-06-19");?>'
        },
		
		{
			id:'4',
            title: 'HeadhuntPro',
            start: '2014-06-20',
			//end: '2014-04-17',
			backgroundColor:'#858585',
            url: 'http://certifiedsourcingpro.com/version1.2/registration.php?m=4&d=<?PHP echo base64_encode("2014-06-20");?>'
        }
	
    ],
    eventClick: function(event) {
        if (event.url) {
            window.open(event.url());
            return false;
        }
	 },
	 eventMouseover: function(event, jsEvent, view){
		$( this ).css({
			cursor: "pointer",
			backgroundColor: "#FF3801"
			});
			return false;
		},
		
		eventMouseout : function( event, jsEvent, view ) {
		$( this ).css({
			cursor: "auto",
			backgroundColor: "#858585"
			});
			return false;
		},
	 
	   
    }).fullCalendar('incrementDate', 0, 1, 0 );
	
	
	//End of calender_2
	
	

  });//End of document.ready()
  
  
  
  </script>
  
  
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
            </li>-->         
</ul>            
        </li>
            
            </li>
            <li><a href="training-structure.html">Training Structure</a>
            
            </li>
            <li><a href="resources.html">Resources</a></li>
            <li><a href="event.php">Events</a></li>
            <li><a href="blog.php">Blogs</a></li>
            <li><a href="faq.html" class="uppercase">FAQs</a></li>
           
            
      </ul>
        </div>
        </div>
		
    
  <div id="content">		
        <div class="indent-main">
        <div class="container bg">
        
          <!-- <div id='calendar'></div><!--For Calender-->
           
          <div style="float:left;"  class="col-1">
                
                <!--Start of First Div-->
       	           <div class="container1" style="width:430px;">
                    
                   <div id='calendar'></div>
                   
   	                </div>
           	          
               <!--End of First Div-->
           	    
                </div>
                <!--<div style="float:left;width:10px;"></div>-->
                
                <div style="float:right;" class="col-1" >
                	<!--<div class="indent">-->
                    
                    
       	          <!--Start of 2nd Div-->
       	            <div class="container1" style="float:right;width:430px;" >
                      
                     <div id='calendar_2'></div>
                         
   	                </div>
                   
                  <!--End of 2nd Div-->    
           	         
       	            <!--</div>-->
	
                   
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



