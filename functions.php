<?php

if (isset($_GET['length']) && $_GET['length'] >= 3){
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+{}[]:";?/';

    // checkbox password options
    if (isset($_GET['letters']) || isset($_GET['numbers']) || isset($_GET['symbols'])) {
        $optionsChar = '';

    // letters
    if (isset($_GET['letters']) && $_GET['letters'] == 'on'){
        $optionsChar .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }

    // numbers
    if (isset($_GET['numbers']) && $_GET['numbers'] == 'on'){
        $optionsChar .= '0123456789';
    }

    // symbols
    if (isset($_GET['symbols']) && $_GET['symbols'] == 'on'){
        $optionsChar .= '!@#$%^&*()-_=+{}[]:";?/';
    }

    $characters = $optionsChar;
    }

    $password = '';

if (isset($_GET['repeat']) && $_GET['repeat'] == 'on'){
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
  $maxLength = strlen($characters) - 1;
  for ($i = 0; $i < $length; $i++) {
    $number = rand(0, $maxLength);
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
