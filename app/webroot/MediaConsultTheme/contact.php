<?php  
 //If the form is submitted  
 if(isset($_POST['submit'])) {  
  
     //Check to make sure that the name field is not empty  
     if(trim($_POST['contactname']) == '') {  
         $hasError = true;  
     } else {  
        $name = trim($_POST['contactname']);  
     }  
     //Check to make sure that the subject field is not empty  
    if(trim($_POST['subject']) == '') {  
         $hasError = true;  
     } else {  
         $subject = trim($_POST['subject']);  
     }  
   
    //Check to make sure sure that a valid email address is submitted  
    if(trim($_POST['email']) == '')  {  
         $hasError = true;  
     } else if (!preg_match("/^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$/i", trim($_POST['email']))) {  
         $hasError = true;
     } else {  
         $email = trim($_POST['email']);  
     }  
 
    //Check to make sure comments were entered  
     if(trim($_POST['message']) == '') {  
         $hasError = true;  
    } else {  
        if(function_exists('stripslashes')) {  
             $comments = stripslashes(trim($_POST['message']));  
       } else {  
            $comments = trim($_POST['message']);  
        }  
     }  
  
    //If there is no error, send the email  
     if(!isset($hasError)) {  
        $emailTo = 'youremail@yoursite.com'; //Put your own email address here  
        $body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments:\n $comments";  
        $headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;  
  
        mail($emailTo, $subject, $body, $headers);  
        $emailSent = true;  
 }  
}  
?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/index.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" />
<!--[if IE 6]>
	<link href="css/ie6.css" type="text/css" rel="stylesheet" />

    <script src="js/dd_belated_png.js"></script>
	<script>DD_belatedPNG.fix('#logo a, .h-box-1 img, .h-box-2 img, .brochure img');</script>  
<![endif]-->

<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jqueryslidemenu.js"></script>
<script type="text/javascript" src="js/slideswitch.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="js/slimbox2.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>  
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script src="js/Liberation_Sans_400.font.js" type="text/javascript"></script>
<script type="text/javascript">
	Cufon.replace('h1');
	Cufon.replace('h2');	
	Cufon.replace('h3');
	Cufon.replace('h4');	

	$(document).ready(function(){  
		 $("#contactform").validate();  
	});  						   	
</script>

<title>contact</title>
</head>

