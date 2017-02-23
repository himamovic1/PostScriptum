<!DOCTYPE html>

<html lang="bs">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.9, maximum-scale=1, user-scalable=no">
	<meta name="description" content="Post Scriptum novinski portal pocetna">
	<meta name="keywords" content="sarajevo,vijesti,novine,portal">

	<title>Post Scriptum - Registracija</title>

	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.min.css">
	<link rel="stylesheet" href="../css/style.css">
</head>

<body>
	<!-- Header -->
	<header>
		<!-- Banner -->
		<div class="banner">
			<h1>Post scriptum</h1>
		</div>

		<!-- Navigation bar -->
		<nav class="navbar navbar-default main-nav">
		  <div class="container">

		    <!-- Logo and toggle -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a href="index.php"><img class="navbar-brand" src="../icons/postscriptumlogo.svg"></a>
		    </div>

		    <!-- Navigation content -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Početna</a></li>
					<li><a href="top_price.php">Top priče</a></li>
					<li><a href="kolumne.php">Kolumne</a></li>
					<li><a href="vijesti.php">Vijesti</a></li>
					<li><a href="politika.php">Politika</a></li>
					<li><a href="sport.php">Sport</a></li>
					<li><a href="lifestyle.php">Lifestyle</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right separator-vertical">
					<!-- Search box -->
					<li>
						<form>
							<a href="" class="glyphicon glyphicon-search search-box-top" style="color: #ccc;"></a>							
							<input type="text" class="search-box-top hidden-md hidden-sm" placeholder="Unesite pojam pretrage...">
						</form>
					</li>
					<!-- User login/registration button -->
					<li class="login-icon">
						<a href="#"><span class="glyphicon glyphicon-user grey"></span></a>
					</li>
				</ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container -->
		</nav>
	</header>

	<!-- Main Content Container -->
	<div class="container" style="padding: 2em 0 4em 0;">
		<div class="row">
			<div class="col-md-3 col-sm-2 hidden-xs"></div>

			<div class="col-md-6 col-sm-8 col-xs-12">
				<div class="registration-container panel-shadow">
					<div class="form-group">
						<h2 class="bg-title text-center">Prijava na portal</h2>
						<p class="text-center">Hvala Vam što koristite Post Scriptum</p>
					</div>

					<!-- Login form -->
					<form action="login.php" method="POST" class="form-horizontal" id="registration-form">

						<!-- Processing form data -->
						<?php 
							include('../php/aditionalScripts.php');
							session_start();
							
							$username = $password = $errorMsg = '';
							$loginFailed = true;
							if( accessControl() ) {	
								redirect();	// Redirect user to profiles	
							}
							elseif ( isset($_POST['username']) && isset($_POST['password']) ) {
								$username = clearInput($_POST['username']);
								$password = clearInput($_POST['password']);

								if( checkCredentialsAndLogin($username, $password) ) {
									redirect();
								}
								else {
									$errorMsg = "Pogrešni pristupni podaci";
								}
							}
						?>

						<div id="input-fields-group">
							<!-- Username -->
							<div class="form-group">
								<div class="inputGroupContainer">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-eye-open"></i></span>
										<input type="text" class="form-control" name="username" id="username" placeholder="Korisničko ime" required>
									</div>
								</div>
							</div>

							<!-- Password -->
							<div class="form-group">
								<div class="inputGroupContainer">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
										<input type="password" class="form-control" name="password" id="password" placeholder="Šifra" required>
									</div>
								</div>
							</div>
						
							<!-- Error provider -->
							<div class="row">
								<div class="col-d-4"></div>
								<h2 class="col-d-4 sectionHeading" style="color: red"><?php echo $errorMsg; ?></h2>
								<div class="col-d-4"></div>
							</div>
						</div>

						<!-- Login with facebook button -->
						<div class="form-group row">
							<div class="col-md-3 col-sm-2 hidden-xs"></div>
							<button type="submit" class="btn btn-primary center-block col-md-6 col-sm-8 col-xs-12">Facebook prijava</button>
							<div class="col-md-3 col-sm-2 hidden-xs"></div>	
						</div>

						<!-- Submit Button -->
						<div class="form-group row">
							<div class="col-md-3 col-sm-2 hidden-xs"></div>
							<button type="submit" class="btn btn-success center-block col-md-6 col-sm-8 col-xs-12">Prijava</button>
							<div class="col-md-3 col-sm-2 hidden-xs"></div>	
						</div>
					</form>
				</div>		
			</div>

			<div class="col-md-3 col-sm-2 hidden-xs"></div>
		</div>
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
			</div>
		</nav>
	</footer>

	<!-- Additional JavaScript files -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"></script>
	<script src="../js/javascript.js"></script>
	<script src="../js/form_validation.js"></script>
</body>

</html>
