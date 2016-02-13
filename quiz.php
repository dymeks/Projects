<!Doctype html>
	<head>
		<title>Quiz</title>
		<link href="minerals.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<h1>Quiz Time!</h1>
		<div id = "quizChoice">
						
			<!-- Allows user to quiz themselves on all rocks and minerals-->
			
			<p> Which quiz would you like to take? </p>
			<!-- Allows user to quiz themselves on all rocks and minerals-->
			<form class = "quizForm" action = "quizAll.php"> 
				<fieldset>
					<legend>Quiz All</legend>
					<p>How many Questions?</p>
					<input type= "radio" name = "numberOfQuestions" value = "10" checked> Ten 
					<input type= "radio" name = "numberOfQuestions" value = "20"> Twenty
					<input type= "radio" name = "numberOfQuestions" value = "All"> All 
					<input type = submit value = "Go!">
				</fieldset>
			</form>
			<!-- Allows user to quiz themselves on all rocks-->
			<form class="quizForm" action = "quizRocks.php">
				<fieldset>
					<legend>Quiz Rocks</legend>
					<p>How many Questions?</p>
					<input type= "radio" name = "numberOfQuestions" value = "10" checked> Ten 
					<input type= "radio" name = "numberOfQuestions" value = "20"> Twenty
					<input type= "radio" name = "numberOfQuestions" value = "All"> All 
					<input type = submit value = "Go!">
				</fieldset>
			</form>
			<!-- Allows user to quiz themselves on all minerals-->
			<form class = "quizForm" action = "quizMinerals.php">
				<fieldset>
					<legend>Quiz Minerals</legend>
					<p>How many Questions?</p>
					<input type= "radio" name = "numberOfQuestions" value = "10" checked> Ten 
					<input type= "radio" name = "numberOfQuestions" value = "20"> Twenty
					<input type= "radio" name = "numberOfQuestions" value = "All"> All 
					<input type = submit value = "Go!">
				</fieldset>
			</form>
				
		</div>
	</body>
</html>