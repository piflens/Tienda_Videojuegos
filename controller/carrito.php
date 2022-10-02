<?php
error_reporting(0);
$id = $_GET['id_prod'];
if (empty($id)) {
    echo ' <div class="row justify-content-center"><div class="alert alert-dark col-md-4" align="center">Debes agregar un  producto al carro: <a href="../views/viewJuegos.php" class="alert-link">Agregar</div></div>';
} else {
    $id = $_GET['id_prod'];
    $cantidad = 1;
    try {
        $sql = "SELECT * FROM productos where id_prod='" . $id . "'";
        $query = mysqli_query($conn, $sql);


        while ($filas = mysqli_fetch_assoc($query)) {
            echo  '<tr>';
            echo '<td nowrap> <img width="64" height="64" class=" "src="../images/juegos/' . $filas['img'] . '' . '" alt="juegos ps4" /> </td>';
            echo '<td class="align-middle" nowrap>' . $filas['nom_prod'] . '</td>';
            echo '<td class="align-middle" nowrap>'  . $filas['categ_prod'] . '</td>';
            echo '<td class="align-middle" nowrap>'  . $cantidad . '</td>';
            echo '<td class="align-middle" nowrap>'  . $filas['pre_prod'] . '</td>';
            echo '<td class="align-middle" nowrap>  <a  class= "btn btn-outline-dark btn-sm " href="../controller/comprar.php?id_prod=' . $filas['id_prod'] . '" role="button" >Comprar <i class="fas fa-shopping-bag"></i></a>' . ' ' . '<a class= "btn btn-outline-dark btn-sm" href="../controller/cancelar.php?id_prod=' . $filas['id_prod'] . '" role="button"><i class="fas fa-window-close"></i></a></td>';
            echo '</tr>';
        }
    } catch (Exception $e) {

        die("Error" . $e->GetMessage());
    } finally {

        $conn = null;
    }
}
