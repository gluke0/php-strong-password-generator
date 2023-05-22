<?php

if (isset($_GET['length'])){
            $length = $_GET['length'];
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+{}[]:";?/';
            $password = '';

            for ($i = 0; $i < $length; $i++){
              $password .= $characters[mt_rand(0, strlen($characters) - 1)];
            }
          }

        header ('Location: ./password.php');
        session_start();
        $_SESSION['password'] = $password;

?>