<?php
    require_once 'conexao.php';
    session_start();
    if($_SESSION['envComp'] == true){
        $numeroCard = $_POST['numeroCard-cadastro'];
        $nomeComp = $_POST['nomeComp-cadastro'];
        $sobrenomeComp = $_POST['sobrenomeComp-cadastro'];
        $cepComp= $_POST['cepComp-cadastro'];
        $complementoComp = $_POST['complementoComp-cadastro'];
        $emailComp = $_POST['emailComp-cadastro'];
        $numeroComp = $_POST['numeroComp-cadastro'];
        $celularComp = $_POST['celularComp-cadastro'];
        $metodoComp = $_POST['credDeb'];
        $ruaComp = $_POST['ruaComp-cadastro'];
        $numProd = $_POST['numProd'];
        if($_SESSION['logAssoc'] == true){
            $insCompCod = "INSERT INTO compra VALUES('". substr(time(), -10)."', $codProd[$numProd], 0, CURRENT_DATE, CURRENT_DATE + 20, 1, 'Correios', 'Preparando', null, 0, '$ruaComp', '$numeroComp', '$cepComp', '$complementoComp', '$metodoComp', '$numeroCard', '$celularComp', '$emailComp', '".$_SESSION['cpfAssoc']."', '$nomeComp', '$sobrenomeComp')";
            $insComo = $mysqli->query($insCompCod) or die ($mysqli->error);
        }
        if($_SESSION['log'] == true){
            $insCompCod = "INSERT INTO compra VALUES('". substr(time(), -10)."', $codProd[$numProd], 0, CURRENT_DATE, CURRENT_DATE + 20, 1, 'Correios', 'Preparando', '".$_SESSION['cpf']."', 0, '$ruaComp', '$numeroComp', '$cepComp', '$complementoComp', '$metodoComp', '$numeroCard', '$celularComp', '$emailComp', '".$_SESSION['cpf']."', '$nomeComp', '$sobrenomeComp')";
            $insComo = $mysqli->query($insCompCod) or die ($mysqli->error);
        }
        $_SESSION['envComp'] = false;
        header("location:finalCompra.php");
    }
    else{
        header("location:index_log.php");
    }
?>