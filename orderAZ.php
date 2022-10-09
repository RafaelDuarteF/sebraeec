<?php
    session_start();
    $_SESSION['order'] = "A-Z";
    header('location:pagProdutos.php');
?>