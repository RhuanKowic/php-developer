<?php
    $nota = 1;
    if($nota >= 7){
        echo "aprovado";
    } elseif ($nota < 7 && $nota >= 4){
        echo "recuperação";
    } else{
        echo "reprovado";
    }
?>