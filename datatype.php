<?php
$var_a=7;
echo("var_a : $var_a <br>");

$var_b="박수현";
echo("var_b : $var_b <br>");

$var_b="12345";
$var_result= $var_a+$var_b;
echo("var_b : $var_b <br>");
echo("var_b : $var_result");

echo("<br>"); //html <br> 기능

$a = 350.50;
$type=gettype($a);
echo("실수형 변수 a의 값은 $a 이고 변수형은 ${type}형 입니다. <br>");
$a = (int)$a;
$type=gettype($a);
echo("정수형 변수 a의 값은 $a 이고 변수형은 ${type}형 입니다. <br>");

?>