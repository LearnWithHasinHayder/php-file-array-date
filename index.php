<?php 
$date = strtotime('today');
// echo date('Y-m-d H:i:s', $date);

$dateafter10days = strtotime('today +10 days 6hours', $date);
// echo date('Y-m-d H:i:s', $dateafter10days);

//number of week in current year
$week = date('W', $date);
// echo $week;

$tomorrow = strtotime('tomorrow');
// echo date('Y-m-d H:i:s', $tomorrow);

$date = strtotime('22nd May 2024 8PM');
echo date('Y-m-d H:i:s', $date);