<?php
$id = $_GET['id_prod'];
unset($id);
switch (empty($id)) {
    case 1:
        header('location:../views/viewCart.php');
        break;
}
