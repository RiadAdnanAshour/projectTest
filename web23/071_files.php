<?php

// create dir
// if(!file_exists('abc')){
//     mkdir('abc');
// } else {
//     echo 'Dir exists';
// }


// if(file_exists('abc\\test.txt')){
//     $fh = fopen('abc\\test.txt', 'r+');
//     echo 'File Opened';
//     // fwrite($fh, ' , AAA');
//     echo '<br>data written<br>';
//     // echo '<br>' . fread($fh, 13);
//     echo fgets($fh) . '<br>';
//     echo fgetc($fh);
// } else {
//     // echo 'Not found';
//     $fh = fopen('abc\\test.txt', 'w');
// }

// if(!copy('abc\\test.txt', 'abc\\test2.txt')){
//     echo 'err';
// } else {
//     echo 'ss';
// };
// echo realpath('abc\\test.txt');
// rename('abc\\test.txt', 'abc\\test12.txt' );
echo filesize('abc\\test12.txt');
// unlink('abc\\test2.txt');