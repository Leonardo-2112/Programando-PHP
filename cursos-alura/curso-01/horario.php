<?php
$hora = readline("Digite o horário (EX: 15): ");

if($hora >= 18){
    echo "Boa noite! \nHorário: " . $hora . " horas";
}elseif($hora >= 12){
    echo "Boa tarde! \nHorário: " . $hora . " horas";
}else{
    echo "Bom Dia! \nHorário: " . $hora . " horas";
}
?>