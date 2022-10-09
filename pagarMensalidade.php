<?php
include 'conexao.php';
session_start();
$m = 0;
$mensalidadeAntiga = false;
if($_SESSION['PagUltMen'] == true){
    while($m < $e){
    	$m++;	
    	if($_SESSION['cpfAssoc'] == $cpfAssocMen[$m] && $mensalidadeAntiga == false && $situacao[$m] != 'pago'){
    		$novaSituacao = "UPDATE mensalidade SET situacao = 'pago' WHERE num_mensalidade = '".$numMen[$m]."'";
    		$conSituacao = $mysqli->query($novaSituacao) or die ($mysqli->error);
    		$mensalidadeAntiga = true;
    		echo "Mensalidade de número: ". $numMen[$m]. " referente ao vencimento de: ". $dataMen[$m]." paga com sucesso!";
    		$_SESSION['PagUltMen'] = false;
    	}
    }
}
else{
    header("location:pagAssociado.php");
}

?>