<?php
$ano = $argv[1];

if(($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)){
    echo "É ano bissexto";
}else{
    echo "Não é ano bissexto";
}
?>