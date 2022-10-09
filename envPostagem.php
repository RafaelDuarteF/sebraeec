<?php
	session_start();
	include('conexao.php');
	include('com.incLogAssoc.php');
	include('header.incLog.php');
	if($_SESSION['envPostagem'] == true){
	}
	else if($_SESSION['logAssoc'] == true){
		$postagem = $_POST['post'];
		$envPostagem = "INSERT INTO postagem VALUES(". substr(time(), -6).", '". $postagem. "', '". $_SESSION['nomeAssoc']."', '". $_SESSION['cpfAssoc']."', '". date('Y/m/d') . "')";
		$conPost = $mysqli->query($envPostagem) or die ($mysqli->error);
		$_SESSION['envPostagem'] = true;
	}
?>
	<br><br><br>
	<p class="parPostSub">Postagem enviada com sucesso!</p>
	<p class="parPostSub"><a href="pagForumLog.php">Voltar ao fórum</a></p>
	<br><br><br>
<?php
	include('footer.inc.php');
	
?>