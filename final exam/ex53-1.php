<!DOCTYPE html>
<html>
<body>
<?php
var_dump((int) false);    echo "<br>";     // int(0)
var_dump((int) true);   echo "<br>";       // int(1)
var_dump((int) 169.99);  echo "<br>";      // int(169)
var_dump((int) "9527");  echo "<br>";      // int(9527)
var_dump((int) "");     echo "<br>";       // int(0)
var_dump((int) "one");  echo "<br>";       // int(0)
var_dump((int) "30cm");   echo "<br>";     // int(30)
var_dump((int) array());   echo "<br>";    // int(0)
var_dump((int) array(55, 66)); echo "<br>";// int(1)
var_dump((int) new stdClass); echo "<br>"; // int(1)
 
$fp = fopen("res.txt","w+");
 // int(3), 3為resource的編號
var_dump((int) $fp);  echo "from the file <br>";   
fclose($fp);
 
var_dump((int) NULL);          // int(0)
?>

</body>
</html>

