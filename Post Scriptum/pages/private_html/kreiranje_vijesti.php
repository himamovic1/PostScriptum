<h2>Kreiranje nove vijesti</h2>
<p>U ovoj sekciji možete napisati novi članak.</p>

<div class="separator-200">&nbsp;</div>

<!-- Create new article form -->
<form class="form-horizontal profile-section" id="new-article-form" method="post" action="kreiranje_vijesti.php">

	<?php 
		if( !empty($_POST['create_article']) ) {
			echo "it woooorks";
		}
	?>

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

	<input type="submit" name="create_article" value="Kreiraj članak" class="btn btn-success" style="margin-top: 1em; margin-bottom: 2em;">
</form>
