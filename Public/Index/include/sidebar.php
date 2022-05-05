<?php include("header.php");?>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
<script src="../../../js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>