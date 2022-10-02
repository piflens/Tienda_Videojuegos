<?php
session_start();

?>
<!doctype html>
<html lang="en">

<head>
    <title>Mi cuenta</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel=StyleSheet href="../css/fondopagina.css" type="text/css">
</head>

<body>
    <header>
        <?php
        include '../header.php'
        ?>
    </header>
    <main>
        <div class="container bg-light mt-4 mb-4">
            <p class="h3 text-center text-white  bg-dark mt-1 mb-1 rounded-bottom">Informacion de la cuenta</p>
            <div class="row justify-content-center">
                <div class="col-md-5 ">
                    <div class="card rounded-0 border-dark my-4 ">
                        <div class="card-header text-dark">
                            <h5 class="text-center">Datos de Contacto</h5>
                        </div>
                        <?php
                        include '../controller/datosusuario.php'
                        ?>
                    </div>
                </div>
            </div>
            <div class="container mb-5 mt-5">
                <p class="h3 text-center text-white  bg-dark mt-1 mb-3 rounded">Historial de Compra</p>
                <form method="post">
                    <div class="card table-responsive ">
                        <table class="table table-striped table-hover" id="example">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Producto</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../controller/historial.php'
                                ?>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer>

    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--font awesome-->
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>