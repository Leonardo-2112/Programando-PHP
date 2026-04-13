<?php
//criando função
// function olaMundo(){
//     echo "Olá, Mundo <br>";
// }

// function olaTi101(){
//     echo "Olá, Ti101 <br>";
// }

// function olaWell(){
//     echo "Olá, Professor Well! <br>";
// }
// //chamando função
// olaMundo();
// olaTi101();
// olaWell();


//Função Com Passagem de Parâmetro
// function saudacao($nome){
//     echo ("Olá, " . $nome);
// }
// //chama a função passando o parâmetro
// saudacao("Leonardo");




//Função com return e parâmetro
// function somar($a, $b){
//     return $a + $b;
// }
// function sub($a, $b){
//     return $a - $b;
// }
// function multi($a, $b){
//     return $a * $b;
// }
// function div($a, $b){
//     return $a / $b;
// }

// $soma = somar(5,5);
// echo("Resultado da soma = " . $soma . '<br>');
// $sub = sub(5,5);
// echo("Resultado da subtração = " . $sub . '<br>');
// $multiplicacao = multi(5,5);
// echo("Resultado da multiplicação = " . $multiplicacao . '<br>');
// $divisao = div(5,5);
// echo("Resultado da divisão = " . $divisao . '<br>');

// function media($a,$b,$c){
//     return ($a + $b + $c)/3;
// }
// $resultado = media(5,7,8);
// echo("A média é = " . $resultado);


//Função para Converter para maiúsculo
function maiusculo($texto){
    return strtoupper($texto);
}
echo maiusculo("Programando com PHP <br>");

//Função para Converter para minusculo
function minusculo($texto){
    return strtolower($texto);
}
echo minusculo("Programando com PHP");
?>