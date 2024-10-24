<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>重複結構</title>
</head>
<body>
<h1>for loop</h1>
<?php
for($loop=20; $loop>10; $loop=$loop-2){
    echo $loop;
    echo "<br>";
}
echo "<br>";
echo $loop;
?>
<!-- <?php
for($loop=0; $loop<5; $loop++){
    echo (2*$loop+1)."<br>";
    // echo "<br>";
}
echo "<br>";
echo $loop;
?> -->

<h1>while loop</h1>

<?php
$score=10;
$counter=0;
while($score<60){
    $score=$score+10;
    $counter++;
    // $score=$score+5;
}
 echo "$score <br> $counter";
// do{
    
// }while();

?>
<h1>陣列 </h1>
<div>['a','b','gg','d','jj',777,'z9z','a','b','gg','d','jj','777','z9z','a','b',
'gg']</div>
<?php
$a=['a','b','gg','d','jj',777,'z9z','a','b','gg','d','jj','777','z9z','a','b',
'gg'];
// echo $a[0]."<br>";
// echo $a[1]."<br>";
// echo $a[2]."<br>";
// echo $a[3]."<br>";

for($i=0;$i<count($a);$i++){ //$i的限制 $i起始值/索引值=0 $i只能小於 $i每次+1
    echo $a[$i] ."<br>";
}
echo "最後的值是:".$i."<br>";

$b=['姓名'=>"曾昱斌",'數學'=>80,'國文'=>70,'英文'=>10]; 
//1.想辦法把key值撈出來
//2.用key做成一個只有key的陣列
//3.用迴圈來跑key陣列
//4.再去把內容印出來

// for($i=0;$i<count($b);$i++){
//     echo $b[$i] ."<br>";
// }
//獲取陣列的key
// $keys = array_keys($b);
//使用for 迴圈遍歷key
// for($i=0; $i<count($keys);$i++){
//     $key = $keys[$i]; //當前的key
//     $value = $b[$key]; // 使用key獲取對應的值
//     echo $key . ':' . $value . '<br>';
// }
foreach ($b as $key => $value){
    echo $key . ':' . $value . '<br>';
}
?>

<div>空白&nbsp;   空白</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>