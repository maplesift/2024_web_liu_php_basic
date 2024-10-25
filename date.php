<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日期</title>
    <style>
    table{
        border-collapse:collapse;

    }
    td{
        padding:5px 10px;
        text-align: center;
        border:1px solid #999;
    }
    .holiday{
        background:pink;
        color:#999;
    }
    .grey-text{
        color:#999;
    }
    .today{
        background:blue;
        color:white;
        font-weight:bolder;
    }
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
    <h1>利用date()函式的格式化參數，完成以下的日期格式呈現</h1>

    <ul>
        <li>2021/10/05</li>
        <li>10月5日 Tuesday</li>
        <li>2021-10-5 12:9:5</li>
        <li>2021-10-5 12:09:05</li>
        <li>今天是西元2021年10月5日 上班日(或假日)</li>
    </ul>
    <?php

$array=['日','一', '二', '三', '四', '五', '六', ];
$dateIndex=$array[date("w")];
// echo '星期';
echo '星期'.$dateIndex;
echo date("Y-m-d");
echo "<br>";
echo date("m月d日 l");
echo "<br>";
echo date("今天是西元Y年m月d日");
if (date("w")==0|| date("w")==6 ) {
    echo '是假日';
}else {
    echo '是上班日';
} ;

echo "<br>";
echo "<br>";
echo "<br>";
?>
    <h1>
        利用迴圈來計算連續五個周一的日期
        例:
    </h1>

    <ul>
        <li>2021-10-04 星期一</li>
        <li>2021-10-11 星期一</li>
        <li>2021-10-18 星期一</li>
        <li>2021-10-25 星期一</li>
        <li>2021-11-01 星期一</li>
    </ul>
    <?php
for ($i=0; $i<5 ; $i++) { 
    $timestamp=strtotime("+$i weeks".date("Y-m-d"));
    echo date("Y-m-d",$timestamp);
    echo "&nbsp;";
    echo $dateIndex;
    echo "<br>";
}
?>
    <h1>
        線上月曆製作

    </h1>
    <ul>
        <li>以表格方式呈現整個月份的日期</li>
        <li>可以在特殊日期中顯示資訊(假日或紀念日)</li>
        <li>嘗試以block box或flex box的方式製作月曆</li>
    </ul>
    <table>
        <tr>
            <td></td>
            <td>日</td>
            <td>一</td>
            <td>二</td>
            <td>三</td>
            <td>四</td>
            <td>五</td>
            <td>六</td>
        </tr>



        <?php
    $d=strtotime("2024-6");
    $firstDayWeek=date("w",strtotime(date("Y-m-1"))); // 內圈先設定日期 今月為2024-10-01
    // 再使用strtotime把需要的日期換成秒 Unix 時間戳（從 1970 年 1 月 1 日開始的秒數）。
    // 再用date "w" 來計算得到的時間戳 今月可得2 代表10/01為星期2
    echo date("w");
    for ($i=0; $i <6 ; $i++) { //直
        echo "<tr>";
        echo "<td>";
        echo $i+1; //日期不可為0
        echo "</td>";
        for ($j=0; $j <7 ; $j++) { //橫
            echo "<td>";
            $dayNum=$i*7+$j+1 -$firstDayWeek; //第一周圍0*7+$j+1 "-$firstDayWeek來得到正確的10/1日期"
            if($dayNum<=date('t') && $dayNum>0){ // t=指定月份的天数  // 今月為31 代表超過31和小於0不打印 
                echo $dayNum;
            }
            // echo $i*7 + $j+1;
            echo "</td>";
        }
    }
    echo "</tr>";
    ?>
    </table>

    <table>
<tr>
    <td></td>
    <td>日</td>
    <td>一</td>
    <td>二</td>
    <td>三</td>
    <td>四</td>
    <td>五</td>
    <td>六</td>
</tr>
<?php 
//用時間戳date函數做月曆

$firstDay=date("Y-m-1");
$firstDayTime=strtotime($firstDay);
$firstDayWeek=date("w",strtotime(date("Y-m-1")));

for($i=0;$i<6;$i++){
    echo "<tr>";
    echo "<td>";
    echo $i+1;
    echo "</td>";
    for($j=0;$j<7;$j++){
        //echo "<td class='holiday'>";
        $cell=$i*7+$j -$firstDayWeek; // 取得需要打印日曆的日期
        $theDayTime=strtotime("$cell days".$firstDay); 
        // 把$cell得到的日期(天)加上$firstDay 讓函數strtotime運算 取得"時間戳"

        //所需樣式css判斷
        $theMonth=(date("m",$theDayTime)==date("m"))?'':'grey-text'; //
        
        // ? 和 : 是三元運算符的語法，這是一種簡化的 if-else 語句。
        // =if (date("m", $theDayTime) == date("m")) {
            // $theMonth = '';
        // } else {
        //     $theMonth = 'grey-text';
        // }
        $isToday=(date("Y-m-d",$theDayTime)==date("Y-m-d"))?'today':''; // 
        $w=date("w",$theDayTime);
        $isHoliday=($w==0 || $w==6)?'holiday':'';
        
        echo "<td class='$isHoliday $theMonth $isToday'>";
        echo date("d",$theDayTime); //將時間戳丟進date函數運算 取得日曆天數 d=月份中的第几天，有补零的两位数字	01 到 31
        echo "</td>";
    }
    echo "</tr>";
}
?>
</table>

</body>

</html>