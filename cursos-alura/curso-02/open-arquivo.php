<?php
$arquivo = fopen('teste.txt', 'r');//abre o arquivo para leitura
$primeiraLinha = fgets($arquivo); // Lê uma linha do arquivo
echo $primeiraLinha;//Exibe a variavel primeiraLinha

fclose($arquivo);//fecha o arquivo após a execução