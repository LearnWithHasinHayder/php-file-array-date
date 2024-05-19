<?php 
//delete a file
if(file_exists('temp.txt')){
    unlink('temp.txt');
    echo "File deleted";
}
//  unlink('temp.txt');

copy('data.txt', 'data2.txt');