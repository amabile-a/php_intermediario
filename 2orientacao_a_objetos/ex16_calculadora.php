<?php

    // Crie uma classe chamada Calculadora que tenha os seguintes métodos:
    // somar(a, b): recebe dois números como parâmetros e retorna a soma deles.
    // subtrair(a, b): recebe dois números como parâmetros e retorna a subtração do segundo número do primeiro.
    // multiplicar(a, b): recebe dois números como parâmetros e retorna a multiplicação deles.
    // dividir(a, b): recebe dois números como parâmetros e retorna a divisão do primeiro número pelo segundo.

    class Calculadora{

        public $a;
        public$b;

        function somar($a, $b){
            return $a + $b;
        }

        function subtrair($a, $b){
            return $b - $a;
        }

        function multiplicar($a, $b){
            return $a * $b;
        }

        function dividir($a, $b){
            return $a / $b;
        }

    }

    $conta = new Calculadora();

    echo $conta->somar(5, 5) . "<br>";
    echo $conta->subtrair(5, 5) . "<br>";
    echo $conta->multiplicar(5, 5) . "<br>";
    echo $conta->dividir(5, 5) . "<br>";


?>