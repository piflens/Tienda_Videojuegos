<?php
include_once "../database.php";

$sql = "SELECT *FROM users WHERE email_user='" . $_SESSION['usuario'] . "'";
$query = mysqli_query($conn, $sql);
$filas = mysqli_fetch_assoc($query);

echo '<div>';
echo '<p><b>Usuario: </b>' . $filas['nom_user'] . ' ' . $filas['ape_user'] . '</p>';
echo '<p><b>Correo: </b>' . $filas['email_user'] . '</p>';
echo '<p><b>Telefono: </b>' . $filas['tel_user'] . '</p>';
echo '<p><b>Direccion: </b>' . $filas['dom_user'] . '</p>';
echo '</div>';
