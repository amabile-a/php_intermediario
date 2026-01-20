<?php

    // criar uma função que recebe um array
    // somar todos os elementos do array

    function somarNumArray($array){
        return array_sum($array);
    }

    $anoNascimentoPersonagem = [1968, 1945, 1955, 1970,];

    echo somarNumArray($anoNascimentoPersonagem);

?>