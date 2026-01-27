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

    $livro1 = new Livro();
    
    $livro1 -> nomeLivro = "Anne de Green Gables";
    $livro1 -> anoLancamento = 1908;
    $livro1 -> qtdPaginas = 429;

    echo $livro1 -> nomeLivro . "<br>";
    echo $livro1 -> anoLancamento . "<br>";
    echo $livro1 -> qtdPaginas . "<br>";
    echo $livro1 -> emprestar();
    echo $livro1 -> vender();

?>