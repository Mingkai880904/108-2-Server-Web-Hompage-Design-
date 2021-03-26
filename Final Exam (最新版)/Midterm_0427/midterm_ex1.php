<!DOCTYPE html>
<html>
<body>
	
	<h3>搭配loop與變數$i<br>變數$i的起始值為8,終止值為3<br>每次減1,呈現如下</h3>

	<?php
		$x = 8;
		
		while($x >= 3) {
			echo '$i=';
			echo "$x <br>";
			$x--;
		}
	?>
</body>
</html>