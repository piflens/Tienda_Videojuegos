<!doctype html>
<html lang="en">

<head>
    <title>Inicio Sesión Cliente</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <header>
        <?php
        include '../header.php'
        ?>
    </header>
    <main>
        <div class="container mb-5 mt-5 ">
            <div class="card text-align-center">
                <h3 class="text-align-center">Acceso Cliente</h3>
                <form method="post" action="../controller/login.php">
                    <div class="form-group ">
                        <label for="emailuser">Correo electrónico</label>
                        <input type="email" required="" class="form-control" id="emailuser" name="emailuser" placeholder="Ingresa tu correo">
                    </div>
                    <div class="form-group">
                        <label for="passuser">Contraseña</label>
                        <input type="password" required="" class="form-control" id="passuser" name="passuser" placeholder="Ingresa Tu contraseña">
                    </div>
                    <button type="submit" class="btn btn-secondary">ingresar</button>
                </form>
            </div>
        </div>
    </main>
    <footer>

    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>