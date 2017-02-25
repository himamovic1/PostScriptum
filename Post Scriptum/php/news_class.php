<?php 
	/**
	* Class for serving content for category pages
	*/
	require_once 'dbconfig.php';

	class News
	{
		private $database;

		public function __construct(argument)
		{
			$db = new Database();
			$this->database = $db->ConnectToDatabase();
		}

		public function loadColumnsSection()
		{
			
			$query = $this->database->prepare("SELECT heading, creation_date FROM article WHERE category = 'kolumna' ORDER BY creation_date DESC LIMIT 4");
			//TODO: Load article image
			$imgPath = '../img/img1.png';
			
			$result = $query->execute();

			if($result)
			while ($row = $query->fetch(PDO::FETCH_ASSOC)){
				echo '<a href="" class="col-md-3">
					<div class="row">
						<div class="col-md-6 col-sm-4">
							<img src="'.$imgPath.'" alt="Article image" class="md-image" >
						</div>
						<div class="col-md-6 col-sm-8 sm-title-container no-padding">
							<small class="column category-outlined">Kolumne</small>
							<h5 class="sm-title">'.$row['heading'].'</h5>
						</div>
					</div>
				</a>';
			}	
		}

		public function loadTopStorySection()
		{
			$query1 = $this->database->prepare("SELECT heading, creation_date FROM article WHERE category = 'top_prica' ORDER BY creation_date DESC LIMIT 5");
			//TODO: Load article image
			//$query2 = $this->database->prepare();
			
			$result1 = $query1->execute();
			$imgPath = '../img/img1.png';
			

			$query3 = $this->database->prepare("SELECT count(*) FROM comment WHERE article_id = :articleID");
			$this->database->bindParam(':article_id', $)

			
			//$result2 = $query2->execute();
			$result3 = $query3->execute();

			echo '<article class="col-md-6 col-sm-7 col-xs-12 article-top-story">
				<a href="../pages/pregled_vijesti'.$articleID.'.php"> 
					<div class="top-story-container">
						<div class="img-wrapper">
							<img src="'.$imgPath.'" alt="Article image" class="huge-image">
						</div>
						<div class="top-story-title-container">
							<small class="top-story-tag category-filled">Top priča</small>
							<h3 class="bg-title-inverse">'.$result1['heading'].'</h3>
							<ul class="time-comments-container">
								<li><small class="small-txt-inverse"><span class="glyphicon glyphicon-time"></span>'.$result1['creation_date'].'</small></li>
								<li><small class="small-txt-inverse"><span class="glyphicon glyphicon-comment"></span>'.$result[''].'</small></li>
							</ul>
						</div>
					</div>
				</a>
			</article>';
			
			while ($row = $query->fetch(PDO::FETCH_ASSOC))
			echo '<article class="col-md-6 col-sm-5 col-xs-12 no-padding">
				<div class="col-md-6 col-sm-12 hidden-xs no-padding-left">
					<a href="">
						<div class="top-story-container">
							<div class="img-wrapper">
								<img src="'.$imgPath.'" alt="Article image" class="md-top-image">
							</div>
							<div class="top-story-title-container">
								<small class="top-story-tag category-filled">Top priča</small>
								<h4 class="md-title-inverse">'.$title.'</h4>
								<ul class="time-comments-container">
									<li><small class="small-txt-inverse"><span class="glyphicon glyphicon-time"></span>'.$dateTime.'</small></li>
									<li class="navbar-right"><small class="small-txt-inverse"><span class="glyphicon glyphicon-comment"></span>'.$commentsNum.'</small></li>
								</ul>
							</div>
						</div>
					</a>
				</div>
			</article>';
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