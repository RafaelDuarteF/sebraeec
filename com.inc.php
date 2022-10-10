<?php
error_reporting(0);
session_start();
include 'conexao.php';
$_SESSION['url'] = $_SERVER["REQUEST_URI"];

if($_COOKIE['logado'] == 1){
	header("location:logCookies.php");
}
if($_COOKIE['logadoAssoc'] == 1){
	header("location:logCookiesAssoc.php");
}
?>
<!DOCKTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GROWEB</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css?<?php echo time(); ?>">
	<script  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"  crossorigin="anonymous"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<div id="dicaEsc">DICA: Clique ESC para leitura de página</div>
<div id="menu">
	<a id="fechar-menu">X</a>
	<br><br>
	<img src="img/logo.png?<?php echo rand(0, 6);?>" id="logo-menu">
	<br><br>
	<div class="text-menu" id="redirect-pag-esportes"><div id="aberto-fechado-esportes"></div><p>Esportes</p></div>
	<div class="text-menu" id="redirect-pag-bocha">Bocha</div>
	<div class="text-menu" id="redirect-pag-malha">Malha</div>
	<div class="text-menu" id="redirect-pag-qSomos">Quem Somos?</div>
	<div class="text-menu" id="redirect-pag-sobClube">Sobre o Clube</div>
	<div class="text-menu" id="redirect-pag-produtos">Produtos</div>
	<div class="text-menu" id="redirect-pag-eventos">Eventos</div>	
	<div class="text-menu" id="redirect-pag-idVisual">Identidade Visual</div>
	<div class="text-menu" id="redirect-pag-poliPriva">Política de Privacidade</div>
	<div class="text-menu" id="redirect-pag-forum">Fórum do clube</div>
	<div id="menino">&#169 Todos os direitos reservados</div>
	<div id="divSelectAcess">
			<h3>Menu de acessibilidade da página</h3>
			<select id="selectAcess"></select></div>	
	</div>	
<div id="login" class="menu-cadastro-login">
	<a id="fechar-login" class="fechar-login-cadastro">X</a>
	<br><br>
	<div id="infoLogClie">
		<h3 id="title-login" class="title-login-cadastro">Login como cliente:</h3>
		<form method="POST" action="verificarLog.php" id="formLog">
			<label for="user-login">User:<br><input type="text" name="user-login" id="user-login" class="box-input" placeholder="Nome de usuário:"></label><br><br>
			<label for="senha">Senha:<br><input type="password" name="senha-login" id="senha-login" class="box-input" placeholder="Senha:"></label><br><br>
			<br>
			<input type="button" class="enviar" id="logar" value="Entrar">
			<br>
			<br>
		</form>
	</div>
	<div id="infoLogAssoc">
		<h3 id="title-login" class="title-login-cadastro">Login como associado:</h3>
		<form method="POST" action="verificarAssociado.php" id="formLogAssoc">
			<label for="cpfAssoc-login">CPF:<br><input type="text" oninput="mascaraCPF(this)" name="cpfAssoc-login" id="cpfAssoc-login" class="box-input" placeholder="CPF de associado:"></label><br><br>
			<label for="senhaAssoc-login">Senha:<br><input type="password" name="senhaAssoc-login" id="senhaAssoc-login" class="box-input" placeholder="Senha de associado:"></label><br><br>
			<br>
			<input type="button" class="enviar" id="logarAssoc" value="Entrar">
			<br>
			<br>
			<script>
			function mascaraCPF(i){

				var v = i.value;
				
				if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
					i.value = v.substring(0, v.length-1);
					return;
				}
				
				i.setAttribute("maxlength", "14");
				if (v.length == 3 || v.length == 7) i.value += ".";
				if (v.length == 11) i.value += "-";

				}
		</script>
		</form>
	</div>
	<br>
	<label class="lblClieOrAssoc" for="logClie">Cliente </label><input type="checkbox" name="logClie" checked id="logClieCB">
	<label for="logAssoc">Associado </label><input type="checkbox" name="logAssoc" id="logAssocCB">
	<br>
	<div class="redirectCad">Ainda não é cadastrado?</div>
	<div id="nowRedir">Cadastre-se</div>
	<p id="result-login"></p>
</div>
<body>
	<div id="wrapper">