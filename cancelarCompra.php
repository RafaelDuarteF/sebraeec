<?php
    require_once 'conexao.php';
    session_start();
    $delCm = $mysqli->query("DELETE FROM compra WHERE codCompra = '" . $_POST['inCo'] . "'") or die ($mysqli->error);
    header("location:minhasCompras.php");
?>