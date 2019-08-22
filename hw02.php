<?php
$poker = range(0,51);
shuffle($poker);
// foreach ($poker as $k =>$v ){
//     echo "{$k}:{$v}<br>";
// }
// echo "<hr>";

$players=[[],[],[],[]];
foreach($poker as $i => $card){
    $players[$i%4][(int)($i/4)] = $card;
}
?>

<table border="5px solid gray" width="100%" style="text-align:center"  >
    <?php
    $suits=["&clubs;",
        "<font color='red'>&diams;</font>",
        "<font color='red'>&hearts;</font>",
        "&spades;"
        ];
    $values=['A',2,3,4,5,6,7,8,9,10,'J','Q','K'];
    foreach($players as $player){
    sort($player);
    echo '<tr>';
        foreach($player as $card){
        echo '<td>';
        echo $suits[(int)($card/13)];
        echo $values[$card%13];
        echo '</td>';
        }
    echo '<tr>';
    }
    ?>
</table>