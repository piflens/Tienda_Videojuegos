<nav class="navbar navbar-expand-lg  navbar-dark bg-dark ">
    <div class="container-fluid ">
        <a class="navbar-brand ml-5" href="/Tienda_Videojuegos/index.php">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav mx-auto ">
                <li class="nav-item">
                    <a class="nav-link" href="/Tienda_Videojuegos/views/viewJuegos.php">Juegos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Tienda_Videojuegos/views/viewAccesorios.php">Accesorios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Tienda_Videojuegos/views/viewCart.php">Carrito de Compras</a>
                </li>
            </ul>
            <ul class="navbar-nav mr-5">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mi cuenta
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/Tienda_Videojuegos/controller/controlAcceso.php">Mis datos</a>
                        <a class="dropdown-item" href="/Tienda_Videojuegos/controller/logout.php">Cerrar sesión</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>