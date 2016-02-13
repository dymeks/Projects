<?php session_start(); 
	if(!isset($_SESSION["index"]))
	{
		$_SESSION["index"] = 0;
		$_SESSION["right"] = 0;
		$_SESSION["wrong"] = 0;
	}
	
	if(isset($_POST['yes']) || isset($_POST['no']))
	{
		session_regenerate_id();
	}
	$index = $_SESSION["index"];
	$totalQuestions;
?>
<!Doctype html>

	<head>
		<title>Quiz</title>
		<link href="minerals.css" type="text/css" rel="stylesheet" />
		<!--<script src="rocks.js" type="text/javascript"></script>-->
	</head>
	<body>
	<?php
		$filePattern = "rocks/*/*.jpg";
		$pictures = glob($filePattern);
		if(isset($_GET["numberOfQuestions"])) {
			$totalQuestions = $_GET["numberOfQuestions"];
			if(count($pictures) < $totalQuestions) {
				$totalQuestions = count($pictures);
			}
			$_SESSION["totalQuestions"] = $totalQuestions;
		} else {
			$totalQuestions = $_SESSION["totalQuestions"];
		}
		
		if($index >= $totalQuestions)
		{
		?>
		<h1>Quiz Stats!</h1>
			<div id = "center">
				<?php 
						$number_right = $_SESSION["right"];
						$number_wrong = $_SESSION["wrong"];
						
						$percent_right = number_format((($number_right/($totalQuestions))*100),2);
						?>
						<div id= "gameOver">
							<div>
								You got <?=$percent_right?> % right. 
							</div>
							<div > Total Right: <?=$number_right?>
							</div>
							<div > Total Wrong: <?=$number_wrong?>
							</div>
						</div>
						<?php
						session_destroy();
						?>
						<label> Try Again? </label>
						<form action ="quiz.php" method = "post">
							<input type ="submit" value = "Yes" name = "yes">
						</form>
						<form action ="geology.php" method = "post">
							<input type ="submit" value = "No" name = "no">
						</form>
						
						<?php
						
					  } else {
					  
					  if(isset($_POST['yes']))
					  {
						shuffle($pictures);
					  }
					  ?>
					<h1>Quiz Time!</h1>
					<div id = "testQuestion">
						<img id = "testImage" src = "<?=$pictures[$index]?>" alt = "rockImage">
					</div>
					<form id = "clear" action= "answers.php" method = "post">
						<?php $_SESSION["imagePath"] = $pictures[$index];
						
							  $_SESSION["action"] = "quizRocks.php";
						?>
						<input id = "answer" type = "text" name = "name">
						<button id = "submit"> Final Answer? </button>
					</form>
				<?php
					}	
				?>
			</div>
			<form class = "back" action = "geology.php" method = "post">
				<input class = "submitBack" type = "submit" value = "Search Rocks and Minerals">
			</form>
	</body>
</html>	