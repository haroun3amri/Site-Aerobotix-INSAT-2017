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
<body background="images/bg2.jpg">

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


<div style="padding-left:500px;"><h2><font color="purple">Forum Club AeRobotiX</font></h2></div>


<?php

$host="aerobotirxforum.mysql.db"; // Host name 
$username="aerobotirxforum"; // Mysql username 
$password="Amrihsshin12"; // Mysql password 
$db_name="aerobotirxforum"; // Database name 
$tbl_name="fquestions"; // Table name 

// Connect to server and select databse.
$link = mysqli_connect("$host","$username","$password","$db_name");
 mysqli_select_db($link,"$db_name");

$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
// OREDER BY id DESC is order result by descending

$result=mysqli_query($link ,$sql);

?>

<table  class="table table-striped">
<tr>
<td colspan="5" align="left" bgcolor="#E6E6E6"><a href="new_topic.php"><strong>Créer nouveau sujet</strong> </a></td>
<td  align="center"><a href="new_topic.php"><img src="images/plus.png" alt="some_text" style="width:20px;height:20px;"></a></td>
</tr>
<tr>
<td width="6%" align="center" bgcolor="#E6E6E6"><strong></strong></td>
<td width="2%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
<td width="40%" align="center" bgcolor="#E6E6E6"><strong>Sujets</strong></td>
<td width="10%" align="center" bgcolor="#E6E6E6"><strong>Vues</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Réponses</strong></td>
<td width="18%" align="center" bgcolor="#E6E6E6"><strong>Date/Temps</strong></td>
</tr>

<?php
 
// Start looping table row
while($rows = mysqli_fetch_array($result)){
?>
<tr>
<td bgcolor="#FFFFFF"><img src="images/topic.png" alt="some_text" style="width:30px;height:30px;"></td>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
<td align="center" bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['view']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['reply']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
</tr>

<?php
// Exit looping and close connection 
}
mysqli_close($link);
?>


</table>
</br></br>



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
	<html>