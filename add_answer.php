<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>AeRobotiX- INSAT</title>
	<link href="images/favicon.png" rel="icon"/>
    <link href="libraries/bootstrap/bootstrap.min.css" rel="stylesheet"/>
    <linK href="libraries/owl-carousel/owl.carousel.css" rel="stylesheet"/> 
    <linK href="libraries/owl-carousel/owl.theme.css" rel="stylesheet"/> 
	<link href="libraries/fonts/font-awesome.min.css" rel="stylesheet"/>
	<link href="libraries/fonts/elegant/elegant-icon.css" rel="stylesheet"/>
	<link href="libraries/animate/animate.min.css" rel="stylesheet"/>
	<link href="libraries/lightbox2/css/lightbox.css" rel="stylesheet"/>

	<link href="libraries/video/YTPlayer.css" rel="stylesheet"/>

    <link href="css/components.css" rel="stylesheet"/>
	<link href="css/header.css" rel="stylesheet"/>
	<link href="style.css" rel="stylesheet"/>
	<!--link id="color" href="css/color-schemes/default.css" rel="stylesheet"/-->
    <link href="css/media.css" rel="stylesheet"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5/html5shiv.min.js"></script>
      <script src="js/html5/respond.min.js"></script>
    <![endif]-->

	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300italic,300,100italic,100,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    
</head>
<body>

<!-- Slider Section Over-->
	
	<!-- Header Section -->
	<header id="header-section" class="header-section" >
		<div class="col-md-2 col-sm-2 col-xs-6 logo-block">
			<a href="#top"><img src="images/logo.png" alt="logo" width="500px" height="390px" style="padding-bottom:300px;"/></a>
		</div>
		<div class="col-md-10 col-sm-12 col-xs-12 menu-block">
			<nav class="navbar navbar-default primary-navigation" role="navigation" ">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav pull-right">
						<li><a href="index.html#top"><font size="4" color="white">Accueil</font></a></li>
						<li><a href="index.html#service-section"><font size="4" color="white">Menu</font></a></li>
						<li><a href="index.html#brag-about-section"><font size="4" color="white">A propos</font></a></li>
						<li><a href="index.html#map-section"><font size="4" color="white">Nous visiter</font></a></li>
						<li><a href="index.html#project-section"><font size="4" color="white">Contact</font></a></li>
						<li><a href="https://docs.google.com/forms/d/e/1FAIpQLSfuhTqW5HPhpQ_G4TYGvuhO52WkBlVRnWkosYmjP_P780_YlQ/viewform"><font size="4" color="white">Inscription</font></a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</nav>
		</div>
	</header>
	<!-- Header Section Over -->
	<div style="padding-left:600px;"><img src="images/success.png" alt="some_text" style="width:150px;height:150px;"></div>

<?php

$host="aerobotirxforum.mysql.db"; // Host name 
$username="aerobotirxforum"; // Mysql username 
$password="Amrihsshin12"; // Mysql password 
$db_name="aerobotirxforum"; // Database name 
$tbl_name="fanswer"; // Table name 

// Connect to server and select databse.
$link = mysqli_connect("$host","$username","$password","$db_name");
mysqli_select_db($link,"$db_name");


// Get value of id that sent from hidden field 
$id=$_POST['id'];

// Find highest answer number. 
$sql="SELECT MAX(a_id) AS Maxa_id FROM $tbl_name WHERE question_id='$id'";
 $result=mysqli_query($link ,$sql);
$rows=mysqli_fetch_array($result);

// add + 1 to highest answer number and keep it in variable name "$Max_id". if there no answer yet set it = 1 
if ($rows) {
$Max_id = $rows['Maxa_id']+1;
}
else {
$Max_id = 1;
}

// get values that sent from form 
$a_name=$_POST['a_name'];
$a_email=$_POST['a_email'];
$a_answer=$_POST['a_answer']; 

$datetime=date("d/m/y H:i:s"); // create date and time

// Insert answer 
$sql2="INSERT INTO $tbl_name(question_id, a_id, a_name, a_email, a_answer, a_datetime)VALUES('$id', '$Max_id', '$a_name', '$a_email', '$a_answer', '$datetime')";
 $result2=mysqli_query($link ,$sql2);


