<?php 
//performance check in ms
$startTime = microtime(true);
for($i=0; $i<1000; $i++){
    $y = $i*$i;
}
$endTime = microtime(true);
$executionTime = ($endTime - $startTime)*1000;
echo "Execution time: ".$executionTime."ms";


echo $startTime;