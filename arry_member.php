<?php

$member1 = ['name' => '김철수','age'=> 29];
$member2 = ['name' => '이민우','age'=> 32];
$member3 = ['name' => '박영배','age'=> 37];
$member4 = ['name' => '김소라','age'=> 26];
$member5 = ['name' => '이수지','age'=> 32];

$team_a = [$member1, $member2, $member3];
$team_b = [$member4, $member5];

echo("Team A: <br>");
print_r($team_a);
echo("<br>");
echo("Team B: <br>");
print_r($team_b);
echo("<br>");

?>