<?php

    // criar uma classe com propriedades
    // criar métodos para modificar essas propriedades

    class Cliente {

        public $numCadastro;
        public $nomeCliente;

        function cadastrarNumCliente($nomeCliente, $numCadastro){ //setCadastro()
            if($numCadastro < 0){
                echo "Cadastro inválido! Cadastro precisa ser um número positivo <br>";
            }
            $this -> numCadastro = $numCadastro;
            $this -> nomeCliente = $nomeCliente;
        }

        function alterarCadastro($numCadastro){ //setCadastro()
            if($numCadastro < 0){
                return "Cadastro inválido! Cadastro precisa ser um número positivo <br>";
            }
            $this -> numCadastro = $numCadastro;
        }

        function deletarCadastro() {
            $this->numCadastro = null;
        }

        function mostrarInfoCliente(){
            echo "Nome do cliente: " . $this -> nomeCliente . "<br>";
            echo "Número do cadastro: " . $this -> numCadastro . "<br>";
        }
    
    }
    echo "Cliente 1: <br>";
    $cliente1 = new Cliente();
    $cliente1 -> cadastrarNumCliente("Lorelai", 32);
    $cliente1 -> mostrarInfoCliente() . "<br>";

    $cliente1 -> alterarCadastro(52);
    $cliente1 -> mostrarInfoCliente() . "<br>";

    $cliente1-> deletarCadastro();
    $cliente1 -> mostrarInfoCliente() . "<br>";

    echo "<br>";
    echo "Cliente 2: <br>";

    $cliente2 = new Cliente();
    $cliente2 -> cadastrarNumCliente("Rory" , -2);
    $cliente2 -> mostrarInfoCliente() . "<br>";


?>