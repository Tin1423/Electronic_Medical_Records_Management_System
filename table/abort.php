<?php
//重置变量为空值。
 unset($_SESSION['id']);
 $done = "注销成功！";
 echo "<script language=\"JavaScript\">\r\n";
 echo "alert('{$done}');\r\n"; 
 //通过引入JS，实现页面跳转。
 echo "location.replace(\"http://project1/Main.html\");\r\n";
 echo "</script>";
?>