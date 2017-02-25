<?php 
	// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
	// ----------------------------------------------------->
	//   Page used for verifing user account registration
	// ----------------------------------------------------->
	// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
	session_start();
	require_once('../php/class.user.php');
	$first = "";
	$second = "";
	$resend = "";

	// logged user cannot have access to this page
	if( isset($_SESSION['logged_user']) )
		header('Location: index.php');

	if( isset($_GET['authkey']) && isset($_GET['id']) ) {
		$user = new User();

		if( !$user->activateAccount($_GET['id'], $_GET['authkey']) )
			$first = "Žao nam je, došlo je do greške ONE.";
		else {
			$first = "Uspješno ste aktivirali Vaš korisnički račun!";
			$second = "Hvala Vam što ste odabrali Post Scriptum portal";
		}
	}
	elseif( isset($_SESSION['reg_mail']) ) {
		$first = "Na Vaš email poslan je link za aktivaciju korisničkog računa.";
		$second = "Molimo Vas da provjerite Vaš inbox.";
		$resend = '<form class="row center-block" method="post" action="aktivacija.php">
					<h3>Ukoliko niste dobili aktivacijski mail, kliknite na dugme ispod.</h3>
					<input type="submit" name="resened" value="Pošalji mail">
				  </form>';
	}
	else {
		$first = "Žao nam je, došlo je do greške.";
	}
	
?>

<!DOCTYPE html>

<html lang="bs">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=0.9, maximum-scale=1, user-scalable=no">
		<meta name="description" content="Post Scriptum novinski portal pocetna">
		<meta name="keywords" content="sarajevo,vijesti,novine,portal">

		<title>Post Scriptum - Aktivacija računa</title>

		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,700" rel="stylesheet">
	</head>

	<body>
		<!-- Header -->
		<header>
			<!-- Top bar -->
			<div id="top-bar" class="container hidden-xs">
				<ul class="row">
					<li><a href="o_nama.html">O nama</a></li>
					<li><a href="impressum.html">Marketing</a></li>
					<li><a href="impressum.html">Kontakt</a></li>
					<li class="navbar-right"><a href="#"><span class="icon-facebook-with-circle"></span></a></li>
					<li class="navbar-right"><a href="#"><span class="icon-twitter-with-circle"></span></a></li>
				</ul>
			</div>

			<!-- Banner -->
			<div class="banner banner-home">
				<h2>Post scriptum</h2>
				<p>Početna</p>
			</div>

			<!-- Navigation bar -->
			<nav class="navbar navbar-default main-nav">
			  <div class="container">

			    <!-- Logo and toggle -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>

			      <a href="index.php"><img class="navbar-brand" src="../icons/postscriptumlogo.svg"></a>      
			    </div>

			    <!-- Navigation content -->
			    <div class="collapse navbar-collapse" id="navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="index.php">Početna <span class="sr-only">(current)</span></a>
						</li>
						<li><a href="top_price.php">Top priče</a></li>
						<li><a href="kolumne.php">Kolumne</a></li>
						<li><a href="vijesti.php">Vijesti</a></li>
						<li class="dropdown">
							<a href="politika.php">Politika</a><button class="dropdown-toggle hidden-md hidden-lg" data-toggle="dropdown"><span class="caret"></span></button>
							<ul class="dropdown-menu">
				                <li><a href="#">Svijet</a></li>
				                <li><a href="#">BiH</a></li>
				                <li><a href="#">Regija</a></li>
				            </ul>
						</li>
						<li class="dropdown">
							<a href="sport.php">Sport</a><button class="dropdown-toggle hidden-md hidden-lg" data-toggle="dropdown"><span class="caret"></span></button>
							<ul class="dropdown-menu">
				                <li><a href="#">Fudbal</a></li>
				                <li><a href="#">Košarka</a></li>
				                <li><a href="#">Zimski sportovi</a></li>
				                <li><a href="#">Ostalo</a></li>
				            </ul>
						</li>
						<li class="dropdown">
							<a href="lifestyle.php">Lifestyle</a><button class="dropdown-toggle hidden-md hidden-lg" data-toggle="dropdown"><span class="caret"></span></button>
							<ul class="dropdown-menu">
				                <li><a href="#">Zdravlje</a></li>
				                <li><a href="#">Moda i ljepota</a></li>
				                <li><a href="#">Film</a></li>
				                <li><a href="#">Muzika</a></li>
				                <li><a href="#">Kultura</a></li>
				            </ul>
						</li>
					</ul>

					<ul id="navbar-right-content" class="nav navbar-nav navbar-right separator-vertical hidden-sm hidden-xs">
						<!-- Search box -->
						<li>
							<form>
								<a href="" class="glyphicon glyphicon-search search-box-top" style="color: #ccc;"></a>							
								<input type="text" class="search-box-top hidden-md hidden-sm" placeholder="Unesite pojam pretrage..." maxlength="65">
							</form>
						</li>

						<!-- User login/registration button -->
						<li id="usr-dropdown" class="login-icon dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" onclick="return up()"><span class="glyphicon glyphicon-user grey"></span></a>
						</li>
					</ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container -->
			</nav>
		</header>


		<!-- Content -->
		<div class="container" style="height: 400px;">
			<div class="row text-center">
				<h4><?php echo $first; ?></h4>
				<p><?php echo $second; ?></p>
			</div>
			<?php echo $resend; ?>
		</div>


		<!-- Footer -->
		<footer>
			<nav class="navbar main-footer">
				<div class="container">
					<div class="navbar-header">
						<a href="index.php"><img class="navbar-brand" src="../icons/postscriptumlogofooter.svg"></a>
					</div>
					<ul class="nav navbar-nav">
						<li><a href="o_nama.html">O nama</a></li>
						<li><a href="impressum.html">Impressum</a></li>
						<li><a href="#">Marketing</a></li>
						<li><a href="#">Dojavi vijest</a></li>
						<li><a href="#">Uslovi korištenja</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right hidden-xs hidden-sm">
						<li><a href="#"><span class="icon-facebook-with-circle"></span></a></li>
						<li><a href="#"><span class="icon-twitter-with-circle"></span></a></li>
					</ul>
			</nav>
			<div class="copyright-container">
				<div class="container">
					<p>&copy;&nbsp;Copyright 2017 Post Scriptum - Sva prava zadržana.</p>
				</div>
			</div>
		</footer>

		<!-- Additional JavaScript files -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="../js/bootstrap.js"></script>
		<script src="../js/javascript.js"></script>
	</body>
</html>