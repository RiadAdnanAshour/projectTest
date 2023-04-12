<?php

$errors = [];
// echo 'GET<br>';
// print_r($_GET);
// echo 'POST<br>';
if (isset($_POST['send'])) {
    echo 'Y r in ' . $_SERVER['PHP_SELF']  . ' page';
    // echo '<pre>';
    // print_r($_FILES);
    // print_r($_POST);
    // echo $_POST['email'] . $_POST['password'];
    if ($_POST['email'] == '') {
        echo 'Plz, Enter email';
    } else {
        echo $_POST['email'];
    }

    if (strlen($_POST['password']) < 8) {
        $errors[] = 'Password MUST be longer than 8 chars';
    }

    if (isset($_POST['check'])) {
        echo 'CHECKED';
    }
    // if(is_null($_POST['email'])){}


    if (count($errors) > 0) {


        foreach ($errors as $err) {
            echo $err . '<br>';
        }
    }
}

