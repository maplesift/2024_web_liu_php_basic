<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn</title>

</head>
<h1>
    已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份，輸出對應的天干地支的年別。(利用迴圈)
</h1>
<ul>
    <li>天干：甲乙丙丁戊己庚辛壬癸</li>
    <li>地支：子丑寅卯辰巳午未申酉戌亥</li>
    <li>天干地支配對：甲子、乙丑、丙寅….甲戌、乙亥、丙子….</li>
</ul>

<body>
<?php
function getTianGanDiZhi($year) {
    // 天干和地支的陣列
    $tianGan = ["甲", "乙", "丙", "丁", "戊", "己", "庚", "辛", "壬", "癸"];
    $diZhi = ["子", "丑", "寅", "卯", "辰", "巳", "午", "未", "申", "酉", "戌", "亥"];

    // 1024年為甲子年
    $baseYear = 1024;
    $yearDiff = $year - $baseYear;

    // 使用for迴圈計算天干和地支索引
    for ($i = 0; $i <= $yearDiff; $i++) {
        // 只在最後一次迴圈中計算結果
        if ($i === $yearDiff) {
            $tianGanIndex = ($i % 10 + 10) % 10; // 確保索引為正數
            $diZhiIndex = ($i % 12 + 12) % 12;

            // 獲取對應的天干地支
            $tianGanResult = $tianGan[$tianGanIndex];
            $diZhiResult = $diZhi[$diZhiIndex];

            // 返回結果
            return $tianGanResult . $diZhiResult;
        }
    }
}

// 測試函數
$year = 2024; // 可以替換成任意西元年份
$result = getTianGanDiZhi($year);
echo "西元 $year 對應的天干地支為: $result\n";
?>

</body>
</html>