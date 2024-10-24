<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日期</title>
    <style>
        body {
            font-size: 24px;
        }

        table {
            border-collapse: collapse;
        }

        td {
            padding: 5px 10px;
            text-align: center;
            border: 1px solid #999;
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
    for ($i=0; $i <6 ; $i++) { 
        echo "<tr>";
        echo "<td>";
        echo $i+1;
        echo "</td>";
        for ($j=0; $j <7 ; $j++) { 
            echo "<td>";
            $dayNum=$i*7+$j+1;
            if($dayNum<=date('t')){
                echo $dayNum;
            }
            // echo $i*7 + $j+1;
            echo "</td>";
        }
        // echo
    }
    echo "</tr>";
    ?>
</table>
    
</body>

</html>