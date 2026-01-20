<?php

    // criar um array usando range 
    // imprimir os números somando +6
    // se a soma passar de 20, imprimir mensagem dizendo que o número é muito alto

    $array = range(1, 15);

    for ($i = 0; $i < count($array); $i++){
        $soma = $array[$i] + 6;

        if($soma >= 20){
            echo "O número $soma é muito alto <br>";
        } else {
            echo $soma . "<br>";
        }

    }

?>