<?php

require_once __DIR__ . '/functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> 

    <link rel="stylesheet" href="./style.css">

    <title>PHP Password Generator</title>
</head>
<body class="vh-100 bg-primary d-flex justify-content-center">

    <div class="container mt-5">
        <h1 class="text-white text-uppercase text-center mb-4"> generate your <span class="fs-6"> (hopefully) </span> secure password </h1>
        <form action="index.php" method="GET">
            <label class="text-uppercase text-white"> choose the length of your password:<span class="min">(min. 3)</span> </label>
            <input type="text" name="length" class="form-control w-50 my-4" placeholder="password length">
            <div class="my-4">
                <input type="checkbox" name="repeat" id="repeat"> <label class="text-uppercase text-white ms-1 me-3" for="repeat">unique characters</label>
                <input type="checkbox" name="letters" id="letters"> <label class="text-uppercase text-white ms-1 me-3" for="letters">Letters</label>
                <input type="checkbox" name="numbers" id="numbers"> <label class="text-uppercase text-white ms-1 me-3" for="numbers">Numbers</label>
                <input type="checkbox" name="symbols" id="symbols"> <label class="text-uppercase text-white ms-1 me-3" for="symbols">Symbols</label>
            </div>
            <input type="submit" value="generate" class="btn btn-primary border border-white text-uppercase">
            <input type="reset" value="reset" class="btn btn-primary border border-white text-uppercase">
        </form>
        <div class="mt-3 text-white">
        </div>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>    
</body>
</html>
