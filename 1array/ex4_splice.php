<?php

    // criar um array e usar a função array_splice()

    $personagens = ["Lorelai", "Luke", "Francie", "Jess", "Emily", "Sookie"];

    $removidos = array_splice($personagens, 2, 2);

    print_r($personagens);
    echo  "<br>";
    echo "Personagens removidos: ";
    print_r($removidos);

?>