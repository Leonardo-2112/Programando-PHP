<?php 
$celsius = $argv[1];

$conversao = ($celsius * 1.8) + 32;
echo "A temperatura em fahrenheit é: " . $conversao;
?>