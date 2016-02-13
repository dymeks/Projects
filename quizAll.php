<!Doctype html>
<?php $rockName = $_POST["rockName"]; ?> 
	<head>
		<title>Quiz</title>
		<link href="minerals.css" type="text/css" rel="stylesheet" />
		<script src="all.js" type="text/javascript"></script> 
	</head>
	<body>
		<h1>Quiz Time!</h1>
		<?php 
				$filePattern = "*/*/*.jpg";
				$pictures = glob($filePattern);
				if(shuffle($pictures)) {
				
				?>
					<div id = "center">
						<img id = "testImage" src = "<?= $pictures[0]?> " alt = "anyImage">
					
				<?php
				}
			?>
						<div id = "clear">
							<input id = "answer" type = "text" name = "allName">
							<button id = "submit"> Final Answer? </button>
						</div>
					</div>
					<form class = "back" action = "geology.php">
						<input class = "submitBack"type = "submit" value = "Search Rocks and Minerals">
					</form>
			<?php 
				
			?>
	</body>
</html>	