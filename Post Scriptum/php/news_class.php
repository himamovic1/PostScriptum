<?php 
	/**
	* Class for serving content for category pages
	*/
	class News
	{
		private function ConnectToDatabase() {
			$db = new PDO("mysql:dbname=postscriptumdb;host=localhost;charset=utf8", "psadmin", "admin");
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$db->exec("set names utf8");

			return $db;
		}
		

		public function __construct(argument)
		{
			# code...
		}
		public function postColumnsSection($value='')
		{
			$sqlDB = ConnectToDatabase();
			$query = $database->prepare("SELECT heading FROM article WHERE category = 'kolumna' ORDER BY creation_date DESC LIMIT 4");
			//TODO: Load article image
			$imgPath;
			$result = $query->execute();

			if($result)
			while ($row = $query->fetch(PDO::FETCH_ASSOC))
				echo '<section class="row">
					<a href="" class="col-md-3">
						<div class="row">
							<div class="col-md-6 col-sm-4">
								<img src="../img/img1.png" alt="Article image" class="md-image" >
							</div>
							<div class="col-md-6 col-sm-8 sm-title-container no-padding">
								<small class="column category-outlined">Kolumne</small>
								<h5 class="sm-title">Organizatori Diplomatskog bazara uručili 130.000 KM</h5>
								
							</div>
						</div>
					</a>

					<a href="" class="col-md-3">
						<div class="row">
							<div class="col-md-6 col-sm-4 col-xs-4">
								<img src="../img/img1.png" alt="Article image" class="md-image" >
							</div>
							<div class="col-md-6 col-sm-8 col-xs-8 sm-title-container no-padding">
								<small class="column category-outlined">Kolumne</small>
								<h5 class="sm-title">Organizatori Diplomatskog bazara uručili 130.000 KM</h5>
							</div>
						</div>
					</a>

					<a href="" class="col-md-3">
						<div class="row">
							<div class="col-md-6 col-sm-4 col-xs-4">
								<img src="../img/img1.png" alt="Article image" class="md-image" >
							</div>
							<div class="col-md-6 col-sm-8 col-xs-8 sm-title-container no-padding">
								<small class="column category-outlined">Kolumne</small>
								<h5 class="sm-title">Organizatori Diplomatskog bazara uručili 130.000 KM</h5>
								
							</div>
						</div>
					</a>

					<a href="" class="col-md-3">
						<div class="row">
							<div class="col-md-6 col-sm-4 col-xs-4">
								<img src="../img/img1.png" alt="Article image" class="md-image" >
							</div>
							<div class="col-md-6 col-sm-8 col-xs-8 sm-title-container no-padding">
								<small class="column category-outlined">Kolumne</small>
								<h5 class="sm-title">Organizatori Diplomatskog bazara uručili 130.000 KM</h5>
								
							</div>
						</div>
					</a>
				</section>';
		}
		public function postTopStorySection($value='')
		{
			# code...
		}
		public function postCategoryHeader($value='')
		{
			# code...
		}
		public function postMdArticle($value='')
		{
			# code...
		}
		public function postBgArticle($value='')
		{
			# code...
		}
		public function postSmArticle($value='')
		{
			# code...
		}
		
	}
?>