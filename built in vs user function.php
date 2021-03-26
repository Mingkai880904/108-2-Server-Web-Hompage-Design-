<!DOCTYPE html>
<html>
<body>
<?php
$x=26;
$num=6887129853;

//% 10 表示除以10之後的餘數:6
var_dump($x % 10);  echo "<br>";

echo"run built-in and user functions for the same answer!";
echo"<br>";
//built-in function: % 10 表示除以10之後的餘數:3
var_dump($num % 10); echo "<br>";

//user function:floatMod():3
var_dump(floatMod($num,10)); echo "<br>";

//餘數　= 被除數　- 商數 * 除數
function floatMod($num,$divisor)
{
  return $num - floor($num / $divisor) * $divisor;  
}
?>
</body>
</html>