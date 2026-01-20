<?php

    // criar uma classe com variaveis e metodos
    // criar novos objetos e modificar o valor das variaveis/propriedades

    class Livro{
        public $nomeLivro;
        public $anoLancamento;
        public $qtdPaginas;

        function emprestar(){
            return "O livro foi emprestado <br>";
        }

        function vender(){
            return "O livro foi vendido <br>";
        }
    }

    $primeiroLivro = new Livro();
    
    $primeiroLivro -> nomeLivro = "Anne de Green Gables";
    $primeiroLivro -> anoLancamento = 1908;
    $primeiroLivro -> qtdPaginas = 429;

    echo $primeiroLivro->nomeLivro . "<br>";
    echo $primeiroLivro->anoLancamento . "<br>";
    echo $primeiroLivro->qtdPaginas . "<br>";
    echo $primeiroLivro->emprestar();

?>