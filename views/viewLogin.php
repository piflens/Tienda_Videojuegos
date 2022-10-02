<!doctype html>
<html lang="en">

<head>
    <title>Inicio Sesión Cliente</title>
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
        <div class="container mb-5 mt-5">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card border-dark rounded-0">
                        <div class="card-header rounded-0 text-white bg-dark ">
                            <h3 class="text-center">Acceso Cliente</h3>
                        </div>
                        <div class="card-body text-center">
                            <form method="post" action="../controller/login.php">
                                <div class="form-group content-center">
                                    <label for="emailuser">Correo electrónico</label>
                                    <input type="email" required="" class="form-control" id="emailuser" name="emailuser" placeholder="Ingresa tu correo">
                                </div>
                                <div class="form-group">
                                    <label for="passuser">Contraseña</label>
                                    <input type="password" required="" class="form-control" id="passuser" name="passuser" placeholder="Ingresa Tu contraseña">
                                </div>
                                <button type="submit" class="btn btn-dark">ingresar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-2">
                <div class="alert alert-dark col-md-4" align="center">
                    <p>Usuario: patriciocastillo@examenweb.com Clave: 123</p>
                    <p>Usuario: felipesalinas@examenweb.com Clave:123</p>
                </div>
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