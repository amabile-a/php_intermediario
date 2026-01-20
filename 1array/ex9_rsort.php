<?php

    // criar uma função que recebe um array
    // mostrar qual o maior número

    function mostrarMaiorNum($array){
        rsort($array);
        return $array[0];
    }

    $anoNascimentoPersonagem = [1968, 1945, 1955, 1970,];

    echo mostrarMaiorNum($anoNascimentoPersonagem);



?>