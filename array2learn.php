<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn</title>
</head>
<style>

</style>
<body>
<h1>
    已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份，輸出對應的天干地支的年別。(利用迴圈)
</h1>
<ul>
    <li>天干：甲乙丙丁戊己庚辛壬癸</li>
    <li>地支：子丑寅卯辰巳午未申酉戌亥</li>
    <li>天干地支配對：甲子、乙丑、丙寅….甲戌、乙亥、丙子….</li>
</ul>
    <?php
    $tangan=['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸']; //設定天干陣列
    $dizi=[ '子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥']; //設定地支陣列
    $start=1024; //定位甲子年

    $year=2024; //今年 可調整

    $yeardiff=$year-$start; //藉此找出天干地支的年度
    $tanganIndex=($yeardiff%10); // 找天干 
    $diziIndex=($yeardiff%12); // 找地支 
    $tangandiff=$tangan[$tanganIndex]; //把天干的index值丟進陣列, 若餘數0就等於陣列的index值0 為甲
    $dizidiff=$dizi[$diziIndex]; //把地支的index值丟進陣列, 若餘數0就等於陣列的index值0 為子
    
echo "今年是西元".$year."年 ,是".$tangandiff.$dizidiff."年" ;
// echo"<pre>";
// print_r($tangandiff);
// echo"<pre>";
// echo"<pre>";
// print_r($dizidiff);
// echo"<pre>";

?>
</body>
</html>