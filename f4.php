<?php 
$startTime = microtime(true);
$websitedata= file_get_contents('https://postman-echo.com/get?from=ostad');
$endTime = microtime(true);
echo $websitedata;
print_r( json_decode($websitedata,true));
echo "\n\n\n\n";
$executionTime = ($endTime - $startTime)*1000;
echo "Execution time: ".$executionTime."ms";