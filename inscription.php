<?php
// on teste si le visiteur a soumis le formulaire
if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {
	
	
$host="aerobotirxforum.mysql.db"; // Host name 
$username="aerobotirxforum"; // Mysql username 
$password="Amrihsshin12"; // Mysql password 
$db_name="aerobotirxforum"; // Database name 
$tbl_name="membre"; // Table name 

      
		
		
    //Custom PDO options.
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
);
 
//Connect to MySQL and instantiate our PDO object.
$pdo = new PDO("mysql:host=$host;dbname=$db_name", $username, $password, $options);
$sql = 'INSERT INTO membre (nom,prenom,age,ville,niveau,filiere,staff,passion,telephone,email,facebook,paiement)VALUES("'.mysqli_escape_string($base,$_POST['nom']).'","'.mysqli_escape_string($base,$_POST['prenom']).'","'.mysqli_escape_string($base,$_POST['age']).'","'.mysqli_escape_string($base,$_POST['ville']).'","'.mysqli_escape_string($base,$_POST['niveau']).'","'.mysqli_escape_string($base,$_POST['filiere']).'","'.mysqli_escape_string($base,$_POST['staff']).'","'.mysqli_escape_string($base,$_POST['passion']).'","'.mysqli_escape_string($base,$_POST['telephone']).'","'.mysqli_escape_string($base,$_POST['email']).'","'.mysqli_escape_string($base,$_POST['facebook']).'","'.mysqli_escape_string($base,$_POST['paiement']).'")';
$statement = $pdo->prepare($sql);

 
 
//Bind our values to our parameters (we called them :make and :model).
$statement->bindValue(':nom', $_POST['nom']);
$statement->bindValue(':prenom', $_POST['prenom']);
$statement->bindValue(':age', $_POST['age']);
$statement->bindValue(':ville', $_POST['ville']);
$statement->bindValue(':niveau', $_POST['niveau']);
$statement->bindValue(':filiere', $_POST['filiere']);
$statement->bindValue(':staff', $_POST['staff']);
$statement->bindValue(':passion', $_POST['passion']);
$statement->bindValue(':telephone', $_POST['telephone']);
$statement->bindValue(':email', $_POST['email']);
$statement->bindValue(':facebook', $_POST['facebook']);
$statement->bindValue(':paiement', $_POST['paiement']);
 
 
//Execute the statement and insert our values.
$inserted = $statement->execute();
 
 
//Because PDOStatement::execute returns a TRUE or FALSE value,
//we can easily check to see if our insert was successful.
if($inserted){
    echo 'Row inserted!<br>';
}




header('Location: membre.php');
		
		
		
		
	
	
	
}
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
var RC2KEY = '6LeO5ykTAAAAAKkvPfVJs_sCWqd_V5koEjaTa_P4',
    doSubmit = false;

function reCaptchaVerify(response) {
    if (response === document.querySelector('.g-recaptcha-response').value) {
        doSubmit = true;
    }
}

function reCaptchaExpired () {
    /* do something when it expires */
}

function reCaptchaCallback () {
    grecaptcha.render('id', {
        'sitekey': RC2KEY,
        'callback': reCaptchaVerify,
        'expired-callback': reCaptchaExpired
    });
}

document.forms['formulaire'].addEventListener('submit',function(e){
    if (doSubmit) {
        /* submit form or do something else */
    }
})
</script>

<title>Inscription</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="Badge Sign In Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="text/javascript" src="validation.js" charset="utf-8"></script>
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
	<script src='https://www.google.com/recaptcha/api.js'></script>
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
						<li><a href="inscription.php"><font size="4" color="white">Inscription</font></a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</nav>
		</div>
	</header>
	<!-- Header Section Over -->
	
	
	
	<div class="main"> 
	<h1 style="color:white;">Rejoignez notre Famille !</h1> 
	<div class="login-form"> 
			<h2>Inscrivez Vous!</h2> 
			<div class="agileits-top">
<form action="inscription.php" method="post"  name="formulaire" onsubmit="return valider ();">
<div class="styled-input"><input type="text" name="nom"  value="<?php if (isset($_POST['nom'])) echo htmlentities(trim($_POST['nom'])); ?>"><label>Nom *: </label><span></span></div>
<div class="styled-input"><input type="text" name="prenom" value="<?php if (isset($_POST['prenom'])) echo htmlentities(trim($_POST['prenom'])); ?>"><label>prenom *: </label></div>
<div class="styled-input2"><label>Age : </label><select name="age">

                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
   <option value="20">20</option>
   <option value="21">21</option>
   <option value="22">22</option>
     <option value="23">23</option>
   <option value="24">24</option>
   <option value="25">25</option>
   <option value="26">26</option>
    <option value="27">27</option>
   <option value="28">28</option>
   <option value="29">29</option>
   <option value="30">30</option>
   <option value="31">31</option>
   <option value="32">32</option>
