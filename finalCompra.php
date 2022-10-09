<?php
    session_start();
    if(isset($_SESSION['nomeAssoc']) && $_SESSION['nomeAssoc'] != ""){
        require_once("com.incLogAssoc.php"); 
    }
    else{
        require_once("com.incLog.php"); 
    }
    
    require_once 'header.incLog.php';
?>
<p class="titleProdComp">Produto adquirido com sucesso! Acompanhe-o em <a href="minhasCompras.php" id="redMinhasComp">Minhas Compras</a>!</p>
<?php
    require_once 'footer.inc.php';
?>