<?php
$altura = readline("Digite sua altura (m): ");
$peso = readline("Digite seu peso corporal (Kg): ");

$imc = $peso / ($altura * $altura);

if($imc >= 30){
    echo "Obesidade";
}elseif($imc >= 25){
    echo "Sobrepeso";
}elseif($imc >=18.5){
    echo "Peso Ideal";
}else{
    echo "Abaixo do Peso";
}
?>