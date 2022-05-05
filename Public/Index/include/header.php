<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATS</title>
    <!-- <link rel="stylesheet" href="../../../CSS/navstyles.css"> -->
    <link rel="icon" href="../../../imagenes/ATSlogo3.png">
    <!-- <link rel="stylesheet" href="../../../CSS/bootstrap/css/bootstrap.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <!-- <link href="assets/fontawesome/css/all.css" rel="stylesheet">  -->
        <link href="../../../CSS/template/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
            <!-- Navbar Brand-->
            <img width="30" src="../../../imagenes/ATSlogo3.png" class="m-2 rounded-3"/>
            <a class="navbar-brand ps-1" href="index.php"><strong>Admin</strong>Capital</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
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
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="Libros/administrador/">Settings</a></li>
                        <li><a class="dropdown-item" href="Libros/administrador/">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="Libros/administrador/">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Usuario</div>
                            <a class="nav-link" href="Libros/template/productos.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Cerrar sesion
                            </a>
                            <div class="sb-sidenav-menu-heading">Opciones</div>
                            <a class="nav-link" href="Libros/template/productos.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book "></i></div>
                                Gestionar empleados
                            </a>
                            <a class="nav-link" href="Libros/template/productos.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book "></i></div>
                                Inventario
                            </a>
                            <a class="nav-link" href="Libros/template/productos.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book "></i></div>
                                Publicaciones
                            </a>
                            <a class="nav-link" href="Libros/template/productos.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Gestionar encuentas
                            </a>
                            <div class="sb-sidenav-menu-heading">Otros</div>
                            <a class="nav-link" href="">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Administrar
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Biblioteca Pomary
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <?php //include("Libros/template/dashboard.php") ?>
                </main>
                <br>
                <br>
                <footer class="py-4 bg-light mt-auto">
                    
                </footer>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../../../js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        