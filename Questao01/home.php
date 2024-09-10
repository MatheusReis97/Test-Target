<?php 


// 1) Observe o trecho de código abaixo: int INDICE = 13, SOMA = 0, K = 0;
// Enquanto K < INDICE faça { K = K + 1; SOMA = SOMA + K; }
// Imprimir(SOMA);
// Ao final do processamento, qual será o valor da variável SOMA?


$INDICE = 13;
$SOMA = 0 ; 
$K = 0; 

while($K < $INDICE){
 $K = $K + 1;
 $SOMA = $SOMA + $K;

};

echo $SOMA; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão01</title>
</head>
<body>
    
</body>
</html>