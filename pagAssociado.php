<?php
include("conexao.php");
error_reporting(0);
session_start();
if ($_SESSION['logAssoc'] == true) {	
}
else if($_SESSION['log'] == true){
	?>
	<script>
		alert('Você não está logado como associado!');
		location.assign("pagPerfil.php");
	</script>
	<?php
}
else{
?>
<script>
	alert('Você não está logado');
	location.assign("index.php");
</script>
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
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilo.css?<?php echo time(); ?>">
	
</head>
<div id="menu">
	<a id="fechar-menu">X</a>
	<br><br>
	<img src="img/logo.png?<?php echo rand(0, 6); ?>" id="logo-menu">
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
	<h2 id="titlePerfMenuAssoc">Perfil de associado</h2>
	<br>
	<img src="<?php echo $_SESSION['pathAssoc']; ?>" id="foto-menuPerfil">
	<br>
	<p id="boasVindas">Olá, <b><?php echo $_SESSION["nomeAssoc"]; ?></b>!</p>
	<br>
	<br>
	<div class="text-areaUser" id="redirect-pag-perfilAssoc">Meu Perfil</div>
	<div class="text-areaUser" id="redirect-pag-compras">Minhas Compras</div>
	<div class="text-areaUser" id="sair">Sair</div>
</div>
<div id="menuMascote">
		<img src="img/mascote.png?<?php echo time(); ?>" id="acessImg">
</div>
		<div id="confirmation">
			<p id="pQuest">Você deseja apagar sua conta e seus dados permanentemente?</p>
			<button class="btnConfirm" id="btnConfirmSim">Sim</button><button class="btnConfirm" id="btnConfirmNao">Não</button>
		</div>
		<script>
			click = false;
			document.querySelector('html').addEventListener('keydown', () => {
 
				var tecla = event.keyCode;
		
				if(tecla == 27) {
					if(click == false){	
						var utter = new SpeechSynthesisUtterance("<?php echo $_SESSION['nomeAssoc'];?>. Nome: <?php echo $_SESSION['nomeAssoc'];?>. RG: <?php echo substr($_SESSION['rg'], 0, 2) ?>. CPF: <?php echo substr($_SESSION['cpf'], 0, 3) ?>. E-Mail: <?php echo $_SESSION['emailAssoc'] ?>. Telefone: <?php echo $_SESSION['telAssoc'] ?>. Endereço: <?php echo $_SESSION['enderecoAssoc'] ?>. Banco: <?php echo $_SESSION['banco'] ?>. Conta: <?php echo $_SESSION['agencia'] ?> / <?php echo $_SESSION['conta'] ?>. Tipo de associado: <?php $_SESSION['tipoAssoc'] ?>."); // responsável pelo que vai falar!
		  				utter.voice = voices[selectVoices.value]; // define qual será a voz..
		 				synth.speak(utter); // reproduz o audio!
		 				click = true;
		 			}
		 			else{
		 				click = false;
		 			synth.cancel();
		 			}
				}
			});
		</script>
<div class="altDadoAssoc">
	<a id="fechar-menuAltDados">X</a>
	<br><br>
	<h3 id="title-altDados">Alterar Contato</h3>
	<form method="POST" action="altDadosAssoc.php" id="altDadosFormAssoc">
		<a class="alert-mandatory">* </a><label for="alt-e-mailAssoc">Alterar E-mail:<br><input class="input-alt" type="email" id="alt-e-mailAssoc" name="alt-e-mailAssoc" value="<?php echo $_SESSION['emailAssoc'];?>"> </label>
		<br><br>
		<a class="alert-mandatory">* </a><label for="alt-telAssoc">Alterar Telefone:<br><input oninput="mascaraTEL(this)" class="input-alt" type="text" id="alt-telAssoc" name="alt-telAssoc" value="<?php echo $_SESSION['telAssoc'];?>"> </label>
		<br>
		<br>
		<input type="button" id="enviar-altDados" value="Alterar informações">

		<script>
			function mascaraTEL(i){
   
				var v = i.value;
				
				if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
					i.value = v.substring(0, v.length-1);
					return;
				}
				
				i.setAttribute("maxlength", "12");
				if (v.length == 2) i.value += "-";

			}
			$("#enviar-altDados").click(function(){
				let emailAssocAlt = document.getElementById("alt-e-mailAssoc").value;
				let telAssocAlt = document.getElementById("alt-telAssoc").value;
			    
			    if (emailAssocAlt == 0 || telAssocAlt == 0) {
					swal("Preencha os campos.", "Ainda há campos não preenchidos!", "error");
			    }
			    else{
			    	if(telAssocAlt.length < 11 || telAssocAlt.length > 12){
			    		swal("Telefone Inválido.", "Digite um telefone válido!", "error");
			    	}
			    	else{	
			    		document.getElementById("altDadosFormAssoc").submit();
			    	}
			    }
			});
		</script>
	</form>
