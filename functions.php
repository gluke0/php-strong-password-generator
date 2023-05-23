<?php

if (isset($_GET['length']) && $_GET['length'] > 0) {
 $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+{}[]:";?/';
 $password = '';

if (isset($_GET['repeat']) && $_GET['repeat'] == 'on') {
    $password = norepeatPassword($characters, $_GET['length']);
} else {
    $password = generatePassword($characters, $_GET['length']);
}
    session_start();
    $_SESSION['password'] = $password;
    header('Location: ./password.php');
}

// mia originale modificata
function generatePassword($characters, $length) {
  $strongpassword = '';
  $alphaLength = strlen($characters) - 1;
  for ($i = 0; $i < $length; $i++) {
    $number = rand(0, $alphaLength);
    $strongpassword .= $characters[$number];
  }
  return $strongpassword;
}

function norepeatPassword($characters, $length) {
    $strongpassword = '';
    $norepeat = array_unique(str_split($characters));
    shuffle($norepeat);
    $strongpassword = implode('', array_slice($norepeat, 0, $length));
    return $strongpassword;
}

?>
