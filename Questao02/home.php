<?php

// 2) Dado a sequência de Fibonacci, onde se inicia por 0 e 1 e o próximo valor sempre será a soma dos 2 valores anteriores (exemplo: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34...), escreva um programa na linguagem que desejar onde, informado um número, ele calcule a sequência de Fibonacci e retorne uma mensagem avisando se o número informado pertence ou não a sequência.

// IMPORTANTE: Esse número pode ser informado através de qualquer entrada de sua preferência ou pode ser previamente definido no código;

if (!empty($_POST['numero'])) {
    $numero = $_POST['numero'];

    $prim = 0;
    $segun = 1;
    $pertence = false;


    if($numero == $prim || $numero == $segun){
        if($numero == $prim ){
        $mensagem = "O número $numero pertence à sequência de Fibonacci.";
        } 
        else { 
           $mensagem = "O número $numero pertence à sequência de Fibonacci.";
        }
    }
     else { 
        while ($segun <= $numero) {
            $terceiro = $prim + $segun;
            $prim = $segun;
            $segun = $terceiro;

            if ($segun == $numero) {
                $pertence = true;
                break;
            }
        }
        if ($pertence === true) {
            $mensagem = "O número $numero pertence à sequência de Fibonacci.";
        } else {
            $mensagem = "O número $numero não pertence à sequência de Fibonacci.";
            
        }
    }


}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão02</title>
</head>
<body>
    <form action="" method="POST">
        <label for="numero">Informe um número:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Enviar</button>
    </form>

    <?php 

        echo $mensagem;

    ?>
</body>
</html>