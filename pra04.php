<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>星星</title>
    <style>
        body{ /* 全局影響 */
            font-family: 'Courier New', Courier, monospace;
        }
        .center{ /*只對應到有上標籤的*/
            text-align: center;
        }
    </style>
</head>
<body>
<!-- <h2>正三角形</h2>
<?php

for($i=0;$i<5;$i++){
    for($j=0;$j<($i+1);$j++){
        echo "*";
    }
    echo "<br>";
}
echo"<hr>";
echo'倒直角三角形'.'<br>';
for($i=5;$i>0;$i--){
    for($j=0;$j<$i;$j++){
        echo "*";
    }
    echo "<br>";
}

echo"<hr>";
echo'正三角形'.'<br>';
for($i=0;$i<5;$i++){
    for($k=0;$k<4-$i;$k++){
        echo "&nbsp;";
    }
    for($j=0;$j<(2*$i+1);$j++){
        echo "*";
    }
    echo "<br>";
}
// echo"<hr>";
// echo'倒正三角形'.'<br>';
// for($i=5;$i>0;$i--){
//     for($j=0;$j<($i);$j++){
//         echo "*";
//     }
//     echo "<br>";
// }
echo"<hr>";
echo'倒正三角形'.'<br>';
for($i=0;$i<5;$i++){
    for($k=0;$k<$i;$k++){ //打印空白 第一行需要0 所以第一迴圈為:$k(0)<$i(0)
        echo "&nbsp;";
    }
    for($j=0;$j<(2*(4-$i)+1);$j++){ //打印* 第一行需要9 所以第一迴圈為:$j(0)<(2*(4-$i(0))+1)=9*
        echo "*";
    }
    echo "<br>";
}
echo"<hr>";
echo'倒正三角形'.'<br>';
for($i=4;$i>=0;$i--){
    for($k=0;$k<(4-$i);$k++){ //打印空白 第一行需要0 所以第一迴圈為:$k<(4-4)
        echo "&nbsp;";
    }
    for($j=0;$j<(2*$i+1);$j++){ ////打印* 第一行需要9 所以第一迴圈為$j(0)<(2*$i(4)+1)=9*
        echo "*";
    }
    echo "<br>";
}
?>
<h2>菱形</h2>
 <?php 
echo"<hr>";
for($i=0;$i<21;$i++){
    if($i>10){
        $k1=$i-10;
        $j1=2*($i-(2*($i-10)))+1;
    }else{
        $k1=10-$i;
        $j1=(2*$i+1);
    }

    for($k=0;$k<$k1;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<$j1;$j++){
        echo "*";
    }
    echo "<br>";

}
?>
<h2>菱形</h2>
 <?php
 echo"<hr>";
for($i=0;$i<21;$i++){
    if($i>10){
        /* $t=$i-4;
        $i-4     => 1,2,3,4
        2*($i-4) => 2,4,6,8
        $i       => 5,6,7,8
        2*($i-(2*($i-4)))+1 => 7, 5 , 3,1
        2*($i-(2$i-8))+1
        2*(8-$i)+1
        17-2$i */
        
        for($k=0;$k<$i-10;$k++){
            echo "&nbsp;";
        }
    
        for($j=0;$j<2*($i-(2*($i-10)))+1;$j++){
            echo "*";
        }
        echo "<br>";

    }else{

        for($k=0;$k<10-$i;$k++){
            echo "&nbsp;";
        }
    
        for($j=0;$j<(2*$i+1);$j++){
            echo "*";
        }
        echo "<br>";
    }

}
?>
<h2>菱形更新</h2>
<?php
echo "<hr>";
$totalRows = 4; 
if ($totalRows>=3 && $totalRows%2==0) { //
    $totalRows++;
}else{
    echo "數字太小";
}
$midRow = ceil($totalRows / 2); //無條件進位 :此為5 floor()為無條件捨去

for ($i = 1; $i <= $totalRows; $i++) { 
    if ($i <= $midRow) { 
        // 上半部邏輯
        for ($k = 1; $k <= $midRow - $i; $k++) { 
            echo "&nbsp;";
        }
        for ($j = 1; $j < 2 * $i; $j++) { 
            echo "*";
        }
    } else { 
        // 下半部邏輯
        for ($k = 1; $k <= $i - $midRow; $k++) { 
            echo "&nbsp;";
        }
        for ($j = 1; $j <= 2 * ($totalRows - $i) + 1; $j++) { 
            echo "*";
        }
    }
    echo "<br>";
}
?>  -->
<h2>中空菱形</h2>
<?php
echo "<hr>";
$totalRows = 11; // 必須為奇數以確保對稱性
$midRow = ceil($totalRows / 2); // 無條件進位，此為6

