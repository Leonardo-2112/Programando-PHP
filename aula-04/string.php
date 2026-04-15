<?php
//String


// $nome = "         leonardo sousa";
// echo strlen($nome);     //strlen() verifica a quantidade de caracteres dentro da string
// echo'<br>';
// echo strtoupper($nome); //strtoupper() Formata todas as letras para maiúsculo
// echo'<br>';
// echo strtolower($nome); //strtolower() Formata todas as letras para minúsculo
// echo'<br>';
// echo ucfirst($nome);    //ucfirst() Coloca somente a primeira letra da primeira palavra em maiúscula
// echo'<br>';
// echo ucwords($nome);    //ucwords() Coloca a primeira letra de todas as palavras em maiúscula
// echo'<br>';
// echo trim($nome);       //trim() Remove o espaço no começo e no fim
// echo'<br>';

// echo strpos("Programando com PHP","PHP"); //strpos() Procura o texto

// $texto = "O, PHP, (Hypertext, Preprocessor), é, uma, linguagem, de, programação, voltada, principalmente, para, o, desenvolvimento, web., Ele, é, executado, no, lado, do, servidor,, ou, seja,, o, código, PHP, roda, no, servidor, e, o, resultado, é, enviado, para, o, navegador, do, usuário, em, forma, de, HTML.";
// $array = explode(",",$texto); //explode() transforma em array
// echo '<br>';
// print_r($array);


// $array = ["PHP", "HTML", "CSS"];
// echo implode("-",$array); //implode() transforma em String



$nome = "   wilton ronaldo  ";
echo "Original: $nome <br>";

$nome = trim($nome);
echo "Sem espaços: $nome <br>";

$nome = ucwords($nome);
echo "Formatado: $nome <br>";

echo "Total de letras: " . strlen($nome);