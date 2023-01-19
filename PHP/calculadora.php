<?php
//Aqui excrevo TODO o código PHP$

$num1 = 5;
$num2 = 6;
$a = 1;
$b = -8;
$c = 12;

//Operações
function soma($num1, $num2){
    return$num1 + $num2;
}//fim da função soma

function subtracao($num1, $num2){
    return $num1 - $num2;
}//fim da função subtração

function divisao($num1, $num2){
    return$num1 / $num2;
    if ($num2 <= 0){
            return "Impossível dividir por zero!";
    }
}//fim da função dividir

function multiplicacao($num1, $num2){
    return $num1 * $num2;
}//fim da função multiplicar

function potencia($num1, $num2){
    return $num1 ** $num2;
}//fim da função potência

function tabuada($num2){
    $msg = "";
    for ($i = 0; $i <= 10; $i++){
        $msg .= "<br> $i x $num2 = ".($i * $num2);
    }//fim do for
    return $msg;
}

function calcularDelta($a, $b, $c){
    $delta = ($b ** 2) - 4 * $a * $c;
    return $delta;
}//fim da função delta

function calcularX1($a, $b, $c){
    $del = calcularDelta($a, $b, $c);
    if($del < 0){
        return "Impossível calcular o X1, pois o delta é NEGATIVO!";
    }else{
        $x1 = (-$b + sqrt($del)) / (2 * $a);
        return $x1;
    }//fim do if e else
}//fim da função X1

function calcularX2($a, $b, $c){
    $del = calcularDelta($a, $b, $c);
    if($del < 0){
        return "Impossível calcular o X2, pois o delta é NEGATIVO!";
    }else{
        $x2 = (-$b - sqrt($del)) / (2 * $a);
        return $x2;
    }//fim do if e else
}//fim da função X2



//Eu uso para escrever na tela o elemento echo
$num3 = 8;
echo " <br>A soma de $num1 e $num2 é: ".soma($num1, $num2);
echo " <br>A subtração de $num1 e $num2 é: ".subtracao($num1, $num2);
echo " <br>A divisão de $num1 e $num2 é: ".divisao($num1, $num2);
echo " <br>A multiplicação de $num1 e $num2 é: ".multiplicacao($num1, $num2);
echo " <br>$num1 elevado a $num2 é: ".potencia($num1, $num2);
echo tabuada($num2);
echo " <br>O valor de delta é: ".calcularDelta($a, $b, $c);
echo " <br>O valor de x1 é: ".calcularX1($a, $b, $c);
echo " <br>O valor de x2 é: ".calcularX2($a, $b, $c);

?>