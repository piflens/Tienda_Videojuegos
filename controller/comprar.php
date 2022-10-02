<?php
include_once '../database.php';
session_start();
if ($_SESSION['usuario'] == true) {
    header('location: ../views/viewAccount.php');
} else {
    if ($_SESSION['usuario'] == false) {
        header('location: ../views/viewLogin.php');
    }
}
