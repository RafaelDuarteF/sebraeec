<?php
    session_start();
    include 'conexao.php';
    $mysqli->query("UPDATE cliente SET PATH = 'img/acesso-icon.png' WHERE user = '" . $_SESSION['nome'] . "'");
    unlink($_SESSION['pathClie']);
    $_SESSION['pathClie'] = "img/acesso-icon.png";
    header('location:pagPerfil.php');
?>