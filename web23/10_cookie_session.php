<?php

// COOKIE
$cname = 'Ali';
$cvalue = 'Admin';
// setcookie($cname, $cvalue, time() + 60*60*24 * 365); // year
setcookie($cname, $cvalue, time() + 60);
// setcookie('ali', 'SuperAdmin' );
//delete cookie
// setcookie($cname, $cvalue, time() - 10); // delete cookie
// if(isset($_COOKIE['Ali'])){
//     echo $_COOKIE['Ali'];
// } else {
//     echo 'EXPIRE';
// }
setcookie($cname, $cvalue, time() - 60);
// echo '<br>' . count($_COOKIE);

// SESSION
session_start();
$_SESSION['name'] = 'Alisdfg';
if(isset($_SESSION['name'])){
    
    // session_destroy();
    echo $_SESSION['name']. '<br>';
}

echo '<a href="profile.php">Profile</a>';

unset($_SESSION['name']);
// echo $_SESSION['name'];
// session_destroy();