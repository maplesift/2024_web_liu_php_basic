<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arraytest</title>
</head>
<style>
    table{
        border-collapse:collapse;

    }
    td{
        padding:6px 10px;
        text-align: center;
        border:1px solid #ccc;
    }
</style>
<body>
    <?php
    echo "<hr><br>";
    $nine=[];

    for ($i=1; $i <=9 ; $i++) { 
        for ($j=1; $j <=9 ; $j++) { 
            $nine[]="$i x $j =".($i*$j);
    }
}   
echo "<pre>";
print_r($nine);
echo "<pre>";
    echo "<table >";
    foreach ($nine as $idx => $n) {
        $v=explode("=",$n)[1]; //以特定字串/字元/符號分割字串
        if ($idx%9==8) {
            echo "<td>$v</td></tr>";
        }else if ($idx%9==0){
    
            echo "<tr><td>$v</td>"; 
        }else {
            echo "<td>$v</td>";
        }
    }
    echo "</table>";
    ?>
</body>
</html>