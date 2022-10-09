<?php
    session_start();
    $_SESSION['order'] = "Maior Preço";
    header('location:pagProdutos.php');
?>