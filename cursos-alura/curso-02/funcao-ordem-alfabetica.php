<?php
function ordemAlfabetica(array $arrayString):array{
    sort($arrayString);
    return $arrayString;
}

$arrayString = ["Leonardo", "Andressa", "Beatriz", "Gabriel"];
echo ("Array ordenado: ");
print_r(ordemAlfabetica($arrayString));
?>