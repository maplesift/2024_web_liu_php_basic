<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array2</title>
</head>
<body>
    <h1>威力彩電腦選號沒有重覆號碼(利用while迴圈)</h1>
    <ul>
        <li>使用亂數函式rand($a,$b)來產生號碼</li>
        <li>將產生的號碼順序存入陣列中</li>
        <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
        <li>完成選號後將陣列內容印出</li>
    </ul>

    <?php
$nums=[];

while (count($nums)<6) {
    $n=rand(1,38);
    //$n 是否在 $nums裡?
    if (!in_array($n , $nums)) { // !反向運算子
        
        $nums[]=$n;
    }
}

foreach ($nums as $num) {
    echo "$num,";
}
echo "<br>";

sort($nums); //調整成 從小到大
foreach ($nums as $num) {
    echo "$num,";
}

echo "<hr>";
echo join(", ",$nums )

?>
<h2>  找出五百年內的閏年</h2>
    <ul>
        <li>請依照閏年公式找出五百年內的閏年</li>
        <li>使用陣列來儲存閏年</li>
        <li>使用迴圈來印出閏年</li>
    </ul>
<?php
$leap=[];

for ($i=2024; $i <=2524 ; $i++) { 
    if($i%4 == 0 && ($i % 100 != 0 || $i %400 == 0)){
        $leap[]=$i;
    }
}
echo "<pre>";
print_r($leap);
echo "<pre>";
?>
<h1>
    已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份，輸出對應的天干地支的年別。(利用迴圈)
</h1>
<ul>
    <li>天干：甲乙丙丁戊己庚辛壬癸</li>
    <li>地支：子丑寅卯辰巳午未申酉戌亥</li>
    <li>天干地支配對：甲子、乙丑、丙寅….甲戌、乙亥、丙子….</li>
</ul>
<?php
$year=1988;
$sky=['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸'];
$land=['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];

$sl=[];

for ($i=0; $i <6 ; $i++) { 

    for ($j=0; $j <10 ; $j++) { 
        $cellnum=10*$i+$j;
        $landIndex=$cellnum%12;
        // echo $sky[$j];
        // echo $land[$landIndex];
        // echo $sl=[]
        $sl[]=$sky[$j].$land[$landIndex];
    }
}
echo $sl[($year-4)%60];

// echo"<pre>";
// print_r($sl);
// echo"<pre>";
?>
<h1>
    請設計一支程式，在不產生新陣列的狀況下，將一個陣列的元素順序反轉(利用迴圈)

</h1>

<ul>
    例：$a=[2,4,6,1,8] 反轉後 $a=[8,1,6,4,2]
</ul>
<?php
$a=[2,4,6,1,8];
for ($i=0; $i <floor(count($a)/2) ; $i++) { 
    
    $a[$i];
}


?>




<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
</body>
</html>