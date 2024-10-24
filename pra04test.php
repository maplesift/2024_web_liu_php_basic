<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .center{ /*只對應到有上標籤的*/
            text-align: center;
        }
        body{ /* 全局影響 */
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>

<body>

<div class="center"> <!-- 直接置中 -->
<?php
echo '練習' ;
echo "<br>";
$TR=15; //設定行數 要求對稱只能是奇數
$TOP=ceil($TR/2); //上半部 例:$TR=9要生成上半部$i需<=5
for ($i=1; $i<=$TR ; $i++) { 
    if($i<=$TOP){ //上半部三角
        for ($j=1; $j<2*$i ; $j++) { //j=管理*數量
            echo "*";
        }
        echo "<br>";
    }else{ //$i大於6的情況 下半部三角
        for ($j = 1; $j <= 2 * ($TR - $i)+1; $j++) {  // 星號數量遞減  2 * ($TR - $i)+1 為公式 
            echo "*";
        }
        echo "<br>";
    }
}
?>
</div>

<?php
echo 'gpt' ;
echo "<br>";
$totalRows = 11; // 必須為奇數以確保對稱性
$midRow = ceil($totalRows / 2);

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



</body>
</html> 
