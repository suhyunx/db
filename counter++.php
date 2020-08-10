<?php
$connect=mysqli_connect('localhost','root','password') or die ("database could not connect");
//서버ip , id , pass 연결하기 
echo 'Connected successfully<br>';

mysqli_select_db($connect,'webp');
//db 연결하기

$query = "insert into counter (number) values (1)";
//counter 테이블에 number 값을 1로 지정

$result = $connect->query($query);
//db에 업데이트

echo("number값이 1로 지정되었습니다");

?>
