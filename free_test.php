<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .rectangle {
            font-family: monospace; /* 使用等寬字型以保持格式 */
            line-height: 1; /* 調整行距 */
        }
    </style>
    <title>中空矩形圖案</title>
</head>
<body>
    <h1>矩形</h1>
    <div class="rectangle">
        <?php
        $rows = 10;  // 矩形的行數
        $cols = 10; // 矩形的列數
        
        for ($i = 1; $i <= $rows; $i++) { 

            for ($j = 1; $j <= $cols; $j++) { 
                // 如果是第一行、最後一行，或第一列、最後一列，就輸出星號
                if ($i == 1 || $i == $rows || $j == 1 || $j == $cols) {
                    echo "*"; // 輸出星號
                } else {
                    echo "&nbsp;"; // 輸出空格，保持形狀
                }
            }
            
            echo '<br>'; //內圈跑完換行
        }
        echo '<br>';
        echo '對角線矩形';
        echo '<br>';
        $range=10; //正方形
        for($i=1 ; $i<=$range ; $i++){ //設定行

            for( $j=1 ; $j<=$range ; $j++ ){ //設定列
        //如果是第一行 /最後一行 第一列 最後一列 對角線:左上到右下：當 j 等於 i 時（例如，(1,1), (2,2)）。    右上到左下：當 j 等於 (9 - i + 1) 時（例如，($i=1,9), (2,8), ..., (9,1)）。 
              if($i==1 || $i==$range|| $j==1 || $j==$range || $j==$i || $j==($range-$i+1)){
                
                echo "*";
                
              }else{
              
                echo "&nbsp;";
                
              }
            }
            
            echo "<br>";
          }
        ?>
        
    </div>
    <div class="rectangle">
    <?php
$totalRows = 11; // 必須為奇數以確保對稱性
$midRow = ceil($totalRows / 2); // 中間行的索引

for ($i = 1; $i <= $totalRows; $i++) {
    // 計算當前行相對於中間行的距離
    $currentRow = $i <= $midRow ? $i : $totalRows - $i + 1;

    // 顯示前導空白
    for ($k = 1; $k <= $midRow - $currentRow; $k++) { 
        echo "&nbsp;";
    }
    
    // 顯示星號和空白
    for ($j = 1; $j <= 2 * $currentRow - 1; $j++) { 
        if ($j == 1 || $j == 2 * $currentRow - 1) { // 只在兩邊顯示星號
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    
    echo "<br>";
}
?>
</div>
</body>
</html>
