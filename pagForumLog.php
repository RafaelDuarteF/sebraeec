<?php
	date_default_timezone_set('America/Sao_Paulo');
	session_start();
	if(isset($_SESSION['nomeAssoc']) && $_SESSION['nomeAssoc'] != ""){
		require_once("com.incLogAssoc.php"); 
	}
	else{
		require_once("com.incLog.php"); 
	}
	include('header.incLog.php');
?>
<div id="menuMascote">
	<div id="fecharMasc"><img id="imgFechar" src="img/fechar.png"></div>
	<img src="img/balao1.png" class="balao">
	<img src="img/mascote.png?<?php echo time(); ?>" id="acessImg">
</div>
<div id="wrapperForum">
	<h1 id="forumTitle">Fórum do clube</h1>
	<p id="postPar">Faça a sua <a href="pagPostagem.php">postagem</a> sobre o nosso clube!</p>
	<div id="postagem">
		<?php include('verificarPostagem.php'); ?>
	</div>
</div>
<?php

	include('footer.inc.php');
?>