<body>
<div id="body-wrapper">
    <div class="clearfix">
        <div id="logo">
            <a href="homepage.html">Media consult logo</a>
            <p class="logo-desc">your attractive and simple slogan</p>
        </div>
        <form action="#" method="post">
            <fieldset class="search-fieldset">
                <input type="text" class="search-input" value="search" name="search" />
                <input type="submit" value="" class="input-arrow" />
            </fieldset>
        </form>
    </div>	
    
    <div class="main-menu-wrapper">
        <div id="myslidemenu" class="jqueryslidemenu">
            <ul class="primary-menu">
                <li><a href="homepage.html">Home</a></li>
                <li><a href="about_us.html">About Us</a></li>
                <li><a href="services.html">Services</a>
                	<ul>
                        <li><a href="#">Corporate Publishing</a></li>
                        <li><a href="#">Interactive &amp; Onscreen Production</a></li>	
                        <li><a href="#">Advertising</a></li>   
                        <li><a href="#">Event Management</a></li>   
                        <li><a href="#">Integrated Communications</a></li>                                                                    
                        <li><a href="#">Public Relations</a></li>                                                  
                    </ul>
                </li>
                <li><a href="#">Page Types</a>
                    <ul>
                        <li><a href="homepage.html">Index Page</a></li>
                        <li><a href="about_us.html">About Us</a></li>	
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="#">Blog - submenu entry</a>
                            <ul>
                                <li><a href="blog_itemlist.html">Blog Item List</a></li>
                                <li><a href="blog_detail.html">Blog Item Detail</a></li>
                            </ul>                
                        </li>
                        <li><a href="#">Other pages - submenu entry</a>
                            <ul>
                                <li><a href="article_detail.html">Article Detail</a></li>                    
                                <li><a href="news_list.html">News Page</a></li>                                                
                                <li><a href="services.html">Our Services</a></li>                                                                        
                                <li><a href="portfolio.html">Portfolio</a></li>                                                          
                                <li><a href="contact.php">Contact</a></li>   
                            </ul>                          
                        </li>                                         
                    </ul>
                </li>
                <li><a href="blog_itemlist.html">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>

    <div id="left">
		<div class="interior-header">
        	<h2>Contact</h2>
            <p class="intheader-paragraph">
                Have a question? Want to leave feedback or just say hi? Please don’t hesitate to complete the form below if you want to 
                discuss ways we could help you reach your objectives.
            </p>
        </div>
        <div class="interior-content">
        	<p>
                Ad officiis percipitur theophrastus quo, ubique impedit ancillae per eu, pri natum tritani copiosae in. Civibus molestie deseruisse mea an, sumo omittam adolescens has te. Atqui luptatum pro ei, his eu regione sensibus necessitatibus.
            </p>
        	<p>
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
            </p>
            
			 <?php if(isset($hasError)) { //If errors are found ?>
                <div class="contact-error">
                	<p>Please check if you've filled all the fields with valid information. Thank you.</p>
                </div>
            <?php } ?>
            
            <?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
            	<div class="contact-success">
                    <p>
                        <strong>Your message has been sent!</strong><br />
                        Thank you <strong><?php echo $name;?></strong> for emailing us! We will get in touch with you soon.
                    </p>
                </div>
            <?php } ?>  
                     
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="contactform"><!-- Contact form -->
            	<fieldset class="contact-fieldset">
           			<h3>Send us a message</h3>
                	<ul>
                    	<li>
                        	<label for="contactname">Your Name:</label>
                            <input type="text" name="contactname" id="contactname" value="" class="contact-input required" />
                        </li>
                    	<li>
                        	<label for="email">Email:</label>
                            <input type="text" id="email" name="email" class="contact-input required email" />
                        </li>     
                    	<li>
                        	<label for="subject">Subject:</label>
                            <input type="text" name="subject" id="subject" class="contact-input required" />
                        </li>
						<li>
                        	<label for="message">Your message:</label>
                            <textarea rows="6" cols="40" id="message" name="message" class="contact-textarea required"></textarea>
                        </li>
                        <li>
                        	<input type="submit" value="Send message" name="submit" class="contact-submit" />
                        </li>                      
                    </ul>
                </fieldset>
            </form>
                 
		</div>
        
    </div>
    <div id="right">
		<div class="address-box"><!-- address & map section -->
        	<h3>Map</h3>
            <a rel="lightbox" title="blog detail image" href="img/map_big.jpg">
            	<img src="img/map_small.jpg" width="282" height="134" alt="" class="img-border map-img" />
            </a>
            <span class="map-txt">Click on the map to view a larger image.</span>
        	<h3>Address</h3>            
            <address>
            	<span>
                    27 Tollit essent vituperata<br />
                    UK, London
				</span>
                <span>
                    Phone: 123 456 789<br />
                    Fax: 123 456 799<br />
                    Website: <a href="#">http://mediaconsult.com</a><br />
                    Email: <a href="#">info@mediaconsult.com</a> 
                </span>
            </address>
        </div>
        
        <div class="newsletter"><!-- newsletter section -->
			<h3>Sign up for Newsletter</h3>
            <form action="#" method="post">
            	<fieldset class="newsletter-fieldset">
                    <input type="text" class="newsletter-input" value="Your email address" name="newsletter" />
                    <input type="submit" value="" class="input-arrow" />
                </fieldset>
            </form>
            <p>We will keep you up to date with news, events and other great features.</p>
        </div>
    	
        <div class="brochure"><!-- brochure section -->
        	<a href="#"><img src="img/pdf_icon.png" width="43" height="53" alt="" /></a>
            <div class="brochure-title">
                <h3>Media Consult brochure</h3>
                <p class="header-desc">Download our PDF brochure</p>
            </div>            
        </div>
              
    </div>  
    <div id="footer">
    	<ul>
        	<li><a href="homepage.html">Home</a></li>
        	<li><a href="about_us.html">About Us</a></li>
        	<li><a href="services.html">Services</a></li>
        	<li><a href="portfolio.html">Case Studies</a></li>
        	<li><a href="news_list.html">News</a></li>
        	<li><a href="contact.php">Contact</a></li>                                                            
        </ul>
        <div class="copyright">&copy; 2009 <a href="#">Media Consult</a>. All rights reserved.</div>
    </div>  
</div>

<script type="text/javascript">
$(document).ready(function(){					   
	$(".brochure").click(function(){//makes entire area "brochure" clickable
    	window.location=$(this).find("a").attr("href");return false;
	});	
	
});
</script>
</body>
</html>
