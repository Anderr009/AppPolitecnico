<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATS</title>
    <!-- <link rel="stylesheet" href="../../../CSS/navstyles.css"> -->
    <link rel="icon" href="../../../imagenes/ATSlogo3.png">
    <link rel="stylesheet" href="../../../CSS/bootstrap/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="assets/fontawesome/css/all.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
        <!-- Navbar Brand-->
        <img width="30" src="./assets/img/logo.jpeg" class="m-2 rounded-3" />
        <a class="navbar-brand ps-1" href="index.php"><strong>Pomaray</strong>Library</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- <ul class="nav navbar-nav">
       <li class="nav-item">
           <a class="nav-link" href="administrador/"> Biblioteca</a>
        </li>
       <li class="nav-item">
           <a class="nav-link" href="index.php">Inicio</a>
        </li>
       <li class="nav-item">
           <a class="nav-link" href="productos.php">Libros</a>
        </li>
       <li class="nav-item">
           <a class="nav-link" href="nosotros.php">Nosotros</a>
        </li>
       <li class="nav-item">
           <a class="nav-link" href="administrador/index.php">Login</a>
        </li>
</ul> -->
        <!-- Navbar-->
        <ul class="navbar-nav d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="Libros/administrador/">Settings</a></li>
                    <li><a class="dropdown-item" href="Libros/administrador/">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="Libros/administrador/">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <main>
        <h1 class="visually-hidden">Sidebars examples</h1>

        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" /></svg>
                <span class="fs-4">Sidebar</span>
            </a>
            <hr>
            <ul class="nav nav-pills d-flex flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#home" /></svg>
                        Home
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white pb-4">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#speedometer2" /></svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white pb-4">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#table" /></svg>
                        Orders
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white pb-4">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#grid" /></svg>
                        Products
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white pb-4">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#people-circle" /></svg>
                        Customers
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                    id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>mdo</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="assets/js/datatables-simple-demo.js"></script>