<?php

    // criar variáveis e usar a função compact(), para transformar em array

    $nome = "Lorelai";
    $idade = 32;
    $altura = 1.72;
    $corOlhos = "Azul";
    $bebidaFav = "Café";
    $comidaFav = "Hambúrguer";

    $infoPersonagem = compact("nome", "idade", "altura", "corOlhos", "bebidaFav", "comidaFav");
        
    echo "Informações da personagem: <br>";

    foreach ($infoPersonagem as $informacoes => $dados){
        echo "$dados <br>";
    }

?>