<?php 
$data = file_get_contents('data.txt');
$unserialized_data = unserialize($data);
print_r($unserialized_data);