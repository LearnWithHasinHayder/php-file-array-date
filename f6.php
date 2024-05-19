<?php 
$person = array(
    'fname' => 'John',
    'lname' => 'Doe',
    'age' => 32,
    'hobbies' => array('football', 'reading', 'movies'),
);

$personstring = json_encode($person,JSON_PRETTY_PRINT);
file_put_contents('personjson.txt', $personstring);