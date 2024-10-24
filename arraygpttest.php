<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列測試練習</title>
</head>
<body>
<?php
$subject = ['', '國文', '英文', '數學', '地理', '歷史'];
$students = ['judy', 'amo', 'john', 'peter', 'hebe'];
$point = [
    [95, 64, 70, 90, 84],
    [88, 78, 54, 81, 71],
    [45, 60, 68, 70, 62],
    [59, 32, 77, 54, 42],
    [71, 62, 80, 62, 64]
];

// 開始生成 HTML 表格
echo '<table border="1">';
echo '<tr>';
foreach ($subject as $sub) {
    echo '<th>' . $sub . '</th>';
}
echo '</tr>';

foreach ($students as $index => $student) {
    echo '<tr>';
    echo '<td>' . $student . '</td>'; // 學生姓名
    foreach ($point[$index] as $score) {
        echo '<td>' . $score . '</td>'; // 學生分數
    }
    echo '</tr>';
}

echo '</table>';


?>
<hr><br>
<?php
$subject = ['', '國文', '英文', '數學', '地理', '歷史'];
$students = ['judy', 'amo', 'john', 'peter', 'hebe'];
$point = [
    [95, 64, 70, 90, 84],
    [88, 78, 54, 81, 71],
    [45, 60, 68, 70, 62],
    [59, 32, 77, 54, 42],
    [71, 62, 80, 62, 64]
];

// 開始生成 HTML 表格
echo '<table border="1">';

// 使用 for 生成表頭
echo '<tr>'; // table row
for ($i = 0; $i < count($subject); $i++) { //限制i生成的數量 count($subject)為5  所以只會生成至一行5格
    echo '<th>' . $subject[$i] . '</th>';
}
echo '</tr>';

// 使用 for 生成學生成績
for ($i = 0; $i < count($students); $i++) {
    echo '<tr>'; //table row
    echo '<td>' . $students[$i] . '</td>'; // 學生姓名  table data
    for ($j = 0; $j < count($point[$i]); $j++) {
        echo '<td>' . $point[$i][$j] . '</td>'; // 學生分數 ***$point[$i][$j]76行
    }
    echo '</tr>';
}
echo '</table>';
?>
<!-- $point[$i][$j] 是用來訪問二維陣列 $point 中特定元素的語法。這裡的 $point 是一個包含多個一維陣列的二維陣列，每個一維陣列代表一個學生的成績。

具體來說：

$i 是外層循環的索引，代表當前學生的索引。在前面的例子中，這會對應到 $students 陣列中的某一個學生。
$j 是內層循環的索引，代表當前學生的成績在其成績陣列中的索引。
這樣，$point[$i][$j] 就會取得：

$point[$i]：對應於第 $i 位學生的成績陣列。
$point[$i][$j]：對應於第 $j 位成績（例如，國文、英文等）。 

舉個例子：

如果 $point 陣列如下：

$point = [
    [95, 64, 70, 90, 84], // judy 的成績
    [88, 78, 54, 81, 71], // amo 的成績
    [45, 60, 68, 70, 62], // john 的成績
    [59, 32, 77, 54, 42], // peter 的成績
    [71, 62, 80, 62, 64]  // hebe 的成績
];
當 $i = 0 和 $j = 2 時，$point[0][2] 會返回 70，這是 judy 的數學成績。
當 $i = 1 和 $j = 3 時，$point[1][3] 會返回 81，這是 amo 的地理成績。
總之，$point[$i][$j] 允許您訪問特定學生的特定科目的成績。
-->

</body>
</html>

