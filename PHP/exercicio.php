<?php
$tanq = 50;
$dist = 300;
$binario = "00001100";
$decimal = "12";
$hexadecimal = "c";
$vendedor = "Ronaldo";
$salario = 1000;
$vendas = 1000;

//media de consumo
function automovel($dist, $tanq){
    return $dist / $tanq;
}//fim da função média

//sequência de Fibonacci
//function tabuada($num2){
    //$msg = "";
    //for ($i = 0; $i <= 10; $i++){
        //$msg .= "<br> $i x $num2 = ".($i * $num2);
    //}//fim do for
    //return $msg;
//}//fim da 

//conversão de binário para decimal
function dec($binario){
    return $dec = bindec($binario);
}//fim da função de conversão do binario para decimal

function hex($decimal){
    return $hex = dechex($decimal);
}

function bin($hexadecimal){
    return $hex = base_convert($hexadecimal, 12, 2);
}

function venda($vendas){
    return $vendas * 1.15;
}
        


echo "<br>O carro percorreu $dist quilômetros com $tanq litros de combustível, sendo assim a média de consumo é: ".automovel(300, 50); 
echo "<br>A conversão do número binario $binario para decimal é: ".dec($binario);
echo "<br>A conversão do número decimal $decimal para hexadecimal é: ".hex($decimal);
echo "<br>A conversão do número hexadecimal $hexadecimal para binario é: ".bin($hexadecimal);
echo "<br>O funcionário $vendedor, vai receber seu salário base deR$ $salario, mais o percetual de 15% sobre as vendas de R$ $vendas, sendo o toal a receber é: ".venda($vendas, $salario); 

?>