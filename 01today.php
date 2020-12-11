<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Date</title>
</head>
<body>
<h1>日期時間</h1>

<!-- echo是php的指令 -->
<!-- Syntax語法 date(format,timestamp) -->
<?php

date_default_timezone_set('Asia/Taipei');

echo date('Y-m-d H:i:sa',time()) . '<br>'; 

echo date('Y/m/d H:i:sa',time()) . '<br>'; 

echo date('Y.m.d H:i:sa',time()) . '<br>'; 

echo "Today is" . date("l") . '<br>';

?>

<!-- 網頁footer宣告 -->
© 2020- <?php echo date("Y");?>

</body>
</html>