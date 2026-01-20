<?php

    // criar array associativo
    // imprimir usando tags de tabela do HTML
    $informacoesPersonagem = [
        "Lorelai" => "Gilmore",
        "Emily" => "Gilmore",
        "Luke" => "Danes",
        "Sookie" => "St James",
    ];
?>

    <table border=1>
        <tr>
            <th>Nome</th>
            <th>Sobrenome</th>
        </tr>

        <?php foreach ($informacoesPersonagem as $nome => $sobrenome): ?>
            <tr>
                <td><?php echo $nome; ?></td> 
                <td><?php echo $sobrenome; ?></td> 
            </tr>
        <?php endforeach; ?>

    </table>