<?php

$host = 'localhost';
$username = 'rodot';
$password = '';
$dbname = 'web23';

$conn = (mysqli_connect($host, $username, $password, $dbname));// or (die('Failed'));
if(!$conn){
    echo 'Failed....';
} else {

    echo 'PASS';
}