</select></div> <hr />
<div class="styled-input2"><label>Ville : </label><select name="ville">
   <option value="Tunis">Tunis</option>
   <option value="Sfax">Sfax</option>
   <option value="Sousse">Sousse</option>
   <option value="Kairouan">Kairouan</option>
     <option value="Gabès">Gabès</option>
   <option value="Bizerte">Bizerte</option>
   <option value="Ariana">Ariana</option>
   <option value="Gafsa">Gafsa</option>
     <option value="Kasserine">Kasserine</option>
   <option value="Ben Arous">Ben Arous</option>
   <option value="Monastir">Monastir</option>
   <option value="Médenine">Médenine</option>
    <option value="Tataouine">Tataouine</option>
   <option value="Béja">Béja</option>
   <option value="Nabeul">Nabeul</option>
   <option value="Mahdia">Mahdia</option>
   <option value="Le Kef">Le Kef</option>
   <option value="Jendouba">Jendouba</option>
     <option value="Sidi Bouzid">Sidi Bouzid</option>
	 <option value="Tozeur">Tozeur</option>
	  <option value="La Manouba">La Manouba</option>
	<option value="Siliana">Siliana</option>
	<option value=" Kébili "> Kébili </option>
	<option value="Zaghouan">Zaghouan</option>
</select> </div><hr>
<div class="styled-input2"><label>Niveau : </label><select name="niveau">
   <option value="1 année">1 année</option>
   <option value="2 année">2 année</option>
   <option value="3 année">3 année</option>
   <option value="4 année">4 année</option>
     <option value="5 année">5 année</option>
	 <option value="IMI">Autres</option>
  
   
</select> </div><hr>
<div class="styled-input2"><label>Filiere : </label><select name="filiere">
   <option value="MPI">MPI</option>
   <option value="CBA">CBA</option>
   <option value="BIO">BIO</option>
   <option value="CH">CH</option>
     <option value="GL">GL</option>
	 <option value="RT">RT</option>
   <option value="IIA">IIA</option>
     <option value="IMI">IMI</option>
	  <option value="IMI">Autres</option>
  
   
</select> </div><hr>
<div class="styled-input2"><label>Projets : </label> <br>
  <input type="checkbox" name="staff" value="Projets de compètition"><font color="white"> - Projets de compètition</font><br>
  <input type="checkbox" name="staff" value="Projets d'exposition"><font color="white"> - Projets d'exposition</font><br>
  <input type="checkbox" name="staff" value="Aeroday"><font color="white"> - Aeroday</font><br>
  <input type="checkbox" name="staff" value="Autres"> <font color="white"> - Autres</font>

</div><hr>


<div class="styled-input"><input type="text" name="passion" value="<?php if (isset($_POST['passion'])) echo htmlentities(trim($_POST['passion'])); ?>"><label>Passion : </label></div>
<div class="styled-input"><input type="text" name="telephone" value="<?php if (isset($_POST['telephone'])) echo htmlentities(trim($_POST['telephone'])); ?>"><label>Telephone *:</label> </div>
<div class="styled-input"><input type="text" name="email" value="<?php if (isset($_POST['email'])) echo htmlentities(trim($_POST['email'])); ?>"><label>Email *: </label></div>
<div class="styled-input"><input type="text" name="facebook" value="<?php if (isset($_POST['email'])) echo htmlentities(trim($_POST['email'])); ?>"><label>Lien de votre profil facebook * : </label></div>
<div style="padding-left:50px;" class="g-recaptcha" data-sitekey="6LeO5ykTAAAAAKkvPfVJs_sCWqd_V5koEjaTa_P4"></div>
<br><hr>

<div class="agileits-bottom">
<input type="submit" name="inscription" value="Inscription">
</div>
</form>
</div>
<?php
if (isset($erreur)) echo '<br />',$erreur;
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

<?php

     
     if($_SERVER["REQUEST_METHOD"] === "POST")
     {
         //form submitted

         //check if other form details are correct

         //verify captcha
         $recaptcha_secret = "6LeO5ykTAAAAAHF_haX4xP_edQe9NAS-kc3jQIki";
         $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$_POST['g-recaptcha-response']);
         $response = json_decode($response, true);
         if($response["success"] === true)
         {
             echo "Logged In Successfully";
         }
         else
         {
             echo "You are a robot";
         }
     }
	 ?>
	 
	 <?php
	 function sanitize_string($str) {
	if (get_magic_quotes_gpc()) {
		$sanitize = mysqli_real_escape_string(stripslashes($str));	 
	} else {
		$sanitize = mysqli_real_escape_string($str);	
	} 
	return $sanitize;
}
	 ?>
	 
	 <?php 
        if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
        }
        $secretKey = "6LeO5ykTAAAAAHF_haX4xP_edQe9NAS-kc3jQIki";
        $ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        $responseKeys = json_decode($response,true);
        if(intval($responseKeys["success"]) !== 1) {
          echo '<h2>You are spammer ! Get the @$%K out</h2>';
        } else {
          echo '<h2>Thanks for posting comment.</h2>';
        }
?>
