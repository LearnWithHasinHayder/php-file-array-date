<?php 
$string = 'a:4:{s:5:"fname";s:4:"John";s:5:"lname";s:3:"Doe";s:3:"age";i:32;s:7:"hobbies";a:3:{i:0;s:8:"football";i:1;s:7:"reading";i:2;s:6:"movies";}}';
$person = unserialize($string);
print_r($person);

