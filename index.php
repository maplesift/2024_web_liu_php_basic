<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>程式語言基礎/github 操作練習</title>
</head>
<body style='text-align:left'>
<?php

define("PI","777");
// define("PI",");
$price="hello world";
echo $price;

echo '<br>';

$name='曾昱斌';
echo $name;
$total=100*5*PI+(35/7*3);
echo '<br>';
echo $total;
echo '<br>';
$num=rand(1,49).",".rand(1,49).",".rand(1,49).",".rand(1,49).",".rand(1,49).",".rand(1,49);
echo "會重複的威力彩號碼".$num;
echo '<br>';
$num=10000;
echo $num;
echo '<br>';
echo "圓周率是".PI;
// define("PI",0.6128);
echo '<br>';
// echo "圓周率是".PI;
?>
<h1>練習</h1>
<pre>
給定兩個變數，請思考如何交換兩個變數的值

例：
$a = 10; $b = 50;
交換後
$a = 50; $b = 10;
</pre>
<?php

$a=10;
$b=50;
$tmp=10;
echo "交換前".$a;
echo '<br>';
echo "交換前".$b;
echo '<br>';
$a=$b;
$b=$tmp;

// echo "交換前".$a;
// echo '<br>';
// echo "交換前".$b;
// echo '<br>';
// $a=50;
// $b=10;
echo "交換後".$a;
echo '<br>';
echo "交換後".$b;
echo '<br>';
?>
</body>
</html>