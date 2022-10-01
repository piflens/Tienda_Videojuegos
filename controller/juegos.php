 <?php
    try {
        include_once '../database.php';
        $sql = "SELECT *FROM productos ";
        $query = mysqli_query($conn, $sql);
        while ($filas = mysqli_fetch_assoc($query)) {

            echo     '<div class="col-xs-12 col-lg-4">';
            echo '<div class="card mt-3 mb-3 ml-1 mr-1" style="width: 18rem ">';
            echo   '<img class="card-img-top" src="../images/juegos/' . $filas['img'] . '" alt="juegos ps4" />';
            echo       '<div class="card-body">';
            echo '<h5 class="card-title">' . $filas['nom_prod'] . '</h5>';
            echo '<p class="card-text">' . $filas['desc_prod'] . '</p>';
            echo '</div>';
            echo '<div class="card-footer bg-transparent ">';
            echo '<i class="fa fas-solid fa-dollar-sign"></i>' . $filas['pre_prod'] . '</div>';
            echo '</div>';
            echo '</div>';
        }
    } catch (Exception $e) {

        die("Error" . $e->GetMessage());
    } finally {

        $conn = null;
    }
