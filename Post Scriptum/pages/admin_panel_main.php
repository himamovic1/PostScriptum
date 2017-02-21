<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.9, maximum-scale=1, user-scalable=no">
	<meta name="description" content="Post Scriptum novinski portal pocetna">
	<meta name="keywords" content="sarajevo,vijesti,novine,portal">

	<title>Post Scriptum - Admin Panel</title>

	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style_admin_panel.css">
</head>
<body>
    <header>
    	<!-- Navigation bar -->
		<nav class="navbar navbar-default navbar-fixed-top main-nav">
		  <div class="container">

		    <!-- Logo and toggle -->
		    <div class="navbar-header">
		      <a href="#"><img class="navbar-brand" src="../icons/postscriptumlogo.svg"></a>
		      <ul class="nav navbar-nav">
					<li><a href="lifestyle.php">Kontakt</a></li>
					<li><a href="lifestyle.php">Pomoć</a></li>
				</ul>
		    </div>
		  </div><!-- /.container -->
		</nav>
    </header>
   
	<!-- Main content -->
	<div class="container hidden-xs">
		<!-- Side bar -->
	    <aside id="sidebar">
			<ul class="clearfix">
				<li><img src="../img/usr_default.gif" width="60" height="60" class="img-circle"></li>
				<li style="padding-left: 1.2em;"><h4>John Doe</h4><p>Administrator</p></li>
			</ul>
			<ul class="nav nav-stacked">
				<li class="active"><a href="#"><span class="glyphicon glyphicon-cog"></span>Korisnički profil<span class="sr-only">(current)</span></a></li>
				<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>Pregled vijesti</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-user"></span>Pregled korisnika</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-font"></span>Dodaj vijest</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-log-out"></span>Odjava</a></li>
			</ul>
	    </aside>

		<div id="content-holder">
			<h2>Postavke korisničkog profila</h2>
			<p>U ovoj sekciji možete upravljati osnovnim informacijama Vašeg profila.</p>

			<!-- Change username section -->
			<section class="profile-section">
				<form class="form-horizontal" id="registration-form">
					<h4>Promjeni korisničko ime</h4>
					<p>Za promjenu korisničkog imena potrebno je unijeti trenutno korisničko ime a zatim novo korisničko ime koje će u budućnosti biti korišteno.</p>

					<h5 style="margin-top: 2em;">Trenutno korisničko ime:</h5>
					<!-- Username -->
					<div class="form-group">
						<div class="inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-eye-open"></i></span>
								<input type="text" class="form-control" name="username" id="username" placeholder="Korisničko ime" required>
							</div>
						</div>
					</div>

					<h5>Novo korisničko ime:</h5>
					<!-- Username -->
					<div class="form-group">
						<div class="inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-eye-open"></i></span>
								<input type="text" class="form-control" name="username" id="username" placeholder="Korisničko ime" required>
							</div>
						</div>
					</div>

					<h5>Šifra:</h5>
					<!-- Password -->
					<div class="form-group">
						<div class="inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input type="password" class="form-control" name="password" id="password" placeholder="Šifra" required>
							</div>
						</div>
					</div>

					<button type="submit" class="btn btn-success" style="margin-top: 1em; margin-bottom: 2em;">Potvrdi</button>
				</form>
			</section>

			<!-- Change password section -->
			<section class="profile-section">
				<form class="form-horizontal" id="registration-form">
					<h4>Promjeni šifru profila</h4>
					<p>Za promjenu šifre profila potrebno je unijeti trenutnu šifru a zatim novu šifru koja će u budućnosti biti korištena.</p>

					<h5 style="margin-top: 2em;">Trenutna šifra:</h5>
					<!-- Password -->
					<div class="form-group">
						<div class="inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input type="password" class="form-control" name="password" id="password" placeholder="Šifra" required>
							</div>
						</div>
					</div>

					<h5>Nova šifra:</h5>
					<!-- Password -->
					<div class="form-group">
						<div class="inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input type="password" class="form-control" name="password" id="password" placeholder="Šifra" required>
							</div>
						</div>
					</div>

					<button type="submit" class="btn btn-success" style="margin-top: 1em; margin-bottom: 2em;">Potvrdi</button>
				</form>
			</section>
		</div>
	</div>

	<div class="container hidden-lg hidden-md hidden-sm" style="margin-top: 200px; text-align: center;">Ovaj sadržaj nije dostupan na ovoj veličini ekrana!</div>

	<!-- Additional JavaScript files -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"></script>
	<script src="../js/javascript.js"></script>
	<script src="../js/form_validation.js"></script>
</body>
</html>