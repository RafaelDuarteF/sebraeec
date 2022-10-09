<?php
    require_once 'conexao.php';
    session_start();
    $codProdC = intval($_POST['codProd']);
    $codCompC = intval($_POST['codComp']);
    $comentC = $_POST['comentComp'];
    $quantC = intval($_POST['quantEstrelas']);
    if($_SESSION['logAssoc'] == true){
        $cpfA = $_SESSION['cpfAssoc'];
        $co = "INSERT INTO avaliacao VALUES(" .  substr(time(), -6) . ", $codProdC, $quantC, '$comentC', CURRENT_DATE, null, '$cpfA', '$codCompC')";
        $insAva = $mysqli->query($co) or die ($mysqli->error);
    }
    else if($_SESSION['log'] == true){
        $cpfA = $_SESSION['cpf'];
        $co = "INSERT INTO avaliacao VALUES(" .  substr(time(), -6) . ", $codProdC, $quantC, '$comentC', CURRENT_DATE, '$cpfA', null, '$codCompC')";
        $insAva = $mysqli->query($co) or die ($mysqli->error);
    }
    $upAva = $mysqli->query("UPDATE compra SET avaliado = 1 WHERE codCompra = '$codCompC'") or die ($mysqli->error);
    header("location:minhasCompras.php");
?>