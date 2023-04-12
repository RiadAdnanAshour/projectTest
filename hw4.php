<?php
$name = "riad";
$id = 1301201481;


if(!file_exists("test.txt")){
   $fh = fopen('test.txt', 'w');
}else{
    $fh = fopen('test.txt', 'a+');
    fwrite($fh, $name ." ". $id);
    // قراءة محتويات الملف
    $contents = fread($fh, filesize('test.txt'));
    fseek($fh, 0);
    $fh = fopen('test.txt', 'w+');
    fwrite($fh, "welcome " . $contents);
    fclose($fh);
    $fh = fopen('test.txt', 'a+');
    fwrite($fh, " " . "0597");
}
fclose($fh);