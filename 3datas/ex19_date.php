<?php

    // funções date e strtotime

    $dataAtual = date("d/m/y");

    $umMesAmais = strtotime("1 month");

    echo "Hoje é dia: $dataAtual <br>";
    echo "Em 1 mês será dia: " . date("d/m/y", $umMesAmais);

?>