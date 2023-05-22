<?php

if (isset($_GET['length']) && $_GET['length'] > 0) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+{}[]:";?/';
    $password = '';

    for ($i = 0; $i < $_GET['length']; $i++){
    $password .= $characters[mt_rand(0, strlen($characters) - 1)];
}
session_start();
$_SESSION['password'] = $password;
header('Location: ./password.php');
}

?>
