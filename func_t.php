<?php
$num_a=7;
Function printnum() 
{
    global $num_a;
    echo "$num_a";
}

Function sum_plus($x,$y) 
{
    $x=$x+$y;
    return $x;
}

printnum();
$num_f=sum_plus(1,4);
echo "<br>";
echo ("$num_f");
echo "<br>";
$res=mktime(3,34,7,8,10,2020);
echo("timestamp으로 $res 은 2020년 8월 10일 3시 34분 7초로 출력가능 <br>");
$str=date("년도 출력 - Y 또는 y",$res);
echo("$str <br>");


?>