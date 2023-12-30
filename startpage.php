<?php


    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION["ID_USER"])) {
        header("Location: ./index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon." type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500;800&display=swap" rel="stylesheet">
    <title>Parabéns, você se logou</title>
</head>
,<style>
    * {
        background-color: rgb(43, 43, 43);
    }

    h1 {
        color: rgb(173, 173, 173);
        font-family: "Poppins", sans-serif;
        text-align: center;
        justify-content: center;
    }

    .centro {
        text-align: center;
    }
    
    .centro img {
        display: inline-block;
    }

</style>

<body>
    <h1>Parabéns, você se logou! Quer um abraço?!</h1>
    <div class="centro">
        <img src="https://i.pinimg.com/564x/3c/17/79/3c1779dc03395876ebe5ce7a635e06ed.jpg" alt="Gatinho te abraçando.">

    </div>
</body>

</html>