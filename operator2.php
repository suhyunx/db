<?php
$a = "5";
echo("a값은 $a<br>");
$b = "";
echo("b값은 $b<br>");
$c = "12";
echo("c값은 $c<br><br>");

echo"--논리 연산자--<br>";

if($a && $b) {
    echo("참");
}else {
    echo("거짓");
}
echo "<br>";

if($a xor $b) {
    echo("참");
}else {
    echo("거짓");
}
echo "<br><br>";

echo"--비교 연산자--<br>";

if($a < $b) {
    echo("참");
}else {
    echo("거짓");
}
echo "<br>";

if($a == $b) {
    echo("참");
}else {
    echo("거짓");
}
echo "<br>";


?>