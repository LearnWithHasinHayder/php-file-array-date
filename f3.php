<?php 
$fp = fopen('fruits.txt', 'r');
// $fruits = fread($fp, filesize('fruits.txt'));
// echo $fruits;

while($line = fgets($fp)){
    echo "\n".$line."\n";
    // echo "-----------------------";
    echo str_repeat('-', 20);

}