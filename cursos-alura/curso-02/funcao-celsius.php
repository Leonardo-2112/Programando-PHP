<?php
function converterCelsius(float $celsius){
    $conversao = ($celsius * 1.8) + 32;
    echo "A temperatura em graus Celsius é: " . $conversao;
}
$celsiusInput = (float) readline("Digite a temperatura em Celsius: \n");
echo converterCelsius($celsiusInput);
?>