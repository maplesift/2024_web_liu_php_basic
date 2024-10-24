<?php
$n=50;
echo 'n='.$n .'<br>';
for ($i=1; $i<=$n ; $i=$i+2) {   
    echo $i;
    echo ',';
}
echo "<hr>";

$n=10;
echo 'n='.$n .'<br>';
for ($i=1; $i<=$n ; $i++) {   
    echo $i*10;
    echo "<br>";
}

$n=100;
echo 'n='.$n .'<br>';
$count=0;
for ($i=4; $i<=$n ; $i++){
    $t=true;
    for($j=2;$j<$i;$j++){
        if($i%$j==0){
            $t=false;
        }
        $count++;
    }
    if($t==true){
        echo "$i ,";
    }
}
echo $count;
echo '<br>';

$n=100;
echo 'n='.$n .'<br>';
$count=0;
for ($i=4; $i<=$n ; $i++){
    $t=true;
    for($j=2;$j<=sqrt($i);$j++){
        if($i%$j==0){
            $t=false;
        }
        $count++;
    }
    if($t==true){
        echo "$i ,";
    }
}
echo $count;
echo "<br>";

?>