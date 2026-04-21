<?php
$arquivo = fopen("teste.txt", "a");//abre o arquivo para escrita ao final

fwrite($arquivo, "Linha Adicionada\n"); //fwrite adiciona uma nova linha

fclose($arquivo);//fecha o arquivo após a execução