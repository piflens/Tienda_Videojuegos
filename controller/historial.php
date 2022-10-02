<?php

try {
    include_once "../database.php";
    $sql = "SELECT historial.*, users.*,productos.*  FROM historial Join users on users.rut_user = historial.rut_user join productos on historial.id_prod = productos.id_prod  where email_user= '" . $_SESSION['usuario'] . "'";
    $query = mysqli_query($conn, $sql);

    while ($filas = mysqli_fetch_assoc($query)) {
        echo '<tr>';
        echo '<td nowrap> <img width="64" height="64" class=" "src="../images/juegos/' . $filas['img'] . '' . '" alt="juegos ps4" /> </td>';
        echo '<td class="align-middle" nowrap>' . $filas['nom_prod'] . '</td>';
        echo '<td class="align-middle" nowrap>' . $filas['nom_user'] . ' ' . $filas['ape_user'] . '</td>';
        echo '<td class="align-middle" nowrap>' . $filas['cantidad'] . '</td>';
        echo '<td class="align-middle" nowrap>' . $filas['total_pre'] . '</td>';
        echo '<td class="align-middle" nowrap>' . $filas['fec_compra'] . '</td>';
    }
} catch (Exception $e) {

    die("Error" . $e->GetMessage());
} finally {

    $conn = null;
}
