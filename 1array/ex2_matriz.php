<?php

    // criar um array multidimensional com 2 arrays e 5 elementos cada
    // imprimir os elementos de cada um dos arrays
    // imprimir também quando mudar de array

    //             0              1
    $array = [[1,2,3,4,5,], [6,7,8,9,10]];
    //         0,1,2,3,4     0,1,2,3,4

    // percorre os elementos externos 0-1
    for ($i = 0; $i < count($array); $i++){ // o count vale 2

        // percorre os elementos internos 0-4
        for ($j = 0; $j < count($array[$i]); $j++){ // o count vale 5, mas depende da quantidade de elementos, se o segundo elemento (1), ter 7 elementos, o segundo count($array), vai valer 7

            echo $array[$i][$j] . "<br>";
        }

        // count($array) - 1 = 1
        if($i < count($array) - 1){ // só imprime 1x, enquanto o $i = 0, porque quando chega no segundo loop o $i tá valendo 1, e o if é "se for menor que 1"
            echo "Mudando para segundo Array <br>";
        }
    }
    echo "Fim do array";

?>