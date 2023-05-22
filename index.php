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
            <label class="text-uppercase text-white"> choose the length of your password: </label>
            <input type="text" name="length" class="form-control w-50 my-4" placeholder="password length">
            <input type="submit" value="generate" class="btn btn-primary border border-white text-uppercase">
            <input type="reset" value="reset" class="btn btn-primary border border-white text-uppercase">
        </form>
        <div class="mt-3 text-white">

        <?php
          
          if (isset($_GET['length'])){
            $length = $_GET['length'];
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+{}[]:";?/';
            $password = '';

            for ($i = 0; $i < $length; $i++){
              $password .= $characters[mt_rand(0, strlen($characters) - 1)];
            }

            echo "<p> <span> PASSWORD </span> <strong> $password </strong> </p> </span>";
          }

        ?>

        </div>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>    
</body>
</html>
