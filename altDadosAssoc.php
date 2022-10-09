<?php
	include("conexao.php");
	session_start();
	error_reporting(0);
	$emailAssocAlt = $_POST['alt-e-mailAssoc'];
	$telAssocAlt = $_POST['alt-telAssoc'];
	$cadAssocAlt = false;
	$b = 0;
	while($b <= $i){
		$b++;
		if(($emailAssocAlt == $emailAssoc[$b] || $telAssocAlt == $telefoneAssoc[$b]) && ($_SESSION['emailAssoc'] != $emailAssocAlt || $_SESSION['telAssoc'] != $telAssocAlt)){
			$cadAssocAlt = true;
		}
	}
	if($cadAssocAlt != true){
		$alt = "UPDATE associado SET email= '$emailAssocAlt' where email='". $_SESSION['emailAssoc']. "'"; 
		$con = $mysqli->query($alt) or die($mysqli->error);
		$alt = "UPDATE associado SET telefone= '$telAssocAlt' where telefone='". $_SESSION['telAssoc']. "'";
		$con = $mysqli->query($alt) or die($mysqli->error);
		$_SESSION['emailAssoc'] = $emailAssocAlt;
		$_SESSION['telAssoc'] = $telAssocAlt;
	}
	else{
	?>
	<script>alert("O nome, o e-mail ou o telefone inserido já existem no sistema!"); location.assign("pagAssociado.php");</script>
	<?php
	}
?>
<!DOCKTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Página principal</title>
	<script src="jQuery/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilo.css?<?php echo time(); ?>">
</head>
<div id="menu">
	<a id="fechar-menu">X</a>
	<br><br>
	<img src="img/logo.png" id="logo-menu">
	<br><br>
	<div class="text-menu" id="redirect-pag-esportes"><div id="aberto-fechado-esportes"></div><p>Esportes</p></div>
	<div class="text-menu" id="redirect-pag-bocha">Bocha</div>
	<div class="text-menu" id="redirect-pag-malha">Malha</div>
	<div class="text-menu" id="redirect-pag-qSomos">Quem Somos?</div>
	<div class="text-menu" id="redirect-pag-sobClube">Sobre o Clube</div>
	<div class="text-menu" id="redirect-pag-produtos">Produtos</div>
	<div class="text-menu" id="redirect-pag-eventos">Eventos</div>	
	<div class="text-menu" id="redirect-pag-idVisual">Identidade Visual</div>	
</div>
<div id="areaUser">
	<a id="fechar-areaUser">X</a>
	<br>
	<br>
	<br>
	<p id="boasVindas">Olá, <?php echo $_SESSION['nomeAssoc']; ?>!</p>
	<br>
	<br>
	<div class="text-areaUser" id="redirect-pag-perfil">Meu Perfil</div>
	<div class="text-areaUser" id="sair">Sair</div>
</div>
<body>
	<div id="wrapper">
		<?php require_once("header.incLog.php"); ?>
		<div id="divTxtAltDados">
			<p id="txtAltDados">Dados alterados com sucesso!</p>
			<a id="voltarPerfil">Voltar a meu perfil</a>
		</div>
		<script>
			$("#voltarPerfil").click(function(){
				location.assign("pagAssociado.php");
			});
		</script>
	<div id="footer-one">
	</div>
	<footer>
		<div id="texts-footer">
			<div class="text-footer" id="text-footer-left"><h4>Acompanhe-nos</h4>
				<div id="redes-sociais">
					<div class="footer-elements-redes-sociais" id="element-redes-two"><img class="social-images" src="img/facebook.png"></div>
					<div class="footer-elements-redes-sociais" id="element-redes-three"><img class="social-images" src="img/instagram.png"></div>
				</div>
			</div>
			<div class="text-footer" id="text-footer-center"><h4>Contato</h4><a>sebrae.ec@gmail.com</a><br>
				<a>(11) 8221-9231</a><br>
			</div>
			<div class="text-footer" id="text-footer-right"><h4>Endereço</h4><a>CEP: 74680-210</a><br>
				<a>Estado: Goiás</a><br>
				<p>Cidade: Goiânia</a><br>
				<a>Rua das palmeiras, 1355</a>
			</div>
		</div>
		<br><br><br><br>
	</footer> <!-- Footer e seus elementos contidos. -->
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3823.282456902198!2d-49.18339678464761!3d-16.612587448036287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935eed0c9fe78fd1%3A0xea07ea56bb53a074!2sR.%20das%20Palmeiras%20-%20Res.%20Aldeia%20do%20Vale%2C%20Goi%C3%A2nia%20-%20GO%2C%2074680-210!5e0!3m2!1spt-BR!2sbr!4v1636306791673!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	<script src="jQuery/jquery-3.6.0.min.js"></script>
	<script src="js/js.js?<?php echo time(); ?>"></script>
</body>
</html>