for ($i = 1; $i <= $totalRows; $i++) { 
    if ($i <= $midRow) { 
        // 上半部邏輯
        for ($k = 1; $k <= $midRow - $i; $k++) { 
            echo "&nbsp;";
        }
        for ($j = 1; $j < 2 * $i; $j++) { 
            if ($j == 1 || $j == 2 * $i - 1) { // 只在兩邊顯示星號
                echo "*";
            } else {
                echo "&nbsp;";
            }
        }
    } else { 
        // 下半部邏輯
        for ($k = 1; $k <= $i - $midRow; $k++) { 
            echo "&nbsp;";
        }
        for ($j = 1; $j <= 2 * ($totalRows - $i) + 1; $j++) { 
            if ($j == 1 || $j == 2 * ($totalRows - $i) + 1) { // 只在兩邊顯示星號
                echo "*";
            } else {
                echo "&nbsp;";
            }
        }
    }
    echo "<br>";
}
?>

<h2>菱形對角線</h2>
<?php
echo "<hr>";
$totalRows = 9; // 必須為奇數以確保對稱性
if ($totalRows>=3 && $totalRows%2==0) {
    $totalRows++;
}else{
    // echo "數字太小";
    // echo"<br>";
}
$midRow = ceil($totalRows / 2); //無條件進位 :此為5 floor()為無條件捨去

for ($i = 1; $i <= $totalRows; $i++) { 
    if ($i <= $midRow) { 
        // 上半部邏輯
        for ($k = 1; $k <= $midRow - $i; $k++) { 
            echo "&nbsp;";
        }
        for ($j = 1; $j < 2 * $i; $j++) {
            if(abs($i-$j)==$midRow ||abs($i+$j)==$midRow || $i==$midRow ||$j==$midRow /*|| $i==$midRow $j+$i== */){
                
                echo "*";
            } 
        }
    } else { 
        // 下半部邏輯
        for ($k = 1; $k <= $i - $midRow; $k++) { 
            echo "&nbsp;";
        }
        for ($j = 1; $j <= 2 * ($totalRows - $i) + 1; $j++) { 
        }
    }
    echo "<br>";
}
?> 
<h2>gpt菱形對角線</h2>
<?php
$totalRows = 11; // 必須為奇數以確保對稱性
$midRow = ceil($totalRows / 2); // 無條件進位，此為6

for ($i = 1; $i <= $totalRows; $i++) { 
    if ($i <= $midRow) { 
        // 上半部邏輯
        for ($k = 1; $k <= $midRow - $i; $k++) { 
            echo "&nbsp;";
        }
        for ($j = 1; $j < 2 * $i; $j++) { 
            if ($j == 1 || $j == 2 * $i - 1 || $i == $midRow) { // 直線和橫線
                echo "*";
            } else {
                echo "&nbsp;";
            }
        }
    } else { 
        // 下半部邏輯
        for ($k = 1; $k <= $i - $midRow; $k++) { 
            echo "&nbsp;";
        }
        for ($j = 1; $j <= 2 * ($totalRows - $i) + 1; $j++) { 
            if ($j == 1 || $j == 2 * ($totalRows - $i) + 1 || $i == $midRow) { // 直線和橫線
                echo "*";
            } else {
                echo "&nbsp;";
            }
        }
    }
    echo "<br>";
}
?>

<?php
echo"<hr>";
$totalRows = 11; // 必須為奇數以確保對稱性
$midRow = ceil($totalRows / 2); // 無條件進位，此為6

