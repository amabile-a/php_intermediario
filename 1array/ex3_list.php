<?php

    // criar um array e usar a função list()

    $informacoesPersonagem = ["Lorelai", 32, 1.72, "Café", "Hambúrguer"];

    list($nome, $idade, $altura, $bebidaFav, $comidaFav) = $informacoesPersonagem;

    echo $nome . "<br>";
    echo $idade . "<br>";
    echo $altura . "<br>";
    echo $bebidaFav . "<br>";
    echo $comidaFav . "<br>";


?>