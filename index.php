<!DOCTYPE HTML>
<html lang="en">
<head>
<title>EVO- Fullscreen site launch</title>
<meta charset="UTF-8" >
<meta name="Description" content="EVO is a fullscreen background images site launch">
<!-- GOOGLE API FONTS -->
<link href='http://fonts.googleapis.com/css?family=Lato:400,100,300,700|Over+the+Rainbow' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/master.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
 <script type="text/javascript" src="js/images.js"></script>  
<!-- JQUERY COUNTDOWN-Change here your launch site date -->
<script type="text/javascript" src="js/countdown/jquery.countdown.js"></script>
<script type="text/javascript">
$(function () {
	var austDay = new Date();
	austDay = new Date(austDay.getFullYear() + 1, 8-12, 01);
	$('#defaultCountdown').countdown({until: austDay});
});
</script>
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="css/ie.css">
<![endif]-->
</head>

<body>
<div id="pattern_1">
	<!--Arrow Navigation-->
	<a id="prevslide" class="load-item"></a>
	<a id="nextslide" class="load-item"></a>
	<div id="slidecaption_wp"><div id="slidecaption"></div></div><!--Slide captions displayed here-->
</div><!--End pattern-->	
	
<div id="main_wp">
    <div class="container">
    <div class="content">
          <img src="img/logo.png" width="86" height="46" alt="Your logo" id="logo"><!--Your logo-->
          <h1>We are working on a new site<span>Please don't forget to check when launch</span></h1>
          <p>Lorem ipsum dolor sit amet, et odio sit ut hendrerit justo quis, proin pellentesque condimentum tincidunt, eget duis. </p>
      </div> 
      <div class="msg">Coming soon</div>
      <div id="defaultCountdown"></div><!--Count down-->
      <div class="clr"></div>
    </div> 
</div>
<!-- Newsletter -->
<?php
if (!count($_POST)){
?>
<div id="newsletter_wp">
<div id="newsletter">
<h3>Please join to our newsletter</h3>
			<div id="form_bg">
						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="myform" >
                            <input type="text" name="Email" value="Your email" class="required email" onBlur="if (this.value == '') { this.value = 'Your email';}" onFocus="if (this.value == 'Your email') {this.value = '';}">
                            <button type="submit" class="send_bt">Subscribe</button>
                        </form>
			</div>   
</div>
</div><!-- End Newsletter -->
<?php
	}else{
?>
<!-- START SEND MAIL SCRIPT -->
<div id="success">Email Sent!</div>
	<?php
	$mail = $_POST['email'];

	/*$subject = "".$_POST['subject'];*/
	$to = "info@ansonika.com";/*write your email*/
	$subject = "Message from EVO";
	$headers = "From: EVO Newsletter <noreply@evo.com>";
	$message = "Please notify me when site launch  \n";
	$message .= "\nEmail: " . $_POST['Email'];
	//Receive Variable
	$sentOk = mail($to,$subject,$message, $headers);
	}
	?>								
	<!-- END SEND MAIL SCRIPT -->    
<div id="trigger_wp"><a class="trigger" href="#">Newsletter</a></div><!-- Newsletter Button -->
 <div id="footer_wp">
 <div id="footer">
    	<p>© 2012 -  Template by <a href="#">Ansonika</a>. </p>
        <ul id="follow">
        	<li><a href="#" id="tw">Twitter</a></li>
            <li><a href="#" id="fb">Facebook</a></li>
        </ul>
        <div class="clr"></div>
    </div></div><!-- End footer-->
</body>
</html>
