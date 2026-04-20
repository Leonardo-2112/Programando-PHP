<?php
function operacaoMatematica(int $num1, int $num2, string $operacao):float{
    return match ($operacao){
        'soma' => $num1 + $num2,
        'subtração' => $num1 - $num2,
        'multiplicação' => $num1 * $num2,
        'divisão' => $num1 / $num2,

    };
}
$operacaoInput = readline("Digite a operação (soma, subtração, multiplicação, divisão): \n");
$numInput1 =(int) readline("Digite o primeiro número: \n");
$numInput2 = (int) readline("Digite o segundo número: \n");
$resultado = operacaoMatematica($numInput1,  $numInput2, $operacaoInput );
echo ("Resultado: " . $resultado);


?>