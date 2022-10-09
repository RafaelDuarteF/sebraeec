<?php 
	include("conexao.php");
	error_reporting(0);
	date_default_timezone_set('America/Sao_Paulo');
	session_start();
        $cpfAssocLog = $_POST['cpfAssoc-login'];
		$senhaAssocLog = $_POST["senhaAssoc-login"];
        $p = 0;
		while($p < $f){
			$p++;
			if($cpfAssocLog == $cpfAssoc[$p] && $senhaAssocLog == $senhaAssoc[$p]){
				$_SESSION['logAssoc'] = true;
				$nomeA = $nomeAssoc;
				$_SESSION['nomeAssoc'] = $nomeAssoc[$p];
				$_SESSION['senhaAssoc'] = $senhaAssocLog;
				$_SESSION['enderecoAssoc'] = $enderecoAssoc[$p];
				$_SESSION['telAssoc'] = $telefoneAssoc[$p];
				$_SESSION['cpfAssoc'] = $cpfAssoc[$p];
				$_SESSION['rgAssoc'] = $rgAssoc[$p];
                $_SESSION['tipoAssoc'] = $tipoAssoc[$p];
                $_SESSION['banco'] = $banco[$p];
                $_SESSION['agencia'] = $agencia[$p];
                $_SESSION['conta'] = $conta[$p];
				$_SESSION['pathAssoc'] = $pathAssoc[$p];
				$_SESSION['emailAssoc'] = $emailAssoc[$p];
				setcookie("logadoAssoc", 1, time()+432000);
				setcookie("cpfAssoc", $_SESSION['cpfAssoc'], time()+432000);
				$validacao = true;
			}
		}
		if($validacao != true){
			setcookie("logadoAssoc", 0);

	?>
	<script>
		alert("Usuário ou senha incorretas!");
		window.location.replace("index.php")
	</script>
	<?php
		}	
        ?>
<script>location.assign("pagAssociado.php");</script>