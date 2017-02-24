<!DOCTYPE html>

<html lang="bs">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.9, maximum-scale=1, user-scalable=no">
	<meta name="description" content="Post Scriptum novinski portal sport">
	<meta name="keywords" content="sarajevo,vijesti,novine,portal,sport">

	<title>Post Scriptum - Kolumne</title>

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
				<li><a href="top_price.php">Marketing</a></li>
				<li><a href="kolumne.php">Kontakt</a></li>
				<li class="navbar-right"><a href="#"><span class="icon-facebook-with-circle"></span></a></li>
				<li class="navbar-right"><a href="#"><span class="icon-twitter-with-circle"></span></a></li>
			</ul>
		</div>

		<!-- Banner -->
		<div class="banner banner-kolumne">
			<h2>Post scriptum</h2>
			<p>Kolumne</p>
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
					<li><a href="index.php">Početna</a></li>
					<li><a href="top_price.php">Top priče</a></li>
					<li class="active"><a href="kolumne.php">Kolumne<span class="sr-only">(current)</span></a></li>
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
	
	<!-- Main Content Container -->
	<div class="container">
		<!-- Category header -->
		<div class="row">
			<div class="category-header-container col-md-9 col-sm-12 col-xs-12 column clearfix">
				<ul>
					<li style="float: left;"><h4><b><a href="#" class="column">Kolumne</a></b></h4></li>
				</ul>
				<div class="separator-full clearfix"></div>
			</div>
			<div class="category-header-container col-md-3 hidden-sm hidden-xs column clearfix">
				<ul>
					<li style="float: left; margin-bottom: 2px;"><h4><b>Ostali članci autora</b></h4></li>
				</ul>
				<div class="separator-full clearfix"></div>
			</div>
		</div>

		<section class="row">
			<!-- Large article -->
			<div class="col-md-9">
				<a href="">
					<div class="row">
						<div class="col-md-5  col-xs-4">
							<img src="../img/img1.png" alt="Article image" class="md-image img-responsive" >
						</div>
						<div class="col-md-7  col-xs-8 md-title-container">
							<small class="column category-outlined">KOLUMNA</small>
							<h4 class="md-title">Organizatori Diplomatskog bazara uručili 130.000 KM za pomoć djeci u BiH</h4>
							
							<p class="hidden-xs">Organizacioni odbor Diplomatskog bazara 2016 danas je dodijelio 130.000 KM dobrotvornim organizacijama za djecu s potrebama iz Bosne i Hercegovine i to je do sada najveći prikupljeni iznos. Organizacioni odbor Diplomatskog bazara 2016 danas je dodijelio 130.000 KM.</p>

							<ul class="time-comments-container">
								<li><small><span class="glyphicon glyphicon-time"></span>09. Februar</small></li>
								<li><small><span class="glyphicon glyphicon-comment"></span>14</small></li>
							</ul>
						</div>
					</div>
				</a>
			</div>

			<!-- Other articles of this author -->
			<div class="article-sm col-md-3 hidden-sm hidden-xs">
				<a href="">
					<div class="row">
						<div class="col-xs-12">
							<small class="column category-outlined">KOLUMNA</small>
							<h5 class="md-title">Koridor 5C kroz Hercegovinu: Ratnom linijom razgraničenja i protiv interesa stanovništva</h5>

							<ul class="time-comments-container">
								<li><small><span class="glyphicon glyphicon-time"></span>09. Februar</small></li>
								<li><small><span class="glyphicon glyphicon-comment"></span>14</small></li>
							</ul>
							<div class="separator-200 clearfix"></div>
						</div>
					</div>
				</a>
				<a href="">
					<div class="row">
						<div class="col-xs-12">
							<small class="column category-outlined">KOLUMNA</small>
							<h5 class="md-title">Koridor 5C kroz Hercegovinu: Ratnom linijom razgraničenja i protiv interesa stanovništva</h5>

							<ul class="time-comments-container">
								<li><small><span class="glyphicon glyphicon-time"></span>09. Februar</small></li>
								<li><small><span class="glyphicon glyphicon-comment"></span>14</small></li>
							</ul>
							<div class="separator-200 clearfix"></div>
						</div>
					</div>
				</a>
			</div>
		</section>

		<section class="row">
			<!-- Large article -->
			<div class="col-md-9">
				<a href="">
					<div class="row">
						<div class="col-md-5  col-xs-4">
							<img src="../img/img1.png" alt="Article image" class="md-image img-responsive" >
						</div>
						<div class="col-md-7  col-xs-8 md-title-container">
							<small class="column category-outlined">KOLUMNA</small>
							<h4 class="md-title">Organizatori Diplomatskog bazara uručili 130.000 KM za pomoć djeci u BiH</h4>
							
							<p class="hidden-xs">Organizacioni odbor Diplomatskog bazara 2016 danas je dodijelio 130.000 KM dobrotvornim organizacijama za djecu s potrebama iz Bosne i Hercegovine i to je do sada najveći prikupljeni iznos. Organizacioni odbor Diplomatskog bazara 2016 danas je dodijelio 130.000 KM.</p>

							<ul class="time-comments-container">
								<li><small><span class="glyphicon glyphicon-time"></span>09. Februar</small></li>
								<li><small><span class="glyphicon glyphicon-comment"></span>14</small></li>
							</ul>
						</div>
					</div>
				</a>
			</div>

			<!-- Other articles of this author -->
			<div class="article-sm col-md-3 hidden-sm hidden-xs">
				<a href="">
					<div class="row">
						<div class="col-xs-12">
							<small class="column category-outlined">KOLUMNA</small>
							<h5 class="md-title">Koridor 5C kroz Hercegovinu: Ratnom linijom razgraničenja i protiv interesa stanovništva</h5>

							<ul class="time-comments-container">
								<li><small><span class="glyphicon glyphicon-time"></span>09. Februar</small></li>
								<li><small><span class="glyphicon glyphicon-comment"></span>14</small></li>
							</ul>
							<div class="separator-200 clearfix"></div>
						</div>
					</div>
				</a>
				<a href="">
					<div class="row">
						<div class="col-xs-12">
							<small class="column category-outlined">KOLUMNA</small>
							<h5 class="md-title">Koridor 5C kroz Hercegovinu: Ratnom linijom razgraničenja i protiv interesa stanovništva</h5>

							<ul class="time-comments-container">
								<li><small><span class="glyphicon glyphicon-time"></span>09. Februar</small></li>
								<li><small><span class="glyphicon glyphicon-comment"></span>14</small></li>
							</ul>
							<div class="separator-200 clearfix"></div>
						</div>
					</div>
				</a>
			</div>
		</section>

		<section class="row">
			<!-- Large article -->
			<div class="col-md-9">
				<a href="">
					<div class="row">
						<div class="col-md-5  col-xs-4">
							<img src="../img/img1.png" alt="Article image" class="md-image img-responsive" >
						</div>
						<div class="col-md-7  col-xs-8 md-title-container">
							<small class="column category-outlined">KOLUMNA</small>
							<h4 class="md-title">Organizatori Diplomatskog bazara uručili 130.000 KM za pomoć djeci u BiH</h4>
							
							<p class="hidden-xs">Organizacioni odbor Diplomatskog bazara 2016 danas je dodijelio 130.000 KM dobrotvornim organizacijama za djecu s potrebama iz Bosne i Hercegovine i to je do sada najveći prikupljeni iznos. Organizacioni odbor Diplomatskog bazara 2016 danas je dodijelio 130.000 KM.</p>

							<ul class="time-comments-container">
								<li><small><span class="glyphicon glyphicon-time"></span>09. Februar</small></li>
								<li><small><span class="glyphicon glyphicon-comment"></span>14</small></li>
							</ul>
						</div>
					</div>
				</a>
			</div>

			<!-- Other articles of this author -->
			<div class="article-sm col-md-3 hidden-sm hidden-xs">
				<a href="">
					<div class="row">
						<div class="col-xs-12">
							<small class="column category-outlined">KOLUMNA</small>
							<h5 class="md-title">Koridor 5C kroz Hercegovinu: Ratnom linijom razgraničenja i protiv interesa stanovništva</h5>

							<ul class="time-comments-container">
								<li><small><span class="glyphicon glyphicon-time"></span>09. Februar</small></li>
								<li><small><span class="glyphicon glyphicon-comment"></span>14</small></li>
							</ul>
							<div class="separator-200 clearfix"></div>
						</div>
					</div>
				</a>
				<a href="">
					<div class="row">
						<div class="col-xs-12">
							<small class="column category-outlined">KOLUMNA</small>
							<h5 class="md-title">Koridor 5C kroz Hercegovinu: Ratnom linijom razgraničenja i protiv interesa stanovništva</h5>

							<ul class="time-comments-container">
								<li><small><span class="glyphicon glyphicon-time"></span>09. Februar</small></li>
								<li><small><span class="glyphicon glyphicon-comment"></span>14</small></li>
							</ul>
							<div class="separator-200 clearfix"></div>
						</div>
					</div>
				</a>
			</div>
		</section>

		<section class="row">
			<!-- Large article -->
			<div class="col-md-9">
				<a href="">
					<div class="row">
						<div class="col-md-5  col-xs-4">
							<img src="../img/img1.png" alt="Article image" class="md-image img-responsive" >
						</div>
						<div class="col-md-7  col-xs-8 md-title-container">
							<small class="column category-outlined">KOLUMNA</small>
							<h4 class="md-title">Organizatori Diplomatskog bazara uručili 130.000 KM za pomoć djeci u BiH</h4>
							
							<p class="hidden-xs">Organizacioni odbor Diplomatskog bazara 2016 danas je dodijelio 130.000 KM dobrotvornim organizacijama za djecu s potrebama iz Bosne i Hercegovine i to je do sada najveći prikupljeni iznos. Organizacioni odbor Diplomatskog bazara 2016 danas je dodijelio 130.000 KM.</p>

							<ul class="time-comments-container">
								<li><small><span class="glyphicon glyphicon-time"></span>09. Februar</small></li>
								<li><small><span class="glyphicon glyphicon-comment"></span>14</small></li>
							</ul>
						</div>
					</div>
				</a>
			</div>

			<!-- Other articles of this author -->
			<div class="article-sm col-md-3 hidden-sm hidden-xs">
				<a href="">
					<div class="row">
						<div class="col-xs-12">
							<small class="column category-outlined">KOLUMNA</small>
							<h5 class="md-title">Koridor 5C kroz Hercegovinu: Ratnom linijom razgraničenja i protiv interesa stanovništva</h5>

							<ul class="time-comments-container">
								<li><small><span class="glyphicon glyphicon-time"></span>09. Februar</small></li>
								<li><small><span class="glyphicon glyphicon-comment"></span>14</small></li>
							</ul>
							<div class="separator-200 clearfix"></div>
						</div>
					</div>
				</a>
				<a href="">
					<div class="row">
						<div class="col-xs-12">
							<small class="column category-outlined">KOLUMNA</small>
							<h5 class="md-title">Koridor 5C kroz Hercegovinu: Ratnom linijom razgraničenja i protiv interesa stanovništva</h5>

							<ul class="time-comments-container">
								<li><small><span class="glyphicon glyphicon-time"></span>09. Februar</small></li>
								<li><small><span class="glyphicon glyphicon-comment"></span>14</small></li>
							</ul>
							<div class="separator-200 clearfix"></div>
						</div>
					</div>
				</a>
			</div>
		</section>
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
			</div>
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