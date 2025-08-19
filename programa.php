<?php

        // Este é um comando PHP que imprime uma mensagem na tela
        echo "Olá, mundo!  Este é um exemplo de código PHP.<br>";

        #comentário de uma linha

        /* Este é um comentário de várias linhas
           que pode ser usado para descrever o código
           ou explicar a lógica por trás dele. */

           $nome = "Rodolfo Almeida";
           $idade = 38;
              echo "Meu nome é $nome e tenho $idade anos.<br>";

           $a = 16;
           $b = 9;
            // Operações matemáticas
            $c = $a + $b;  // operador de adição
            $d = $a - $b;  // operador de subtração
            $e = $a * $b;  // operador de multiplicação
            $f = $a / $b;  // operador de divisão
            $g = $a % $b;  // operador de módulo (resto da divisào)
            $h = $a ** $b; // operador de exponenciação

            var_dump($a); // Exibe o valor de $a, descobrindo seu tipo e valor

           

            echo "$c<br>";
            echo "$d<br>";
            echo "$e<br>";
            echo "$f<br>";
            echo "$g<br>";
            echo "$h<br>";

             // Operadores Lógicos
            // && operador lógico AND, verdadeiro se ambos os lados forem verdadeiros
            // || operador lógico OR, verdadeiro se pelo menos um lado for verdadeiro
            // ! operador lógico NOT, inverte o valor lógico
            // AND / OR, Funcionam como os operadores lógicos, mas tem precedencia diferente
            // XOR operador lógico exclusivo, verdadeiro se apenas um dos lados for verdadeiro

            echo "<br>Operadores Lógicos:<br>";
            var_dump(true && true);     //true tendo ambos os lados verdadeiros
            var_dump(true && false);    //false um lado falso outro verdadeiro
            var_dump(false || false );  //false um lado falso outro verdadeiro
            var_dump(false || false );  //false dois lados falsos
            var_dump(!true);            //false negacao do verdadeiro
            var_dump(true xor true);    //false dois lados verdadeiros, resultado falso pois é exclusivo
            var_dump(true xor false);   //true   um é verdadeiro e outro falso, resultado verdadeiro pois é exclusivo         
           

           




?>