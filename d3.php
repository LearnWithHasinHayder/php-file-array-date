<?php 
$date =  new DateTime('now');
$string = $date->format('Y-m-d H:i:s');
// echo $string;

// $timestamp = $date->getTimestamp();
$timestamp = time();
// echo $timestamp;

//unix epoch = 1st january 1970 00:00:00

//date from timestamp
$date = new DateTime('@'.$timestamp);
echo $date->format('Y-m-d H:i:s');
echo "\n";

$date2 = date('Y-m-d H:i:s', $timestamp);
echo $date2;

