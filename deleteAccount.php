<?php
	session_start();
	include('conexao.php');
	$nomeInsert = $_POST['userConfirm'];
	$senhaInsert = $_POST['passConfirm'];
	if($nomeInsert != $_SESSION['nome'] || $senhaInsert != $_SESSION['senha']){
?>
		<script>
			alert("Os dados não condizem no sistema! Operação de deletar conta sem sucesso.");
			location.assign("pagPerfil.php");
		</script>
<?php
	}
	else{
		$del = "DELETE FROM cliente WHERE user='". $_SESSION['nome']. "'";
		$conDel = $mysqli->query($del) or die($mysqli->error);
		$del = "DELETE FROM cliente WHERE senha='". $_SESSION['senha']. "'";
		$conDel = $mysqli->query($del) or die($mysqli->error);
		$del = "DELETE FROM cliente WHERE email='". $_SESSION['email']. "'";
		$conDel = $mysqli->query($del) or die($mysqli->error);
		$del = "DELETE FROM cliente WHERE telefone='". $_SESSION['tel']. "'";
		$conDel = $mysqli->query($del) or die($mysqli->error);
		$_SESSION['nome'] = "";
		$_SESSION['senha'] = "";
		$_SESSION['email'] = "";
		$_SESSION['tel'] = "";
		$_SESSION['log'] = false;
		setcookie('logado', 0);
		setcookie('nome', 0);
		header("location:index.php");
	}	
?>