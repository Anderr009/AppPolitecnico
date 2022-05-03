<?php
    session_start();
    $nivel = $_SESSION['nivel'];
    echo $nivel;
    switch ($nivel) {
        case 1:
            header("location:../../administrativo/Dashboard/dashboard.php");
            break;
        case 2:
            header("location:../../administrativo/Dashboard/dashboard.php");
            break;
        case 3:
            header("location:../../administrativo/Dashboard/dashboard.php");
            break;

        case 4:
            header("location:../index.php");
            break;
        default:
            break;
    }
?>