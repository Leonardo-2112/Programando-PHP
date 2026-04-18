<?php
$numero = 0;

while($numero>=0 && $numero <= 100){
    if($numero % 2 == 0){
        echo $numero." é par\n";
    }else{
        echo $numero." é ímpar\n";
    }
    $numero++;
}
?>