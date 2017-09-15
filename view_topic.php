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


<?php

$host="aerobotirxforum.mysql.db"; // Host name 
$username="aerobotirxforum"; // Mysql username 
$password="Amrihsshin12"; // Mysql password 
$db_name="aerobotirxforum"; // Database name 
$tbl_name="fquestions"; // Table name 

// Connect to server and select databse.
$link = mysqli_connect("$host","$username","$password","$db_name");
 mysqli_select_db($link,"$db_name");

// get value of id that sent from address bar 
$id=$_GET['id'];
$sql="SELECT * FROM $tbl_name WHERE id='$id'";
$result=mysqli_query($link ,$sql);
$rows=mysqli_fetch_array($result);
?>

<table width="600" border="0" align="center" cellpadding="0" cellspacing="1" style="bgcolor:#b3daff; border:solid 0px #000000;">
<tr>
<div style="padding-left:100px;padding-top:5px;"><a href="main_forum.php" class="btn btn-info" role="button">Retour aux Sujets</a></div>
</tr>
<tr>
<td bgcolor="#FFFFFF"><img src="images/topic.png" alt="some_text" style="width:60px;height:50px;"></td>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF" style="border:solid 1px #000000;">
<tr>
<td bgcolor="#b3daff"><strong><?php echo $rows['topic']; ?></strong></td>
</tr>

<tr>
<td bgcolor="#b3daff"><?php echo $rows['detail']; ?></td>
</tr>

<tr>
<td bgcolor="#b3daff"><strong>Par :</strong> <?php echo $rows['name']; ?> <strong>Email : </strong><?php echo $rows['email'];?></td>
</tr>

<tr>
<td bgcolor="#b3daff"><strong>Date/temps : </strong><?php echo $rows['datetime']; ?></td>
</tr>
</table></td>
</tr>
</table>
<BR>

<?php

$tbl_name2="fanswer"; // Switch to table "forum_answer"
$sql2="SELECT * FROM $tbl_name2 WHERE question_id='$id'";
$result2=mysqli_query($link ,$sql2);
while($rows=mysqli_fetch_array($result2)){
?>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" style="border:solid 0px #000000;">
<tr>
<td bgcolor="#FFFFFF" width="60px"><img src="images/user.png" alt="some_text" style="width:60px;height:60px;"></td>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" style="border:solid 1px #6699ff;">
<tr>
<td bgcolor=" #e6ffcc"><strong>ID</strong></td>
<td bgcolor="#e6ffcc">:</td>
<td bgcolor="#e6ffcc"><?php echo $rows['a_id']; ?></td>
</tr>
<tr>
<td width="18%" bgcolor="#e6ffcc"><strong>Nom</strong></td>
<td width="5%" bgcolor="#e6ffcc">:</td>
<td width="77%" bgcolor="#e6ffcc"><?php echo $rows['a_name']; ?></td>
</tr>
<tr>
<td bgcolor="#e6ffcc"><strong>Email</strong></td>
<td bgcolor="#e6ffcc">:</td>
<td bgcolor="#e6ffcc"><?php echo $rows['a_email']; ?></td>
</tr>
<tr>
<td bgcolor="#e6ffcc"><strong>Réponse</strong></td>
<td bgcolor="#e6ffcc">:</td>
<td bgcolor="#e6ffcc"><?php echo $rows['a_answer']; ?></td>
</tr>
<tr>
<td bgcolor="#e6ffcc"><strong>Date/Temps</strong></td>
<td bgcolor="#e6ffcc">:</td>
<td bgcolor="#e6ffcc"><?php echo $rows['a_datetime']; ?></td>
</tr>
</table></td>
</tr>
</table><br>
 
<?php
}

$sql3="SELECT view FROM $tbl_name WHERE id='$id'";
$result3=mysqli_query($link ,$sql3);
$rows=mysqli_fetch_array($result3);
$view=$rows['view'];
 
// if have no counter value set counter = 1
if(empty($view)){
$view=1;
$sql4="INSERT INTO $tbl_name(view) VALUES('$view') WHERE id='$id'";
$result4=mysqli_query($link ,$sql4);
}
 
// count more value
$addview=$view+1;
$sql5="update $tbl_name set view='$addview' WHERE id='$id'";
$result5=mysqli_query($link ,$sql5);
mysqli_close($link);
?>

<BR>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="add_answer.php">
<td>

<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td width="18%"><strong>Nom</strong></td>
<td width="3%">:</td>
<td width="79%"><input name="a_name" type="text" id="a_name" size="45"></td>
</tr>
<tr>
<td><strong>Email</strong></td>
<td>:</td>
<td><input name="a_email" type="text" id="a_email" size="45"></td>
</tr>
<tr>
<td valign="top"><strong>Réponse</strong></td>
<td valign="top">:</td>
<td><textarea name="a_answer" cols="45" rows="3" id="a_answer"></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input name="id" type="hidden" value="<?php echo $id; ?>"></td>
<td><input type="submit" name="Submit" value="Post"> <input type="reset" name="Submit2" value="Vider"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<hr color="red">
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