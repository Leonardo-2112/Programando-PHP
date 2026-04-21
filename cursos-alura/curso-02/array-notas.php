<?php
$notaInput = readline("Digite as notas separadas por espaço: ");
$nota = explode(" ", $notaInput); // Transforma a string em array, usando espaço como separador

rsort($nota); // coloca em ordem crescente 

echo "As três maiores notas são:\n $nota[0]\n $nota[1]\n $nota[2]";


?>