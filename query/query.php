<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
<i class="bi bi-person-circle"></i>
<i class="fa-duotone fa-circle-user"></i>
<style>
    body {
        text-align: center;
        background: transparent;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-family: 'Montserrat', sans-serif;
        font-size: 80px;
    }
</style>

<?php

$usser = $_GET['usser'];
$password = $_GET['clave'];

if ($usser>0){
    echo ("Welcome " .$usser. " to our website!!!");
    ?>
    <img src="../img/R.png" alt="" srcset="">
    <?php
    echo 'En estos momentos nuestro sitio Web se encuentra en mantenimiento...........!';
    echo ("Gracias x tu comprension!!! Saludos (Y)");
}else{
    echo '
            <script>
                alert("Usuario invalido, por favor llene  los campos asignados Xd");
                window.location="../index.html";
            </script>
        ';
}

?>
</body>
</html>