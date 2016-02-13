<?php 
	$filePattern = "rocks/*/*.jpg";
	$pictures = glob($filePattern);
	?>
	<?php
	if(shuffle($pictures)) 
	{
		echo $pictures[0];
		for($i = 1; $i < count($pictures); $i ++)
		{		
			echo "," . $pictures[$i]; 
		}
	}
?>