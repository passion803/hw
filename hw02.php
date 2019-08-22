<?php
echo "洗牌前<br>";
$poker=range(0,51);
foreach ($poker as $k =>$v ){
    echo "{$k}:{$v}<br>";
}
echo "<hr>";

echo "洗牌後<br>"; 
for($i=0;$i<52;$i++){
    $random = rand(0,51);
    $temp = $poker[$i];
    $poker[$i] = $poker[$random];
    $poker[$random] = $temp;
    //javascript[a,b]=[b,a] es6
}
foreach($poker as $k => $v){
    echo $k.':'.$v.'<br>';
}
?>