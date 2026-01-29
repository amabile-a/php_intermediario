<?php

    // função mktime()

    $infoNascimento = mktime(18, 45, 52, 07, 21, 2002);

    echo date("d/m/y, H:i:s", $infoNascimento);
?>