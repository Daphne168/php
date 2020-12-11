<?php


// 以下是照片最小的從1開始到11 共11張輪播，隨機播放~
// mt_rand(min,max)
$num = mt_rand(1,11);
$pic='images/pic' . $num . '.jpg';

// 以下html當作是一個文件, HEREDOC這名字也可以自己取，只要頭尾一樣即可。
$html = <<<HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>
<body>

<p>幸運數字：{$num}</p>
<p><img src="{$pic}">;</p>

</body>
</html>
HEREDOC;

echo $html;

?>
