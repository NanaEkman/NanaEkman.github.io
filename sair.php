<?php
session_start();
unset($_SESSION['usuario']);
unset($_SESSION['usuarioID']);
header("location: index.php");
?>