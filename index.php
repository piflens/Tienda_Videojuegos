<!doctype html>
<html lang="en">

<head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel=StyleSheet href="css/header.css" type="text/css">
    <link rel=StyleSheet href="css/fondopagina.css" type="text/css">
</head>

<body>
    <header>
        <?php
        include 'header.php'
        ?>
    </header>
    <main>
        <?php
        include 'views/viewCarousel.php'
        ?>
        <?php
        include_once 'database.php';
        $sql = "SELECT *FROM productos ORDER BY id_prod  DESC LIMIT 3 ";
        $query = mysqli_query($conn, $sql);
        ?>
        <div class="container bg-light mt-4 mb-4 ">
            <p class="h3  text-center text-white  bg-dark mt-1 mb-1 rounded-bottom">Novedades</p>
            <div class="row justify-content-center">
                <div class="card-deck " style="text-align: justify;">
                    <?php while ($filas = mysqli_fetch_assoc($query)) { ?>
                        <input type="hidden" name="id" id="id_prod" value="  <?php echo $filas['id_prod'] ?>   ">
                        <div class="col-xs-12 col-lg-4">
                            <div class="card mt-3 mb-3 ml-4 mr-4" style="width: 18rem ">
                                <img class="card-img-top" src="images/juegos/<?php echo $filas['img']  ?>" alt="juegos ps4" />
                                <div class="card-body">
                                    <h5 class="card-title"> <?php echo $filas['nom_prod'] ?> </h5>
                                    <p class="card-text "><?php echo $filas['desc_prod'] ?> </p>
                                </div>
                            </div>
                        </div>
                    <?php  } ?>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="alert alert-dark col-md-4" align="center">Ir a comprar: <a href="views/viewJuegos.php" class="alert-link">Catalogo</a></div>
            </div>
        </div>

    </main>
    <footer>

    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>