<h2>99乘法</h2>
<!-- <?php

for ($i=1; $i<=9 ; $i++) { 
    for($a=1;$a<=9;$a++){
        echo  "$a x $i".'='.($a*$i).'<br>';
    }
    echo "<br>";
}
?> -->
<?php
echo"<table border=1";
for($j=1;$j<=9;$j++){
    echo "<tr>";
    for ($i=1; $i < 9; $i++) { 
        echo "<td>";
        echo "$j x $i = ". ($j*$i);
        echo "</td>";
    }
    echo"<br>";
}
echo "</table>"
?>

<h2>老師寫</h2>
<style>
.nine{
    border-collapse:collapse;
    margin:20px;
    text-align :center;
}
.nine td{
    width:30px;
    height:30px;
    border:1px solid #aaa
}
.nine tr:nth-child(1),
.nine td:nth-child(1)
{
    background:skyblue;
    color:white;
}
</style>
<?php
echo"<table class='nine'>";
for($j=0;$j<=9;$j++){
    echo "<tr>";
    for ($i=0; $i <= 9; $i++) { 
        echo "<td>";
        if($j==0){
            echo $i;
        }elseif($i==0){
            echo $j;
        }else{
            echo  ($j*$i);
    }
        echo "</td>";
    }
    echo"<tr>";
}
echo "</table>"
?>
<h2>半邊99</h2>
<?php
echo"<table class='nine'>";
for($j=0;$j<=9;$j++){
    echo "<tr>";
    for ($i=0; $i <= 9; $i++) { 
        echo "<td>";
        if($j==0){
            echo $i;
        }elseif($i==0){
            echo $j;
        }else{
            if($i<=$j){
                echo  ($j*$i);
            }
        }
        echo "</td>";
    }
    echo"<tr>";
}
echo "</table>"
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>