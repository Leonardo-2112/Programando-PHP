<?php
$resultado = "";
$numero = 0;
 
if(isset($_POST['jogar'])){
    // Gerar um número aleatório entre 1 e 10
    $numero = rand(1, 100);
    while($numero < 1 || $numero > 100){
        $numero = rand(1, 100);
    }
        //garantindo com while
    if($numero == 7){
        $resultado = "Parabéns! Você acertou o número: $numero!";
    }
    else{
        $resultado = "Que pena! Você sorteou o número: $numero. Tente novamente!";
    }
}
//Usar while para o jogo do número 7
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Jogo do Número 7</title>
</head>
<body>
 
    <h2>🎮 Jogo: Acerte o Número 7</h2>
 
    <form method="post">
        <button type="submit" name="jogar">Sortear Número</button>
    </form>
 
    <p><?php echo $resultado; ?></p>
 
 
</body>
</html>
 