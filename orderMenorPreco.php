<?php
    session_start();
    $_SESSION['order'] = "Menor Preço";
    header('location:pagProdutos.php');
?>