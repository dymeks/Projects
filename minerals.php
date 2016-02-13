
<?php  /* This makes it so that the user just has to spell the name correctly. While allowing the 
         program to find the filename that is in lowercase letters.*/
		$mineralName = strtolower($_GET["mineralName"]); 
		/* includes the main header, allowing users to continue searching.*/
        include("header.php");
	 ?>

		<h2><?= $mineralName ?></h2>
		
		<?php
		/*Creates the proper file path to retrieve the relavent information for that mineral.
		  checks to see if the file exists, if it does not it displays an error message, asking the user to spell right.
		  if it does the file does exist the program displays all relavant about the mineral to the user.
		*/
		$fileName = "minerals/" . $mineralName . "/" . $mineralName . ".txt";
		if(!file_exists($fileName)){
			
			?>
				<p id = "error"> Mineral, <?= $mineralName ?> not Found. Please check your spelling.</p>
			<?php
		} else {
				/*This finds all the images of that mineral and displays each image for that mineral*/
				$filePattern = "minerals/" . $mineralName . "/" . $mineralName . "*.jpg";
				$pictureNames = glob($filePattern);
				?>
				<div id = "pictures">
				<?php
				/*Displays each picture for that mineral*/
				foreach($pictureNames as $picture) {
				?>
					<div class = "image">
						<img id = "mineralPictures"src = "<?=$picture?>" alt= "mineralPicture">
					</div>
				<?php
				}
							
				?>
				</div>
				<div id = "link">
				<a href="https://www.google.com/search?q=<?= $mineralName?>&espv=2&biw=1280&bih=666&site=webhp&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjn3JSe84TKAhVD8WMKHa0GBLsQ_AUIBigB&dpr=1#tbm=isch&q=<?=$mineralName?>+mineral">
				See More Images... </a>
				</div>
				<ul id= "list">
				<?php
					/*Displays all the relavant information for that mineral.*/
					$lines = file($fileName);
					foreach($lines as $line){
						$attribute = explode(":",$line);
						if(in_array("Polymorphs", $attribute)){
							$polymorphs = explode(",", $attribute[1]);
							?>
							<li><?=$attribute[0]?>: 
							<?php
							foreach($polymorphs as $polymorph){
							?>
							<a href="http://students.washington.edu/dymeks/geology/Projects/minerals.php?mineralName=<?=$polymorph?>&submit+name=Submit"><?=$polymorph?></a>
							<?php
							}
							?>
							</li><?php
						}else {
				?>		
					<li><?= $line ?></li>	
				<?php
						}				
					}
				?>
				</ul>
				<!-- Allows the user to go to the Quiz page. -->
				<form class = "back" action = "quiz.php">
					<input class = "submitBack"type = "submit" value = "Take a Quiz!">
				</form>
				<?php	
			}
		 ?>
	</body>
</html>