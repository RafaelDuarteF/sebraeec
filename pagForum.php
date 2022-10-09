<?php
	date_default_timezone_set('America/Sao_Paulo');
	include('com.inc.php');
	?>
<div id="menuMascote">
	<div id="fecharMasc"><img id="imgFechar" src="img/fechar.png"></div>
	<img src="img/balao1.png" class="balao">
	<img src="img/mascote.png?<?php echo time(); ?>" id="acessImg">
</div>

<?php
	include('header.inc.php');
?>

<h1 id="forumTitle">Fórum do clube</h1>
<p id="postPar">Faça a sua <a href="pagPostagem.php">postagem</a> sobre o nosso clube!</p>
<div id="wrapperForum">
	<div id="postagem">
		<?php include('verificarPostagem.php'); ?>
	</div>
</div>
<?php

	include('footer.inc.php');
	
?>