<?php
//cierre de sesion del usuario 
@session_start();
session_destroy();
header('Location:../index.php');
