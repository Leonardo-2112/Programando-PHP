<?php
function calcularImc(float $peso, float $altura)
{
    $imc = $peso / ($altura * $altura);

    if ($imc >= 30) {
        echo "Obesidade";
    } elseif ($imc >= 25) {
        echo "Sobrepeso";
    } elseif ($imc >= 18.5) {
        echo "Peso Ideal";
    } else {
        echo "Abaixo do Peso";
    }
}

$pesoInput = (float)readline("Digite seu peso (Kg): \n");
$alturaInput = (float) readline("Digite sua altura (m): \n");
echo (calcularImc($pesoInput, $alturaInput));
