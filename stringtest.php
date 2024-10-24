<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string</title>
    <style>
        li {
            font-size: 24px;
        }
    </style>
</head>

<body>
    <h1>
        字串取代
    </h1>

    <ul>
        <li>將”aaddw1123”改成”*********”</li>
    </ul>

    <?php
    $a="aaddw1123";
    echo "原字串為:$a.<br><br>";
    $originstring=$a;
    // $search=$a;
    // $replace="*";
    // $new_string=str_replace($search,"*",$originstring);
    // echo "新字串為:$new_string<br>";
        $new_string=str_repeat("*",mb_strlen($originstring));
        echo $new_string;
    ?>
    <h1>
        調整後
    </h1>
    <hr>
<?php
$a = "aaddw1123";
echo "原字串為: $a.<br><br>";
$originstring = $a;
$search = $a;

// 使用 str_replace 進行替換
$new_string = str_replace($search, "*", $originstring);

// 計算原字串的長度，並生成相同數量的星星
$star_string = str_repeat("*", strlen($originstring));

echo "替換後的字串為: $new_string<br>";
echo "新字串為: $star_string"; // 這樣會印出 9 個星星
?>

<hr>
    <h1>
        字串分割
    </h1>
    <ul>
        <li>將”this,is,a,book”依”,”切割後成為陣列</li>
    </ul>
    <?php
    $string="this,is,a,book";
    $array=explode(",",$string);
    echo"<pre>";
    print_r($array);
    echo"<pre>";
    ?>

    <hr>
    <h1>字串組合  將上例陣列重新組合成“this is a book”</h1>
    <?php
    $array=join(" ",$array);
    echo $array ."<br>"
    ?>
    <h1>
        子字串取用 將” The reason why a great man is great is 
        that he resolves to be a great man”只取前十字成為” The reason…”
    </h1>
    <?php
    $str="The reason why a great man is great is that he resolves to be a great man";
    $str=substr($str,0,10)."..."; // substr($str,陣列index值,第10字串) //之後替換成...
    echo $str."<br>";
    ?>
    <h1>
        尋找字串與HTML、css整合應用

    </h1>

    <ul>
        <li>給定一個句子，將指定的關鍵字放大</li>
        <li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
        <li>請將上句中的 “程式設計” 放大字型或變色.</li>
    </ul>

    <?php
    $str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
    $key="程式設計";
    $large="<span style='font-size:28px; color:skyblue'>".$key."</span> ";
    $str=str_replace($key,$large,$str);
    echo $str. "<br>";
    ?>
</body>

</html>