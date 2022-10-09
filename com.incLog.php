<?php
ob_start();
include("conexao.php");
error_reporting(0);
session_start();
date_default_timezone_set('America/Sao_Paulo');
if ($_SESSION['log'] == true) {	
	$_SESSION['url'] = $_SERVER["REQUEST_URI"];
}
else{
?>
<script>
	alert('Você não está logado');
	location.assign("index.php");
</script>
<?php
}
if($_SESSION['logWithCookies'] == true){
    ?>
   <div id="logWithCook">Último acesso em: <?php echo $_COOKIE['Acess']; ?></div>
 <?php
    $_SESSION['logWithCookies'] = false;
}
setcookie('Acess', date('d-m-Y h:i:s A', time()), time()+432000);
$compCod = $mysqli->query("UPDATE compra SET statusCompra = 'Preparando' WHERE cpfClie = '".$_SESSION['cpf']."' and prazo - CURRENT_DATE > 15") or die ($mysqli->error);
$compCod = $mysqli->query("UPDATE compra SET statusCompra = 'A enviar' WHERE cpfClie = '".$_SESSION['cpf']."' and prazo - CURRENT_DATE <= 15 and prazo - CURRENT_DATE > 10") or die ($mysqli->error);
$compCod = $mysqli->query("UPDATE compra SET statusCompra = 'Enviado' WHERE cpfClie = '".$_SESSION['cpf']."' and prazo - CURRENT_DATE <= 10 and prazo - CURRENT_DATE > 5") or die ($mysqli->error);
$compCod = $mysqli->query("UPDATE compra SET statusCompra = 'Em trânsito' WHERE cpfClie = '".$_SESSION['cpf']."' and prazo - CURRENT_DATE <= 5 and prazo - CURRENT_DATE > 0") or die ($mysqli->error);
$compCod = $mysqli->query("UPDATE compra SET statusCompra = 'Entregue' WHERE cpfClie = '".$_SESSION['cpf']."' and prazo - CURRENT_DATE = 0") or die ($mysqli->error);

?>
<!DOCKTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Página principal</title>
	<script src="jQuery/jquery-3.6.0.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilo.css?<?php echo time(); ?>">
	
</head>
<div id="dicaEsc">DICA: Clique ESC para leitura de página</div>
<div id="menu">
	<a id="fechar-menu">X</a>
	<br><br>
	<img src="img/logo.png?<?php echo rand(0, 6);?>" id="logo-menu">
	<br><br>
	<div class="text-menu" id="redirect-pag-esportes"><div id="aberto-fechado-esportes"></div><p>Esportes</p></div>
	<div class="text-menu" id="redirect-pag-bochaLog">Bocha</div>
	<div class="text-menu" id="redirect-pag-malhaLog">Malha</div>
	<div class="text-menu" id="redirect-pag-qSomosLog">Quem Somos?</div>
	<div class="text-menu" id="redirect-pag-sobClubeLog">Sobre o Clube</div>
	<div class="text-menu" id="redirect-pag-produtosLog">Produtos</div>
	<div class="text-menu" id="redirect-pag-eventosLog">Eventos</div>	
	<div class="text-menu" id="redirect-pag-idVisualLog">Identidade Visual</div>	
	<div class="text-menu" id="redirect-pag-poliPrivaLog">Política de Privacidade</div>
	<div class="text-menu" id="redirect-pag-forumLog">Fórum do clube</div>
	<div id="menino">&#169 Todos os direitos reservados</div>
	<div id="divSelectAcess">
		<h3>Menu de acessibilidade da página</h3>
		<select id="selectAcess"></select></div>	
	</div>	
</div>
<div id="areaUser">
	<a id="fechar-areaUser">X</a>
	<br>
	<br>
	<br>
	<h2 id="titlePerfMenuAssoc">Perfil de cliente</h2>
	<br>
	<img src="<?php echo $_SESSION['pathClie']; ?>" id="foto-menuPerfil">
	<br>
	<p id="boasVindas">Olá, <b><?php echo $_SESSION["nome"]; ?></b>!</p>
	<br>
	<br>
	<div class="text-areaUser" id="redirect-pag-perfil">Meu Perfil</div>
	<div class="text-areaUser" id="redirect-pag-compras">Minhas Compras</div>
	<div class="text-areaUser" id="sair">Sair</div>
</div>
<body>
	<div id="wrapper">