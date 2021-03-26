<?php
      echo "變數\$i被2除盡,算階乘值 <br>";
	  echo "變數\$i不被2除盡,顯示反轉值:. <br>";
	  echo "呈現如下. 請使用 loop <br>"; 
	  echo "  <br><br>";
	  
      $result1 = 1;
	   
      for ($i = 1 ; $i <=  15; $i++){
		   $result1 = $result1 * $i;
		   if( $i >=10 && $i <= 15)
		   {
		    if ( ($i % 2) ==  0) {
                echo "\$i 為 $i, 所得階乘值為 $result1 <br>"; 		
		    }
		    else {
			     
			    echo "\$i 為 $i, 反轉值:". strrev($i). "<br>"; 
		    }
		   }	   
	  } 
?>
