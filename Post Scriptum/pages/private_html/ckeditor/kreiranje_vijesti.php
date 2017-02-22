<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.9, maximum-scale=1, user-scalable=no">
	<meta name="description" content="Post Scriptum novinski portal pocetna">
	<meta name="keywords" content="sarajevo,vijesti,novine,portal">

	<title>Post Scriptum - Admin Panel</title>

	<link rel="stylesheet" href="../../../css/bootstrap.css">
	<link rel="stylesheet" href="../../../css/style_admin_panel.css">

	<!-- CK editor script -->
	<script src="ckeditor.js"></script>
</head>
<body>
    <header>
    	<!-- Navigation bar -->
		<nav class="navbar navbar-inverse navbar-fixed-top navbar-shadow">
		  <div class="container">

		    <!-- Logo and toggle -->
		    <div class="navbar-header">
		      <a href="#"><img class="navbar-brand" src="../../../icons/postscriptumlogo.svg"></a>
		      <ul class="nav navbar-nav">
					<li><a href="../../lifestyle.php">Kontakt</a></li>
					<li><a href="../../lifestyle.php">Pomoć</a></li>
				</ul>
		    </div>
		  </div><!-- /.container -->
		</nav>
    </header>
   
	<!-- Main content -->
	<div class="container hidden-xs">
		<!-- Side bar -->
	    <aside id="sidebar" class="panel-shadow">
			<ul class="clearfix">
				<li><img src="../../../img/usr_default.gif" width="60" height="60" class="img-circle"></li>
				<li style="padding-left: 1.2em;"><h4>John Doe</h4><p>Administrator</p></li>
			</ul>
			<ul class="nav nav-stacked">
				<li class="active">
					<a href="#" onclick="return load('../../user_profile')">
					<span class="glyphicon glyphicon-cog"></span>Korisnički profil<span class="sr-only">(current)</span></a>
				</li>
				<li>
					<a href="#" onclick="return load('../../pregled_vijesti_content')">
					<span class="glyphicon glyphicon-list-alt"></span>Pregled vijesti</a>
				</li>
				<li>
					<a href="#" onclick="return load('../../pregled_korisnika_content')">
					<span class="glyphicon glyphicon-user"></span>Pregled korisnika</a>
				</li>
				<li>
					<a href="kreiranje_vijesti.php">
					<span class="glyphicon glyphicon-font"></span>Dodaj vijest</a>
				</li>
				<li>
					<a href="../index.php">
					<span class="glyphicon glyphicon-th-list"></span>Povratak na stranicu</a>
				</li>
				<li>
					<a href="#">
					<span class="glyphicon glyphicon-log-out"></span>Odjava</a>
				</li>
			</ul>
	    </aside>

	    <!-- Content is loaded in this container -->
		<div id="content-holder" class="panel-shadow">
			<h2>Kreiranje nove vijesti</h2>
			<p>U ovoj sekciji možete napisati novi članak.</p>

			<div class="separator-200">&nbsp;</div>

			<!-- Create new article form -->
			<form class="form-horizontal profile-section" id="new-article-form">

				<!-- Article Heading -->
				<h4 class="vertical-separator">Naslov novog članka:</h4>
				<div class="form-group">
					<div class="inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-text-color"></i></span>
							<input type="text" class="form-control" name="article_title" id="article_title" placeholder="Naslov članka" required>
						</div>
					</div>
				</div>

				<!-- Subheading -->
				<h4 class="vertical-separator">Komentar redakcije:</h4>
				<div class="form-group">
					<div class="inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
							<textarea class="form-control" name="article_subheading" id="article_subheading" placeholder="Komentar redakcije..."></textarea>
						</div>
					</div>
				</div>

				<!-- Article text -->
				<h4 class="vertical-separator">Tekst članka:</h4>
				<textarea name="editor" id="editor">text editor</textarea>
				<script>CKEDITOR.replace('editor');</script>


				<button type="submit" class="btn btn-success" style="margin-top: 1em; margin-bottom: 2em;">Potvrdi</button>
			</form>
		</div>
	</div>

	<div class="container hidden-lg hidden-md hidden-sm" style="margin-top: 200px; text-align: center;">Ovaj sadržaj nije dostupan na ovoj veličini ekrana!</div>

	<!-- Additional JavaScript files -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"></script>
	<script src="../../../js/javascript.js"></script>
	<script src="../../../js/form_validation.js"></script>
	<script src="../../../js/administration.js"></script>
</body>
</html>