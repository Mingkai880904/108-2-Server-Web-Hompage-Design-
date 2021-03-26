<?php
      echo "計算變數 \$i 各階層值 <br>";
	  echo "呈現如下<br>"; 
	  echo "請使用 loop  <br><br>";
	  
      $result = 1;
      for ($i = 1; $i <= 5; $i++){
        $result = $result * $i;
        echo "\$i 為 $i, 所得階層值為 $result" ."<br>"; 		
	  } 
?>
