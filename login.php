


<?php
// on teste si le visiteur a soumis le formulaire de connexion
if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
	if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) {

	$host="aerobotirxforum.mysql.db"; // Host name 
$username="aerobotirxforum"; // Mysql username 
$password="Amrihsshin12"; // Mysql password 
$db_name="aerobotirxforum"; // Database name 
$tbl_name="membre"; // Table name 

// Connect to server and select database.
$base = mysqli_connect("$host","$username","$password","$db_name");
 mysqli_select_db($base,"$db_name");
	


	// on teste si une entrée de la base contient ce couple login / pass
	$sql = 'SELECT count(*) FROM membre WHERE login="'.mysqli_escape_string($base,$_POST['login']).'" AND pass_md5="'.mysqli_escape_string($base,md5($_POST['pass'])).'"';
	$req = mysqli_query($base,$sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error());
	$data = mysqli_fetch_array($req);

	mysqli_free_result($req);
	mysqli_close($base);

	// si on obtient une réponse, alors l'utilisateur est un membre
	if ($data[0] == 1) {
		session_start();
		$_SESSION['login'] = $_POST['login'];
		header('Location: membre.php');
		
		exit();
	}
	// si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
	elseif ($data[0] == 0) {
		$erreur = '<h1><font color="red">Compte non reconnu.</font></h1>';
	}
	// sinon, alors la, il y a un gros problème :)
	else {
		$erreur = 'Probème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.';
	}
	}
	else {
	$erreur = 'Au moins un des champs est vide.';
	}
}
?>
<!DOCTYPE html>
<html>
<head>


<title>Inscription</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="Badge Sign In Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<!-- //web font -->
<link href="images/favicon.png" rel="icon"/>
    <link href="libraries/bootstrap/bootstrap.min.css" rel="stylesheet"/>
    <linK href="libraries/owl-carousel/owl.carousel.css" rel="stylesheet"/> <!-- Core Owl Carousel CSS File  *	v1.3.3 -->
    <linK href="libraries/owl-carousel/owl.theme.css" rel="stylesheet"/> <!-- Core Owl Carousel CSS Theme  File  *	v1.3.3 -->
	<link href="libraries/fonts/font-awesome.min.css" rel="stylesheet"/>
	<link href="libraries/fonts/elegant/elegant-icon.css" rel="stylesheet"/>
	<link href="libraries/animate/animate.min.css" rel="stylesheet"/>
	<link href="libraries/lightbox2/css/lightbox.css" rel="stylesheet"/>

	<link href="libraries/video/YTPlayer.css" rel="stylesheet"/>

 <link href="css/components.css" rel="stylesheet"/>
	<link href="css/header.css" rel="stylesheet"/>
	<link href="style.css" rel="stylesheet"/>
	<link href="css/media.css" rel="stylesheet"/>

<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300italic,300,100italic,100,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'

</head>

<body>

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
						<li><a href="index.html#brag-about-section"><font size="4" color="white">A propos</font></a></li>
						<li><a href="index.html#service-section"><font size="4" color="white">Menu</font></a></li>
						<li><a href="index.html#map-section"><font size="4" color="white">Nous visiter</font></a></li>
						<li><a href="index.html#project-section"><font size="4" color="white">Contact</font></a></li>
						<li><a href="https://docs.google.com/forms/d/e/1FAIpQLSfuhTqW5HPhpQ_G4TYGvuhO52WkBlVRnWkosYmjP_P780_YlQ/viewform"><font size="4" color="white">Inscription</font></a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</nav>
		</div>
	</header>
	<!-- Header Section Over -->
	
<!-- main -->
	<div class="main"> 
		<h1 style="color:white;">Se connecter  !</h1> 
		<div class="login-form"> 
			<h2>Authentifiez Vous!</h2> 
			<div class="agileits-top">
<form action="login.php" method="post">
<div class="styled-input"> <input type="text" name="login" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>"><label>Login :</label><br /></div>
<div class="styled-input"><input type="password" name="pass" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>"><label>Password :</label><br /></div>
<div class="agileits-bottom">

<input type="submit" name="connexion" value="Connexion">
</div>
</form></div>

<div style="padding-left:190px;"><a href="inscription.php" class="btn btn-info" role="button">Vous inscrire</a></div>

<?php
if (isset($erreur)) echo '<br /><br />',$erreur;
?>

</div>
</div>




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
	
	<!-- Light Box -->
	
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