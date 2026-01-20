<?php

    // criar array associativo e ordernar (crescente ou decrescente)
    // imprimir usando tags de lista do HTML

    $anoNascimentoPersonagem = [
        "Lorelai" => 1968,
        "Emily" => 1945,
        "Luke" => 1955,
        "Sookie" => 1970,
    ];

    asort($anoNascimentoPersonagem)
    
?>
    <h3> Personagem mais velho/a: </h3>
    <h4><ul>
    <?php foreach ($anoNascimentoPersonagem as $nome => $anoNascimento): ?>
        <li><?= htmlspecialchars($nome) . ": " . htmlspecialchars($anoNascimento)?></li>
    <?php endforeach; ?>
    </ul>
    </h4>