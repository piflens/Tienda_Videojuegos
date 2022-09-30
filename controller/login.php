<?php
include_once "../database.php";
//verificamos que no sea null ni este vacia
$emailuser = $_POST['emailuser'];
$password = $_POST['passuser'];
//consulta sql que realiza un update de los datos de los clientes
$sql = "SELECT *FROM users WHERE email_user='" . $emailuser . "'";
$query = mysqli_query($conn, $sql);
//se le pasa a la varianle row la query oara que consulte y validar el dato
if ($row = mysqli_fetch_array($query)) {
    if ($row['pass_user'] == $password) {
        session_start();
        $_SESSION['usuario'] = $emailuser;
        header('location:../views/ViewAccount.php');
    } else {
        //si es correcto pero esta equivocado mandara en este mensaje
        echo "<script type=\"text/javascript\">alert('usario o contraseña incorrecto');window.location='../views/ViewLogin.php'; </script>";
        exit();
    }
} else {
    //si no existe mandara este mensaje
    echo "<script type=\"text/javascript\">alert('usuario o contraseña incorrecto2');window.location='../views/ViewLogin.php'; </script>";
    exit();
}
