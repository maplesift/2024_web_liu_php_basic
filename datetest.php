<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>datetest</title>
</head>
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
<body>
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
$firstDay=date("Y-m-1");
$firstDayTime=strtotime($firstDay);
$firstDayWeek=date("w",strtotime(date("Y-m-1")));
echo $firstDayTime;

for($i=0;$i<6;$i++){
    echo "<tr>";
    echo "<td>";
    echo $i+1;
    echo "</td>";
    for($j=0;$j<7;$j++){
        //echo "<td class='holiday'>";
        $cell=$i*7+$j -$firstDayWeek;
        $theDayTime=strtotime("$cell day".$firstDay);

        echo "<td>";
        echo date("d",$theDayTime);
        // echo $theDayTime;
        echo "</td>";
    }
    echo "</tr>";
}

?>
        <!-- echo "<td class='$isHoliday $theMonth $isToday'>"; -->

<!-- //所需樣式css判斷
$theMonth=(date("m",$theDayTime)==date("m"))?'':'grey-text';
$isToday=(date("Y-m-d",$theDayTime)==date("Y-m-d"))?'today':'';
$w=date("w",$theDayTime);
$isHoliday=($w==0 || $w==6)?'holiday':''; -->
</table>
    
</body>
</html>