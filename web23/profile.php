<?php

session_start();
if(!isset($_SESSION['name'])){
    // echo 'Member ONLY';
    header('Location: index.php');
} else {
    echo $_SESSION['name'];
}