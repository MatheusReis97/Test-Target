<?php

// 4) Dado o valor de faturamento mensal de uma distribuidora, detalhado por estado:
// • SP – R$67.836,43
// • RJ – R$36.678,66
// • MG – R$29.229,88
// • ES – R$27.165,48
// • Outros – R$19.849,53

// Escreva um programa na linguagem que desejar onde calcule o percentual de representação que cada estado teve dentro do valor total mensal da distribuidora.  

$faturamentoEstados = [
    "SP" => 67836.43,
    "RJ" => 36678.66,
    "MG" => 29229.88,
    "ES" => 27165.48,
    "Outros" => 19849.53
];

$totalFaturamento = array_sum($faturamentoEstados);

foreach ($faturamentoEstados as $estado => $valor){
    $percentual = ($valor / $totalFaturamento) * 100 ;

    echo "Estado: $estado - Percentual: " . number_format($percentual, 2, ',', '.') . "%<br>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão04 </title>
</head>
<body>
    
</body>
</html>