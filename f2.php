<?php 
$person = array(
    'fname' => 'John',
    'lname' => 'Doe',
    'age' => 32,
    'hobbies' => array('football', 'reading', 'movies'),
);

$personstring = json_encode($person);
// file_put_contents('person.txt', "\n".$personstring, FILE_APPEND);
file_put_contents('person.txt', "\n".$personstring, FILE_APPEND);