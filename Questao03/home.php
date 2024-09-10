<?php
//  Dado um vetor que guarda o valor de faturamento diário de uma distribuidora, faça um programa, na linguagem que desejar, que calcule e retorne:
//  • O menor valor de faturamento ocorrido em um dia do mês;
//  • O maior valor de faturamento ocorrido em um dia do mês;
//  • Número de dias no mês em que o valor de faturamento diário foi superior à média mensal.
 
//  IMPORTANTE:
//  a) Usar o json ou xml disponível como fonte dos dados do faturamento mensal;
//  b) Podem existir dias sem faturamento, como nos finais de semana e feriados. Estes dias devem ser ignorados no cálculo da média;


 $conteudoarquivo = file_get_contents('dados.json');
 $dados = json_decode($conteudoarquivo, true);


 $maiorValor = 1;
 $menorValor = $dados[0]['valor'];
 $somatotal = 0;
 $diasTotal = 0;
 $acimaDaMedia = 0;


 foreach($dados as $dado){
    $valor = $dado['valor'];

    // definindo maior e menor valores ; 
    if ($valor > 0){
        if($valor < $menorValor){
            $menorValor = $valor;
        }

        if($valor > $maiorValor){
            $maiorValor = $valor;
        }
    }


    // Para fatururamento - média mensal 
    $somatotal += $valor;
    $diasTotal++;

 }

 $media = $somatotal / $diasTotal;

    foreach($dados as $dado){

        if($dado['valor'] > $media){
            $acimaDaMedia++;
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão03</title>
</head>
<body>
     <p> • O menor valor de faturamento ocorrido em um dia do mês;</p>
        <?php 
        echo number_format($menorValor, 2, ',', '.')
        ?>
        <p> • O maior valor de faturamento ocorrido em um dia do mês;</p>
        <?php 
         echo number_format($maiorValor, 2, ',', '.')
        ?>
        <p> • Número de dias no mês em que o valor de faturamento diário foi superior à média mensal;</p>
        <?php
         echo $acimaDaMedia  
        ?>

</body>
</html>