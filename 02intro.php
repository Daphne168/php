<?php
// php語法沒有那麼嚴謹，可以指定為字串或數字，建議用 單引號
$name='tom';
$age='18';
$now=date('Y-m-d',time());
$pic='<img src="images/pic1.jpg">';

// 以下html當作是一個文件, HEREDOC這名字也可以自己取，只要頭尾一樣即可。
$html = <<<HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>
<body>
<p>日期：{$now}</p>
<p>姓名：{$name}</p>
<p>年齡：{$age}</p>
<p>照片：{$pic}</p>
</body>
</html>
HEREDOC;

echo $html;
?>