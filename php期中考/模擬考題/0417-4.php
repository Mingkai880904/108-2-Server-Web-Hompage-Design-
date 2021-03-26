<!DOCTYPE html>
<html>
<body>

	<?php
		$x = 560;
		$y = 480;
		$z = 1000;
		
		function myTset() {
			$x = 50;
			$y = 10;
			global $x; $y;
			$z = $x + $y;
			echo $z;
			echo "<br>";
		}
		
		myTset();
		echo $z;
	?>
</body>
</html>