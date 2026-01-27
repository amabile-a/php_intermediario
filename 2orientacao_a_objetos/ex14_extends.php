<?php

    // criar uma classe com propriedades privadas
    // criar outra classe que extende essas propriedades e tenha novas propriedades

    class Usuario{
        private $nomeUsuario;
        private $senha;

        function setNome($nome){
            return $this -> nomeUsuario = $nome;
        }

        function setSenha($senha){
            return $this-> senha = $senha;
        }

        function mostrarInfoUsuario(){
            echo "Nome do usuário: " . $this -> nomeUsuario . "<br>";
            echo "Senha do usuário: " . $this -> senha . "<br>";
        } 

    }

    class Jogador extends Usuario{
        private $conquistas;

        function setConquistas($conquistas){
            return $this -> conquistas = $conquistas;
        }

        function mostrarConquistas(){
            echo "Número de conquistas: " . $this -> conquistas . "<br>";
        }

    }

    $jogador1 = new Jogador();

    $jogador1 -> setNome("Rory");
    $jogador1 -> setSenha("metamorfose");
    $jogador1 -> setConquistas(2000);
    $jogador1 -> mostrarInfoUsuario();
    $jogador1 -> mostrarConquistas();

?>