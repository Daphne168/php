<?php

// 設定好出生的年1970，程式自動扣除當年2020，即為年紀2020-1970=50
$name1='Tom';
$birth1=1970;
$photo1='images/Tom.png';
$age1 = date('Y',time()) - $birth1;

$name2='Ann';
$birth2=1980;
$photo2='images/Ann.png';
$age2 = date('Y',time()) - $birth2;


// 以下html當作是一個文件, HEREDOC這名字也可以自己取，只要頭尾一樣即可。
$html = <<<HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>
<body>

姓名：{$name1}; 
年齡：{$age1};
照片：<img src="{$photo1}" style="width:10%">
<p>
姓名：{$name2}; 
年齡：{$age2};
照片：<img src="{$photo2}" style="width:10%">

</body>
</html>
HEREDOC;

echo $html;

?>
