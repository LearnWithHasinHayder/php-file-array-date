<?php 
// $date1 = new DateTime('2024-05-22 20:00:00');
$date1 = new DateTime('now', new DateTimeZone('Asia/Dhaka'));
$date2 = new DateTime('2024-03-14 20:00:00');

$difference= $date1->diff($date2);
// echo $difference->format('%Y years %m months %d days');
echo $difference->format('%R%a days');

// echo $date1->format('Y-m-d g:i:s a');


//add 10 days
$date1->add(new DateInterval('P2Y5M10D'));
// echo $date1->format('Y-m-d g:i:s a');

//substract 10 days
// $date1->sub(new DateInterval('P2Y5M10D'));

