<?php

    // objeto DateTime e as principais funções

    $data1 = new DateTime();
    echo $data1->format("l - d/m/y") . "<br>";

    $data1->modify("-1 year");
    echo $data1->format("l - d/m/y") . "<br>";

    $data1->setDate(2002, 07, 21);
    echo $data1->format("l - d/m/y") . "<br>";

    $data2 = new DateTime();
    $data2->setDate(2000, 12, 10);
    echo $data2->format("l - d/m/y") . "<br>";

    $diferencaDatas = $data2->diff($data1);
    echo $diferencaDatas->format("%a days") . "<br>";

?>