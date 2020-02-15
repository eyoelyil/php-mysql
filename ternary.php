<?php
    
//   $quote = readfile('readme.txt');
//     echo $quote;

    $file = 'readme.txt';

    if(file_exists($file)) {
        echo readfile($file);
    } else {
        echo 'file does not exist';
    }
?>
