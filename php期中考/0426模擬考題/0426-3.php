<?php
 $age=str_replace("'","''",$_REQUEST['age']);
 $db_host = "localhost";
 $db_name = "ksu_database";
 $db_table = "ksu_cstd_table";
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
                        "SELECT ksu_std_name, ksu_std_age, ksu_std_id                                           
						 FROM ksu_std_table
						 WHERE ksu_std_age LIKE $age");
 $row_num = 0;
 echo "<table border='1'>
 <tr>
   <th> 學生姓名 </th>  <th> 年齡 </th>  <th> 學號 </th>
 </tr>";
 //使用 mysqli_fetch_array() 取回資料庫資料
 while($row = mysqli_fetch_array($result))
 {   
   echo "<tr>";
   echo "<td>" . $row['ksu_std_name'] . "</td>";
   echo "<td>" . $row['ksu_std_age'] . "</td>";
   echo "<td>" . $row['ksu_std_id'] . "</td>";
   echo "</tr>";
   $row_num = $row_num + 1;
 }
 echo "</table>";
 
 echo $row_num . " records found!"."<br/><br/>";
?> 
<form enctype="multipart/form-data"  method="post" action="0426-3.html">
<input type="submit" name="sub" value="返回"/>
</form>