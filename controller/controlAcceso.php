<?php
include_once '../database.php';
session_start();
//valida si ya esta iniciado por lo que puede acceder directamente a los otros datos
if ($_SESSION['usuario'] == true) {
    header('location: ../views/viewAccount.php');
} else {
    if ($_SESSION['usuario'] == false) {
        header('location: ../views/viewLogin.php');
    }
}
