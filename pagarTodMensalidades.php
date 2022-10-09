<?php
    include 'conexao.php';
    session_start();
    $m = 0;
    if($_SESSION['PagUltMen'] == true){
        while($m < $e){
            $m++;	
            if($_SESSION['cpfAssoc'] == $cpfAssocMen[$m] && $situacao[$m] != 'pago'){
                $novaSituacao = "UPDATE mensalidade SET situacao = 'pago' WHERE num_mensalidade = '".$numMen[$m]."'";
                $conSituacao = $mysqli->query($novaSituacao) or die ($mysqli->error);
                echo "Mensalidade de número: ". $numMen[$m]. " referente ao vencimento de: ". $dataMen[$m]." paga com sucesso!";
                $_SESSION['PagUltMen'] = false;
                ?> <br><br> <?php
            }
        }
    }
    else{
        header("location:pagAssociado.php");
    }

?>