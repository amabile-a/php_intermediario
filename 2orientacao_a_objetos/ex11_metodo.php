<?php

    // criar uma classe com métodos
    // utilizar esses métodos em novas instancias

    class Pagamento{
    function pagarDebito($local){
        return "$local. Pagamento feito no cartão de débito <br>";
    }
    function pagarCredito($local){
        return "$local. Pagamento feito no cartão de crédito <br>";
    }

    function pagarDinheiro($local){
        return "$local. Pagamento feito em dinheiro <br>";
    }
    }

    $mercado = new Pagamento();
    $padaria = new Pagamento();
    $farmacia = new Pagamento();

    echo $mercado -> pagarCredito("Mercado");
    echo $padaria -> pagarDinheiro("Padaria");
    echo $farmacia -> pagarDebito("Farmácia");

?>