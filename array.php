<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array陣列</title>
    <style>
    table{
        border-collapse:collapse;

    }
    td{
        padding:6px 10px;
        text-align: center;
        border:1px solid #ccc;
    }
</style>
</head>

<body>
    <!-- <h1>陣列宣告</h1> -->
<!-- <?php
    $subject=['','國文','英文','數學','地理','歷史'];
    $students=['judy','amo','john','peter','hebe'];
    $point=[[95,64,70,90,84],[88,78,54,81,71],[45,60,68,70,62],[59,32,77,54,42],[71,62,80,62,64]];
    
    
?><tr>
<?php
    foreach ($subject as  $value) {
        echo "<td>{$value}</td>";
    }
?>
</tr>
<td>
<?php
    foreach($students as $value){
        echo "<tr>{$value}</tr>";
    }
?> -->

<h1>利用程式來產生陣列</h1>
<ul>
    <li>以迴圈的方式產生一個九九乘法表</li>
    <li>將九九乘法表的每個項目以字串型式存入陣列中</li>
    <li>再以迴圈方式將陣列內容印出</li>
</ul>
<?php
$nine=[];

for ($i=1; $i <=9 ; $i++) { 
    for ($j=1; $j <=9 ; $j++) { 
        $nine[]="$i x $j = ".($i*$j);
    }
}
// echo "<pre>";
// print_r($nine);
// echo "<pre>";
$counter=0; //設定計數器
foreach ($nine as $idx => $n) {
    $counter++; 
    if ($counter==9) { //計數器每==9 打印$n +<br>
        echo $n . "<br>";
        $counter=0; //計數器歸零
    }else{
        echo $n . ","; 
    }
}
echo "<hr><br>";
echo "<table >";
foreach ($nine as $idx => $n) {
    $v=explode("=",$n)[1]; //以特定字串/字元/符號分割字串
    if ($idx%9==8) {
        echo "<td>$v</td></tr>";
    }else if ($idx%9==0){

        echo "<tr><td>$v</td>"; 
    }else {
        echo "<td>$v</td>";
    }
}
echo "</table>";

echo "<hr><br>";
foreach ($nine as $idx => $n) {
    
    if (($idx+1)%9==0) {
        echo $n . "<br>";
    }else {
        echo $n . ","; 
    }
}

$nine2=[];
for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $nine2["$i x $j"]=$i*$j;
    }    
}
echo "<hr><br>";
echo "<table>";
$counter=0;
foreach ($nine2 as $key=> $n) {
    $counter++;
    if ($counter==1) { //開頭
        echo "<tr><td>$n</td>";
        
    }elseif($counter==9){
        echo "<td>$n</td></tr>";
        $counter=0;
    }else{
        echo "<td>$n</td>";
    }
}
echo "</table>";


// echo "<table style='border: 1px solid black;'>";
// for($i=1;$i<=9;$i++){
//     echo "<tr>";
//     for($j=1;$j<=9;$j++){
//         echo "<td style='border: 1px solid black;'>";
//         echo "$i x $j = ";
//         echo $i*$j;
//         echo "</td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";
?>

</body>
</html>