for ($i = 1; $i <= $totalRows; $i++) { 
    if ($i <= $midRow) { 
        // 上半部邏輯
        for ($k = 1; $k <= $midRow - $i; $k++) { 
            echo "&nbsp;";
        }
        for ($j = 1; $j < 2 * $i; $j++) { 
            if ($j == 1 || $j == 2 * $i - 1 || $i == $midRow ||$j == $i) { // 直線、橫線和對角線
                echo "*";
            } else {
                echo "&nbsp;";
            }
        }
    } else { 
        // 下半部邏輯
        for ($k = 1; $k <= $i - $midRow; $k++) { 
            echo "&nbsp;";
        }
        for ($j = 1; $j <= 2 * ($totalRows - $i) + 1; $j++) { 
            if ($j == 1 || $j == 2 * ($totalRows - $i) + 1 || $i == $midRow || $j == ($totalRows - $i + 1)) { // 直線、橫線和對角線
                echo "*";
            } else {
                echo "&nbsp;";
            }
        }
    }
    echo "<br>";
}
?>




<?php
echo 'gpt菱形' ;
echo "<br>";
$totalRows = 11; // 必須為奇數以確保對稱性
$midRow = ceil($totalRows / 2); //無條件進位 :此為6

for ($i = 1; $i <= $totalRows; $i++) { 
    if ($i <= $midRow) { 
        // 上半部邏輯
        for ($k = 1; $k <= $midRow - $i; $k++) { 
            echo "&nbsp;";
        }
        for ($j = 1; $j < 2 * $i; $j++) { 
            echo "*";
        }
    } else { 
        // 下半部邏輯
        for ($k = 1; $k <= $i - $midRow; $k++) { 
            echo "&nbsp;";
        }
        for ($j = 1; $j <= 2 * ($totalRows - $i) + 1; $j++) { 
            echo "*";
        }
    }
    echo "<br>";
}
?> 
<h2>矩形練習</h2>
<?php
echo"<hr>";
for ($i=1; $i<=5 ; $i++) { //設定行
    for ($j=1; $j<=5 ; $j++) { //設定列
        if ($i==1 ||$i==5 ) { //設定第一行 或 最後一行 打印星星
            echo "*";
        }else if($j==1 || $j==5){ //設定第一列 或 最後一列 打印星星
            echo "*";

        }else{
        echo "&nbsp;"; //其他時候打印空白
    }
}
    echo "<br>"; //內圈結束執行外圈 打印換行
}
?>
<h2>矩形+對角線練習</h2>
<?php
echo"<hr>";
echo"5x5";
echo "<br>";

for ($i=1; $i<=5 ; $i++) { //設定行
    for ($j=1; $j<=5 ; $j++) { //設定列
        if ($i==1 ||$i==5 ) { //設定第一行 或 最後一行 打印星星
            echo "*";
        }else if($j==1 || $j==5){ //設定第一列 或 最後一列 打印星星
            echo "*";
        }elseif($i==$j || $j==(5-$i+1) ){//$i=$j 左對角線印星星 規律為 $j+$i=6 邊長(5)再+1就能得6
            echo "*";

        }else{
        echo "&nbsp;"; //其他時候打印空白
    }
}
    echo "<br>"; //內圈結束執行外圈 打印換行
}
?>
<?php
echo"<hr>";
echo"6x6";
echo "<br>";
for ($i=1; $i<=6 ; $i++) { //設定行
    for ($j=1; $j<=6 ; $j++) { //設定列
        if ($i==1 ||$i==6 ) { //設定第一行 或 最後一行 打印星星
            echo "*";
        }else if($j==1 || $j==6){ //設定第一列 或 最後一列 打印星星
            echo "*";
        }elseif($i==$j || $j==(6-$i+1) ){//$i=$j 左對角線印星星 規律為 $j+$i=6 邊長(5)再+1就能得6
            echo "*";

        }else{
        echo "&nbsp;"; //其他時候打印空白
    }
}
    echo "<br>"; //內圈結束執行外圈 打印換行
}
?>
<?php
echo"<hr>";
echo"設定變數 以後只需修改變數即可";
echo "<br>";
$range="6";
for ($i=1; $i<=$range ; $i++) { //設定行
    for ($j=1; $j<=$range ; $j++) { //設定列
        if ($i==1 ||$i==$range ) { //設定第一行 或 最後一行 打印星星
            echo "*";
        }else if($j==1 || $j==$range){ //設定第一列 或 最後一列 打印星星
            echo "*";
        }elseif($i==$j || $j==($range-$i+1) ){//$i=$j 左對角線印星星 規律為 $j+$i=6 邊長(5)再+1就能得6
            echo "*";

        }else{
        echo "&nbsp;"; //其他時候打印空白
    }
}
    echo "<br>"; //內圈結束執行外圈 打印換行
}
?>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
</body>
</html>