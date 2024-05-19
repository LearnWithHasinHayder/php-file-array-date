<?php
//associtaive array
//person
$person = array(
    'fname' => 'John',
    'lname' => 'Doe',
    'age' => 32,
    'hobbies' => array('football', 'reading', 'movies'),
);

// $personstring = implode(', ', $person);
// echo $personstring;

$personstring2 = serialize($person);
// echo $personstring2;

$personstring3 = json_encode($person);
// echo $personstring3;

$personobject = json_decode($personstring3,true);
// print_r($personobject);