if($result2){
echo "<div style='padding-left:520px;'><h1>Post avec Succées</h1></div><BR>";
echo "<div style='padding-left:620px;'><a href='view_topic.php?id=".$id."'>voir votre post</a></div>";


// If added new answer, add value +1 in reply column 
$tbl_name2="fquestions";
$sql3="UPDATE $tbl_name2 SET reply='$Max_id' WHERE id='$id'";
 $result3=mysqli_query($link ,$sql3);

}
else {
echo "ERROR";
}

// Close connection
mysqli_close($link);
?>

<!-- Social Section -->
	<div id="social-section" class="social-main">
		<div class=" icon-social-google no-padding">
			<a href="https://plus.google.com/117683121807467726128/posts"><i class="social_googleplus_circle "></i></a>
		</div>
		<div class="icon-social-insta no-padding">
			<a href="https://www.instagram.com/aerobotix.insat"><i class=" social_instagram_circle"></i></a>
		</div>
		<div class="icon-social-facebook no-padding">
			<a href="https://www.facebook.com/AeRobotix-INSAT-373238529504281"><i class=" social_facebook_circle"></i></a>
		</div>
		<div class="icon-social-youtube no-padding">
			<a href="https://www.youtube.com/channel/UCutANPwFOVyqNo4xMpjkAMg"><i class="social_youtube_circle "></i></a>
		</div>
		
	
	</div>
	<!-- Social Section Over -->
	<!-- Footer Section -->
	<footer id="footer-section" class="footer-section">
		<div class="footer-item">
			<i class="icon_mail_alt"></i>
			<div class="footer-inner">
				<p class="footer-item-title">Email</p>
				<a class="footer-item-desc">aerobotix.insat@gmail.com </a>
			</div>
		</div>
		<div class="footer-item">
			<i class="icon_mobile"></i>
			<div class="footer-inner">
				<p class="footer-item-title">Télephone</p>
				<p class="footer-item-desc">+216 55 718 835</p>
			</div>
		</div>
		<a id="back-to-top" class="back-top pull-right"><i class="arrow_up"></i> Revenir en haut</a>
	</footer>
	<!-- Footer Section -->
	<!-- Hidden iframe for submitting forms -->
	<iframe src="about:blank" name="hidden" class="hide"></iframe>
	
	<!-- jQuery Include -->
	<script src="libraries/jquery.min.js"></script>	
	<script src="libraries/modernizr/modernizr.custom.13711.js"></script>
	<script src="libraries/jquery.easing.min.js"></script><!-- Easing Animation Effect -->

	<script src="libraries/bootstrap/bootstrap.min.js"></script> <!-- Core Bootstrap v3.2.0 -->
	<script src="libraries/bootstrap/ie-emulation-modes-warning.js"></script> <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<script src="libraries/bootstrap/ie10-viewport-bug-workaround.js"></script> <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<!-- Font Elegant -->
		<!--[if lte IE 7]><script src="libraries/fonts/elegant/lte-ie7.js"></script><![endif]-->
	
	<script src="libraries/portfolio-filter/jquery.quicksand.js"></script> <!-- Quicksand v1.4 -->
	<script src="libraries/jquery.superslides.min.js"></script> <!-- Superslides - v0.6.3-wip -->

	<script src="libraries/roundabout.js"></script> <!-- service Rounded slider -->
	<script src="libraries/roundabout_shapes.js"></script> <!-- service Rounded slider -->
	
	<script src="libraries/jquery.animateNumber.min.js"></script> <!-- Used for Animated Numbers -->
	<script src="libraries/jquery.appear.js"></script> <!-- It Loads jQuery when element is appears -->
	<script src="libraries/jquery.knob.js"></script> <!-- Used for Loading Circle -->
	
	<script src="libraries/wow.min.js"></script>
	
	<script src="libraries/owl-carousel/owl.carousel.min.js"></script> <!-- Core Owl Carousel CSS File  *	v1.3.3 -->
	<script src="libraries/video/jquery.mb.YTPlayer.js"></script>

	<script src="libraries/lightbox2/js/lightbox.min.js"></script>
	
	<!-- Customized Scripts -->
	<script src="js/functions.js"></script>
</body>
</html>