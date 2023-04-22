<?php
$file_name = 'counter.txt';
$file = fopen($file_name, 'a+');

if ($file) {
    $count = (int) fgets($file);
    $count++;

    fseek($file, 0);
    fwrite($file, $count);
    fclose($file);

    echo "This page has been visited $count times.";
}




