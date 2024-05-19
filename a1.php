<?php 
$fruits = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango'); //indexed array
$allfruits1 = implode(', ', $fruits);
// echo $allfruits1;

$allfruits2 = $fruits[0].','.$fruits[1].','.$fruits[2].','.$fruits[3].','.$fruits[4].','.$fruits[5];
// echo $allfruits2;

//serialize
$allfruits3 = serialize($fruits);
// echo $allfruits3;

//json
$allfruits4 = json_encode($fruits);
echo $allfruits4;

//reverse
$allfruitsr1 = explode(', ', $allfruits1);
// print_r($allfruitsr1);

$allfruitsr2 = explode(',', $allfruits2);
// print_r($allfruitsr2);

$allfruitsr3 = unserialize($allfruits3);
// print_r($allfruitsr3);

$allfruitsr4 = json_decode($allfruits4);
print_r($allfruitsr4);