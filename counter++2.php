<?php
$connect=mysqli_connect('localhost','root','Fhraosx8!') or die ("database could not connect");
// 서버ip , id , pass 연결하기 
echo 'Connected successfully<br>';

mysqli_select_db($connect,'webp');
// db 연결하기

$query = "SELECT user_number from user_counter";
// user_counter 테이블에서 user_number 레코드값을 받아온다 

$result_set = mysqli_query($connect, $query);
// 쿼리값을 result_set으로 저장

$row = mysqli_fetch_assoc($result_set);
// 쿼리값을 배열로 받아옴

$number = $row['user_number'];
// 그 중 user_number 값중 첫번째 값을 $number에 저장함

$counter = $number+1;

$query = "UPDATE user_counter set user_number='$counter' where user_number = $number";
// user_number 값이 $number 인 행의 user_number 레코드 값을 $counter 으로 업데이트 하라는 쿼리값을 저장

$result = $connect->query($query);
// db에 업데이트

echo("현재 $counter 손님이십니다");

?>
