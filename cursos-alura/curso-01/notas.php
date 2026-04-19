<?php
$notas = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach($notas as $notas){
    if($notas >= 6){
        echo "Nota do Aluno: " . $notas. "\nAprovado\n\n";
    }else{
        echo "Nota do Aluno: " . $notas. "\nReprovado\n\n";
    }
}
?>