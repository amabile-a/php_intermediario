<?php

    // criar uma classe 
    // iniciar as propriedades via construtor
    // criar um método para exibir cada propriedade

    class User{
        private $nomeUsuario;
        private $senha;

        public function __construct($nomeUsuario, $senha) {
            $this->nomeUsuario = $nomeUsuario;
            $this->senha = $senha;
        }

        function mostrarInfoUsuario(){
            echo "Nome do usuário: " . $this -> nomeUsuario . "<br>";
            echo "Senha do usuário: " . $this -> senha . "<br>";
        } 
    }

    $usuario1 = new User("Lorelai", "cafe");
    $usuario1 -> mostrarInfoUsuario();

?>