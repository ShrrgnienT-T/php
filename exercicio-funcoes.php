<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio funcoes</title>
</head>
<body>


<?php
    // global $salario_base;
    $salario_base = 5000;
    function calcularIr($a){
        if ($a <= 1903.98){
            echo "Isento de IR";
    }   
        if($a> 1903.98 && $a<= 2826.65 ){
            echo "Sua alíquota de IR é de 7.5%";
}
        if($a > 2826.65 && $a <= 3751.05 ){
            echo "Sua alíquota de IR é de 15%";
}
        if($a > 3751.05  && $a <= 4664.68 ){
            echo "Sua alíquota de IR é de 22.5%";
}
        if($a > 4664.68){
            echo "Sua alíquota de IR é de 27.5%";
}
      
}
?>

    <?php 
    
    calcularIr($salario_base);
    ?>
</body>


</html>






