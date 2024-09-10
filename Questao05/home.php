<?php

// 5) Escreva um programa que inverta os caracteres de um string.

// IMPORTANTE:
// a) Essa string pode ser informada através de qualquer entrada de sua preferência ou pode ser previamente definida no código;
// b) Evite usar funções prontas, como, por exemplo, reverse;

if(!empty($_POST['string'])){

    $palavra = $_POST['string'];

    $tamanhoString = strlen($palavra);

    $stringInvertida = '';

    for( $i = $tamanhoString -1 ; $i >= 0 ; $i--){

        $stringInvertida .= $palavra[$i];
    }



}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão05
    </title>
</head>
<body>
 <form action="home.php" method="post">
    <label for="name">Adicione caracteres para ser invertida a sua ordem:</label>
    <input type="text" name="string" id="string">
    <button type="submit"> Inverter </button>
 </form>
 <br>
<?php 
  echo $stringInvertida ; 
?>

</body>
</html>