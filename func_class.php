<?php

$a=100;
Function Test() {
    echo ("변수 \$a의 값은 ${a}입니다. <br>");
}

Function Test2() {
    global $a;
    echo ("변수 \$a의 값은 ${a}입니다. <br>");
}

class Car {
    function testCar() {
        echo("call to test Car function!");
    }
}

function countIt() {
    static $i=0;
    echo("$i <br>");
    $i++;
}

$sedan = new Car;
$sedan->testCar();
Test();
Test2();
countIt();
countIt();
countIt();
countIt();
?>