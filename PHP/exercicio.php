<?php
$tanq = 50;
$dist = 300;
$binario = "00001100";
$decimal = "12";
$hexadecimal = "c";
$vendedor = "Ronaldo";
$salario = 1000;
$vendas = 1000;
$a = 6;
$b = 8;
$c = 7;
$celsius = 28;
$fibonacci = 1;
$idade = 13444;
$evento = 7200; 



//media de consumo
function automovel($dist, $tanq){
    return $dist / $tanq;
}//fim da função média

/*sequência de Fibonacci
function fibo(){
    $msg = "";
    for ($i = 0; $i <= 100; $i++){
        $msg .= "<br> $i + $i = ".($i + $i);
    }//fim do for
    return $msg;
}*/

//conversão de binário para decimal
function dec($binario){
    return $dec = bindec($binario);
}//fim do exercicio de conversão do binario para decimal

//exercicio conversão de decimal para hexadecimal
function hex($decimal){
    return $hex = dechex($decimal);
}//fim do exercicio conversão de decimal para hexadecimal

//exercicio conversão de hexadecimal para binário
function bin($hexadecimal){
    return $hex = base_convert($hexadecimal, 12, 2);
}//fim do exercicio conversão de hexadecimal para binário

//exercicio salário do vendedor
function venda($vendas){
    return $vendas * 1.15;
}//fim do exercicio salário do vendedor

//exercicio média do aluno
function aluno($a, $b, $c){
    return ($a + $b + $c) / 3;
}//fim do exercicio média do aluno

//exercecio de conversão de graus
function graus($celsius){
    return (9 * $celsius + 160) / 5; 
}//fim do exercicio de conversão de graus

//exercicio de mostrar a idade expressa em anos meses e dias
function oldyears($idade){
    return ($idade / 365); 
}//fim do exercicio de mostrar a idade expressa em anos meses e dias

//exercicio duração de um evento na fabrica
function event($evento){
    return $evento / 3600;
}//fim do exercicio duranção de um evento

//exercicio três médias
function tMedias($a, $b, $c){ 
    $mediaArit = ($a + $b + $c) / 3;
    $mediaPon = (($a * 3) + ($b * 3) + ($c * 4)) / (3 + 3 +4);
    return $mediaArit.$mediaPon;
}//fim do exercecio três médias

//exercicio calculo do produto com IPI
function prodImpost($valorF){
    $peca1 = 10;
    $peca2 = 15;
    return $valorF = ($peca1 * 1 + $peca2 * 2) * (7 / 100 + 1);
}//fim do exercicio do produto com IP

//exercicio 13
function intPos($a, $b, $c, $r, $s, $d){
    $a = 4;
    $b = 6;
    $c = 8;
    $r = ($a + $b) ** 2;
    $s = ($b + $c) ** 2;
    return $d = ($r + $s) / 2;
}//fim do exercicio 13
        


echo "<br>O carro percorreu $dist quilômetros com $tanq litros de combustível, sendo assim a média de consumo é: ".automovel($dist, $tanq)."L"; 
echo "<br>A conversão do número binario $binario para decimal é: ".dec($binario);
echo "<br>A conversão do número decimal $decimal para hexadecimal é: ".hex($decimal);
echo "<br>A conversão do número hexadecimal $hexadecimal para binario é: ".bin($hexadecimal);
echo "<br>O funcionário $vendedor, vai receber seu salário base deR$ $salario, mais o percetual de 15% sobre as vendas de R$ $vendas, sendo o toal a receber é: R$".venda($vendas, $salario); 
echo "<br>O aluno $vendedor teve as notas: $a, $b e $c durante o semestre e sua média ficou: ".aluno($a, $b, $c);
echo "<br>A temperatura em graus Celsius $celsius ° convertido para Fahrenheit fica: ".graus($celsius)."F";
echo "<br>".oldyears($idade);
echo "<br>O evento na empresa teve $evento segundos, que covertendo para horas ficou com a duração de: ".event($evento)."h";
echo "<br>".tMedias($a, $b, $c);
echo "<br>Levando em cosideração a quantidade e o percetual de 7% de IPI, o valor final fica: R$".prodImpost($valorF);
echo "<brO resultado do exercício 13 é: ".intPos($a, $b, $c, $r, $s, $d);
?>