<?php session_start();
error_reporting(18);
error_reporting(20);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="../../CSS/styles.css">

    <title>Document</title>
</head>
<body>

    <?php 
     if($_SESSION['iniciado'] == true){ 
        include("../../includes/headerR.php");
    }else{
        include("../../includes/header-NR.php");

    }
        ?>

        <div class="publicar">
            <a href="../cliente/publicar.php"><button>Publicar</button></a>
        </div>

    <div class="contenido">
    <?php


    include("../../includes/Contenido.php");

    
    ?>
    <!-- LINEA 2 -->
    
    <!-- LINEA 3 -->

    </div>
    
</body>
</html>