<!DOCTYPE html>
	<head> 
		<title>Rocks and Minerals</title>
		<link href="minerals.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<h1>Rocks and Minerals!</h1>
		
		<div id = "border">
			<form class = "search" action = "minerals.php" method = "get">
				<label for="mineral">Find a Mineral: </label>
				<input type="text" name="mineralName">
				<input type="submit" name="submit name">
			</form>
			
			<form class = "search" action = "rocks.php" method = "get">
				<label for="rock">Find a Rock: </label> 
				<input type="text" name="rockName">
				<input type="submit" name="submit name">
			</form>
		</div>