<?php
 $dept=str_replace("'","''",$_REQUEST['dept']);
  
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
 $result = mysqli_query
           ($conn,
            "SELECT ksu_std_name, ksu_std_grade, ksu_std_department 
			 FROM  ksu_std_table 
			 where not(ksu_std_department = '$dept')
			 order by ksu_std_grade");
			 
 echo "<table border='1'>
 <tr>
    <th>學生姓名 </th> <th>學生成績 </th> <th>系別 </th><th> 備註 </th>
 </tr>";

 //使用 mysqli_fetch_array() 取回資料庫資料
 $row_num=0;
 $num_failed=0;
 $num_highergrades=0;
 while($row = mysqli_fetch_array($result))
 {
   echo "<tr>";
   echo "<td>" . $row['ksu_std_name']  .   "</td>";
   echo "<td>" . $row['ksu_std_grade'] .   "</td>";
   echo "<td>" . $row['ksu_std_department'] .   "</td>";
   
   if( $row['ksu_std_grade'] < 60 )
   {    echo "<td style=\"background-color:yellow\"> " . "補考" .   "</td>";
        $num_failed++;
   }
   else   
   {    if($row['ksu_std_grade']>= 80)
	       $num_highergrades++;
        echo "<td>" . "" .   "</td>";
   }   
   echo "</tr>";
   $row_num = $row_num+1;
 }
 echo "</table> <br/>";
 echo $row_num . " 名學生被查詢到!"."<br/>";
 echo " 其中不及格的人數"."$num_failed 人"."<br/>";
 echo " 其中高於79分的人數"."$num_highergrades 人"."<br/><br/>";
?> 
<form enctype="multipart/form-data"  method="post" action="midterm_ex4.html">
<input type="submit" name="sub" value="返回"/>
</form>