<?php

$conteudoArquivoJson = file_get_contents('filme.json');
$filme = json_decode($conteudoArquivoJson, true);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Filme inserido</title>
</head>
<body>
    <h1>Nome do Filme: <?= $filme['nome']; ?></h1>
    <h2>Ficha Técnica: </h2>
        <h3>Ano de lançamento</h3>
        <h4><?= $filme['anoLancamento']; ?></h4>

        <h3>Nota</h3>
        <h4><?= $filme['nota']; ?></h4>

        <h3>Gênero</h3>
        <h4><?= $filme['genero']; ?></h4>
</body>
</html>