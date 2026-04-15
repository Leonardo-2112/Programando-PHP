<?php
$resultado = "";
if(isset($_POST["enviar"])){
    $frase = $_POST["frase"];

    //removendo espaços extras
    $fraseLimpa = trim($frase);
    //Quantidade de caracteres
    $caracteres = strlen($frase);
    //Frase em maiúsculo 
    $maiusculo = strtoupper($frase);
    //Frase em minúsculo 
    $minusculo = strtolower($frase);
    //Primeira letra de cada palavra maiúscula  
    $primeiraMaiuscula = ucwords($frase);
    //
    $resultado = ("Frase Limpa: $fraseLimpa <br>
                   Quantidade de caracteres: $caracteres <br>
                   Frase em maiúsculo: $maiusculo <br>
                   Frase em minúsculo: $minusculo <br>
                   Primeira letra de cada palavra em maiúsculo: $primeiraMaiuscula");
    

}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Exercício Strings PHP</title>
</head>

<body>
    <h2>Trabalhando com Strings</h2>
    <form method="post">
        Digite uma frase: <br><br>
        <input type="text" name="frase" size="40" required>
        <br><br>
        <button type="submit" name="enviar">Processar</button>
    </form>
    <br>
    <div>
        <?php 
         echo($resultado); ?>
    </div>
</body>

</html>