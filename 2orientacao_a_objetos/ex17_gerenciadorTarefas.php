<?php

    // Crie uma classe chamada Task que represente uma tarefa.
    // Deve conter: título da tarefa, descrição da tarefa, indica se a tarefa está concluída ou não.

    // Deve ter os seguintes métodos:
    // marcar a tarefa como concluída.
    // marcar a tarefa como não concluída.
    // retornar o título da tarefa.
    // retornar a descrição da tarefa.
    // retornar um booleano indicando se a tarefa está concluída ou não.

    class Task{
        public $titulo;
        public $descricao;
        public $concluidaOuNao;

        function __construct($titulo, $descricao, $concluidaOuNao){
            $this->titulo = $titulo;
            $this->descricao = $descricao;
            $this->concluidaOuNao = $concluidaOuNao;
        }

        function marcarConcluida(){
            return $this-> concluidaOuNao = true;
        }

        function marcarNaoConcluida(){
            return $this-> concluidaOuNao = false;
        }
        
        function getTitulo(){
            return $this->titulo;
        }

        function getDescricao(){
            return $this->descricao;
        }

        function estaConcluida(){
            if($this->concluidaOuNao == true){
                return "A tarefa foi concluída <br>";
            } else {
                return "A tarefa não foi concluída ainda <br>";
            }
        }

        function mostrarInfoTarefa(){
            echo $this->titulo . "<br>";
            echo $this->descricao . "<br>";
            echo $this->estaConcluida() . "<br>";
        }
    }

    $tarefa1 = new Task("Estudar", "Estudar Orientação a Objetos no PHP", true);
    echo $tarefa1->mostrarInfoTarefa();



?>