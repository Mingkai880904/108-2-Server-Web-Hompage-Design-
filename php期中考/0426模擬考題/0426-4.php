<?php

 $db_host = "localhost";
 $db_name = "ksu_database";
 $db_table = "ksu_std_table";
 $db_user = "root";
 $db_password = "";
 
 // 連結檢測
 $conn = mysqli_connect($db_host, $db_user, $db_password);
 if(empty($conn)){
	print  mysqli_error ($conn);
    die ("無法對資料庫連線！" );
	exit;
 }  
 if(!mysqli_select_db( $conn, $db_name)){
	die("資料庫不存在!");
	exit;
 }  

 //自型設定  
 mysqli_set_charset($conn,'utf8');
      
 echo "ksu_std_table  學生於各系人數顯示如下:". "<br/><br/>"; 
 $result = mysqli_query($conn,
                        "SELECT std_city_name, std_name, std_advisor
						 FROM student_detail
						 LEFT JOIN city_detail
						 ON student_detail.std_city_id = city_detail.std_city_id
						 ORDER BY std_city_name");
 echo "<table border='1'>
 <tr>
   <th>居住城市</th> <th>姓名</th> <th>指導教授</th>
 </tr>";
 
 //使用 mysqli_fetch_array() 取回資料庫資料
 $row_num=0;
 while($row = mysqli_fetch_array($result))
 {   
   echo "<tr>";
   if($row['std_city_name'] == NULL)
   {	echo "<td style=\"background-color:purple\">" . "" . "</td>";
   }
   else
   {
	   echo "<td>" . $row['std_city_name'] . "</td>";
   }   
   echo "<td>" . $row['std_name'] . "</td>";
   echo "<td>" . $row['std_advisor'] . "</td>";
   echo "</tr>";
   $row_num = $row_num + 1;
 }
 echo "</table>";
 
 echo $row_num . " records found!"."<br/><br/>";
?> 
<form enctype="multipart/form-data"  method="post" action="0426-4.html">
<input type="submit" name="sub" value="返回"/>
</form>