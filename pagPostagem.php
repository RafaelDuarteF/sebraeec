<?php
	session_start();
	if($_SESSION['logAssoc'] == true && isset($_SESSION['logAssoc'])){
		include('conexao.php');
		include('com.incLogAssoc.php');
		include('header.incLog.php');
	}
	else if($_SESSION['log'] == true){
		?><script>alert('Você precisa ser um associado do clube!'); location.assign('pagForumLog.php');</script><?php
	}
	else{
		?><script>alert('Você precisa ser um associado do clube!'); location.assign('pagForum.php');</script><?php
	}
?>
<div id="menuMascote">
	<div id="fecharMasc"><img id="imgFechar" src="img/fechar.png"></div>
	<img src="img/balao1.png" class="balao">
	<img src="img/mascote.png?<?php echo time(); ?>" id="acessImg">
</div>
	<br>
	<h2 id="titlePost">Envie a sua postagem!</h2>
	<div id="envPost">
		<div id="menuPost">
			<p class="parMenuPost">Enviada por: <b><?php echo $_SESSION['nomeAssoc']; ?></b> </p>
			<form id="formPost" method="POST" action="envPostagem.php">
				<label for="post">Faça a sua postagem:</label><br>
				<textarea maxlength="700" type="text" name="post" id="post" placeholder="Max: 700 caracteres" class="textPost"></textarea>
			</form>
			<button id="submitPost">Enviar</button>
		</div>
	</div>

<?php
	include('footer.inc.php');
	$_SESSION['envPostagem'] = false;
?>