</div>
<div id="passConfirmation">
	<h3 id="titlePassConfirmation">Confirme seus dados</h3>
	<p class="parPassConfirmation">Para apagar sua conta, confirme seus dados</p>
	<form id="deleteAll" method="POST" action="deleteAccount.php">
		<label class="lblConfirm" for="userConfirm">Usuário: </label><br><input type="text" name="userConfirm" id="userConfirm"> <br><br>
		<label class="lblConfirm" for="passConfirm">Senha: </label><br><input type="password" name="passConfirm" id="passConfirm">
		<br><br>
		<button class="btnPassConfirm" id="btnDeleteAll" type="button">Deletar</button>
		<button class="btnPassConfirm" id="btnCancelDelete" type="button">Cancelar</button>
	</form>
</div>
<body>
	<div id="wrapper">
		<?php require_once("header.incLog.php"); ?>
		<br>
		<div id="pagTotAssoc">
			<h1 id="titlePerfAssoc">Perfil de Associado</h1>
			<div id="divImgPerfil">
				<img id="user_imgAssociado" src="<?php echo $_SESSION['pathAssoc']; ?>">
				<p id="userNomePerfil"><b><?php echo $_SESSION["nomeAssoc"]; ?></b></p>
			</div>
			<br>
			<div  class="dados"><b>Nome: </b><?php echo $_SESSION["nomeAssoc"]; ?></div>
			<br>
			<div class="dados"><b>RG: </b><?php echo substr($_SESSION["rgAssoc"], 0, 2); ?>****</div>
			<br>
			<div class="dados"><b>CPF: </b><?php echo substr($_SESSION["cpfAssoc"], 0, 3); ?>****</div>
			<br>
			<div class="dados"><b>E-Mail: </b><?php echo $_SESSION["emailAssoc"]; ?></div>
			<br>
			<div class="dados"><b>Telefone: </b><?php echo $_SESSION['telAssoc'];?></div>
			<br>
			<div class="dados"><b>Endereço: </b><?php echo $_SESSION['enderecoAssoc']?></div>
			<br>
			<div class="dados"><b>Banco: </b><?php echo $_SESSION['banco']; ?></div>
			<br>
			<div class="dados"><b>Conta: </b><?php echo $_SESSION['agencia']; ?> / <?php echo $_SESSION['conta']; ?></div>
			<br>
			<div class="dados"><b>Tipo de associado: </b><?php echo $_SESSION['tipoAssoc']; ?></div>
			<br>
			<br>
			<div id="divAltDados"><button id="altDados">Alterar Contato</button></div>
			<br><br>
			<div id="titleMenPen">Mensalidades pendentes</div>
			<br>
			<br>
			<br>
			<div id="mensalidadesAssoc">
				<?php 
					include 'verificarMensalidades.php';
				?>
			</div>
			<br>
			<div id="titleMen">Mensalidades pagas</div>
			<br>
			<br>
			<br>
			<div id="mensalidadesPagAssoc">
				<?php
					$h = $e + 1;
					$mensPagPri = true;
					$quantMenPag = 0;
					?>
					<div id="priMensPag">
					<?php
					while($h > 1 && $mensPagPri == true){
						$h--;
						if($_SESSION['cpfAssoc'] == $cpfAssocMen[$h] && $situacao[$h] == 'pago'){
							?> <b> <?php echo "Mensalidade Nº ".$numMen[$h] ?></b> <br><br> <?php
							echo "CPF: ".$cpfAssocMen[$h]; ?> <br> <?php
							echo "Número de mensalidade: ".$numMen[$h]; ?> <br> <?php
							echo "Valor: ".$valor[$h]; ?> <br> <?php
							echo "Data de vencimento: ". str_replace('-', '/', date('d-m-Y', strtotime($dataMen[$h]))); ?> <br> <?php
							echo "Situação: ".ucfirst($situacao[$h])?> <br><br><br><?php
							$quantMenPag++;
							$mensPagPri = false;
						}
					}
					?>
					</div>
					<p id="viewMorePag">Mostrar mais</p>
					<script>mostrarMaisPag = $("#viewMorePag"); </script>
					<div id="restMensPag">
					<?php
						while($h > 1){
							$h--;
							if($_SESSION['cpfAssoc'] == $cpfAssocMen[$h] && $situacao[$h] == 'pago'){
								?> <b> <?php echo "Mensalidade Nº ".$numMen[$h] ?></b> <br><br> <?php
								echo "CPF: ".$cpfAssocMen[$h]; ?> <br> <?php
								echo "Número de mensalidade: ".$numMen[$h]; ?> <br> <?php
								echo "Valor: ".$valor[$h]; ?> <br> <?php
								echo "Data de vencimento: ". str_replace('-', '/', date('d-m-Y', strtotime($dataMen[$h]))); ?> <br> <?php
								echo "Situação: ".ucfirst($situacao[$h])?> <br><br><br><?php
								$quantMenPag++;
							}
						}
					?>
					<p id="showLessPag">Mostrar menos</p>
					</div>
					<?php
					if($quantMenPag <= 1){
						?>
							<script>
								mostrarMaisPag.hide();
							</script>
						<?php
					}
					if($quantMenPag == 0){
						echo "Não há mensalidades pagas em seu nome.";
						?> <br><br><br> <?php
					}
				?>
			</div>
			<?php 
				if(($quantMenPag + $quantMen) == 0){
					if(intval(date('m')) < 12){ 
						$mesNew = intval(date('m')) + 1;
						$anoNew = date('Y');
					}
					else{
						$mesNew = '01';
						$anoNew = "20".intval(date('Y') + 1);
					}
					if($_SESSION['tipoAssoc'] == 'Dependente'){
						$valMen = 59.99;
					}
					else if($_SESSION['tipoAssoc'] == 'Responsável'){
						$valMen = 89.99;
					}
					else if($_SESSION['tipoAssoc'] == 'Patrocinador'){
						$valMen = 109.99;
					}
					$numberRandom = substr(time(), -6);
					$newMens =  $anoNew . "-"."0". $mesNew . "-" . date('d');
					$codInsertMen = "INSERT INTO mensalidade VALUES('".$numberRandom."', $valMen, '".$newMens."', '".$_SESSION['cpfAssoc']."', 'pendente')";
					$conMen = $mysqli->query($codInsertMen) or die ($mysqli->error);
					$_SESSION['mensalidade-vigente'] = $newMens;
					$mensalidadeVigente = true;
				}
			?>
		</div>
		<?php require_once("footer.inc.php"); ?>
		<script>
			synth.cancel();
			click = false;
			$("#acessImg").hide();
		</script>
	</div>
</body>
</html>
