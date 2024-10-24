<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日期</title>
    <style>
        body{font-size:24px;}
    </style>
</head>
<body>
    <h1>給定兩個日期，計算中間間隔天數</h1>
<!-- <?php
$date1=new datetime();
echo "今日為:".$date1->format( "Y-m-d ").""; // 輸出格式例如: 2023-10-24 15:45:12
$date2=new datetime(2024-7-7);

?> -->
<?php
date_default_timezone_set("Asia/Taipei");
echo date("y-m-d h:i:s");
echo"<br>";
$start="2024-10-01";
$end="2024-10-30";
$startTime=strtotime($start);
echo '開始時間(秒)'.$startTime;
echo "<br>";
$endTime=strtotime($end);
echo '結束時間(秒)'.$endTime;
echo "<br>";
$gap=$endTime-$startTime;
echo '差距時間'.$gap;
echo "<br>";
$days=$gap/(60*60*24);
echo '間隔:'.$days;
echo "<br>";

?>
<h1>計算距離自己下一次生日還有幾天</h1>
<?php
date_default_timezone_set("Asia/Taipei");
echo date("y-m-d h:i:s");
echo"<br>";
$start="2024-10-24";
$end="2025-10-12";
$startTime=strtotime($start);
echo '開始時間(秒)'.$startTime;
echo "<br>";
$endTime=strtotime($end);
echo '結束時間(秒)'.$endTime;
echo "<br>";
$gap=$endTime-$startTime;
echo '差距時間'.$gap;
echo "<br>";
$days=$gap/(60*60*24);
echo '間隔:'.$days;
echo "<br>";

?>
</body>
</html>