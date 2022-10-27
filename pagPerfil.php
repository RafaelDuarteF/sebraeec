<?php
include("conexao.php");
error_reporting(0);
session_start();
if ($_SESSION['log'] == true) {	
}
else if($_SESSION['logAssoc'] == true){
	?>
	<script>
		alert('Você não está logado como cliente!');
		location.assign("pagAssociado.php");
	</script>
	<?php
}
else{
?>
<script>
	alert('Você não está logado!');
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
	<title>SEBRAEEC - <?php echo $_SESSION['nome']; ?></title>
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
<div id="menuMascote">
	<div id="fecharMasc"><img id="imgFechar" src="img/fechar.png"></div>
	<img src="img/balao1.png" class="balao">
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
						var utter = new SpeechSynthesisUtterance("<?php echo $_SESSION['nome'];?>. User: <?php echo $_SESSION['nome'];?>. E-mail: <?php echo $_SESSION['email'];?>. Telefone: <?php echo $_SESSION['tel'];?>. Senha: últimos quatro dígitos:<?php echo substr($_SESSION["senha"], -4); ?>. CPF: Primeiros 3 dígitos: <?php echo substr($_SESSION['cpf'], 0, 3) ?>.  RG: Primeiros 2 dígitos: <?php echo substr($_SESSION['rg'], 0, 2) ?>. Data de nascimento: <?php echo $_SESSION['dataNas'] ?>."); // responsável pelo que vai falar!
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
<div id="menuAltDados">
	<a id="fechar-menuAltDados">X</a>
	<br><br>
	<h3 id="title-altDados">Alterar Dados</h3>
	<form method="POST" action="altDados.php" id="altDadosForm">
		<a class="alert-mandatory">* </a><label for="username">Alterar Username:<br><input class="input-alt" type="text" id="username" name="username" value="<?php echo $_SESSION['nome'];?>"> </label>
		<br><br>
		<a class="alert-mandatory">* </a><label for="username">Alterar E-mail:<br><input class="input-alt" type="email" id="e-mail-alt" name="e-mail-alt" value="<?php echo $_SESSION['email'];?>"> </label>
		<br><br>
		<a class="alert-mandatory">* </a><label for="username">Alterar Telefone:<br><input class="input-alt" type="text" id="tel-alt" name="tel-alt" value="<?php echo $_SESSION['tel'];?>"> </label>
		<br><br>
		<a class="alert-mandatory">* </a><label for="username">Alterar CPF:<br><input class="input-alt" type="text" id="tel-alt" disabled name="tel-alt" value="<?php echo substr($_SESSION["cpf"], 0, 3);?>****"> </label>
		<br><br>
		<a class="alert-mandatory">* </a><label for="username">Alterar RG:<br><input class="input-alt" type="text" id="tel-alt" disabled name="tel-alt" value="<?php echo substr($_SESSION["rg"], 0, 2);?>****"> </label>
		<br><br>
		<a class="alert-mandatory">* </a><label for="username">Senha antiga:<br><input class="input-alt" type="password" id="senha-antiga" name="senha-antiga"> </label>
		<br><br>
		<a class="alert-mandatory">* </a><label for="username">Nova senha:<br><input class="input-alt" type="password" id="senha-alt" name="senha-alt"> </label>
		<br>
		<br>
		<input type="button" id="enviar-altDados" value="Alterar dados">
		<script>
			$("#enviar-altDados").click(function(){
				let nomeAlt = document.getElementById("username").value;
				let telAlt = document.getElementById("tel-alt").value;
				let emailAlt = document.getElementById("e-mail-alt").value;
				let senhaAntiga = document.getElementById("senha-antiga").value;
			    let senhaAlt = document.getElementById("senha-alt").value;
			    
			    if (emailAlt == 0 || senhaAlt == 0 || telAlt == 0 || nomeAlt == 0 || senhaAntiga == 0) {
			        swal("Preencha os campos.", "Ainda há campos não preenchidos!", "error");
			    }
			    else{
			    	if(telAlt.length < 11 || telAlt.length > 12){
			    		swal("Telefone inválido.", "Digite um telefone válido!", "error");
			    	}
			    	else{
			    		if(senhaAntiga != "<?php echo $_SESSION["senha"]; ?>"){
			    			swal("Senha incorreta", "Senha antiga incorreta!", "error");
			    		}	
			    		else if(senhaAlt.length < 8){
				    		swal("Mínimo de caracteres.", "Digite uma senha com mais de 8 caracteres!", "error");
				    	}	
			    		else{
			    			document.getElementById("altDadosForm").submit();
			    		}

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
<div id="menuAltImg">
	<p id="fecharAltImg">X</p>
	<img class="imgAltImg" src="<?php echo $_SESSION['pathClie']; ?>">
	<form action="alterarImg.php" enctype="multipart/form-data" method="POST" id="altImgForm">
		<p class="selecArq"><label for="arquivo">Selecione o arquivo</label>
		<input type="file" name="arquivo" id="arqId"></p>
		<input type="button" class="btnEnvImg" value="Enviar Imagem">
		<?php
			if($_SESSION['pathClie'] != "img/acesso-icon.png"){
				?>
				<input type="button" id="delImg" value="Deletar Imagem">
				<?php
			}
			?>
	</form>
</div>
<body>
	<div id="wrapper">
		<?php require_once("header.incLog.php"); ?>
		<br>
		<div id="pagTotPerfil">
			<h1 id="titlePerfUser">Perfil de Usuário</h1>
			<div id="divImgPerfil">
				<img id="user_imgPerfil" src="<?php echo $_SESSION['pathClie']; ?>">
				<button class="btnAltImg">Alterar Imagem</button>
				<p id="userNomePerfil"><b><?php echo $_SESSION["nome"]; ?></b></p>
			</div>
			<br>
			<div  class="dados"><b>User: </b><?php echo $_SESSION["nome"]; ?></div>
			<br>
			<div class="dados"><b>E-Mail: </b><?php echo $_SESSION["email"]; ?></div>
			<br>
			<div class="dados"><b>Telefone: </b><?php echo $_SESSION["tel"]; ?></div>
			<br>
			<div class="dados"><b>Senha: ****</b><?php echo substr($_SESSION["senha"], -3); ?></div>
			<br>
			<div class="dados"><b>CPF: </b><?php echo substr($_SESSION["cpf"], 0, 3); ?>****</div>
			<br>
			<div class="dados"><b>RG: </b><?php echo substr($_SESSION["rg"], 0, 2); ?>****</div>
			<br>
			<div class="dados"><b>Nascimento: </b><?php echo str_replace('-', '/', date('d-m-Y', strtotime($_SESSION['dataNasc']))); ?></div>
			<br>
			<br>
			<div id="divAltDados"><button id="altDados">Alterar dados</button></div>
			<div id="divDel"><button id="deleteAccount">Apagar Conta</button></div>
		</div>
		<?php require_once("footer.inc.php"); ?>
		<script>
			synth.cancel();
			click = false;
			$("#acessImg").hide();
			document.getElementById("passConfirmation").onkeydown = (e) => {
				if(e.keyCode == 13){
					deletar(e);
				}
			};
			$(".btnEnvImg").click(() => {
				arq = document.getElementById("arqId");
				if(arq.files.length == 0){
					swal("Selecione a Imagem", "Você não selecionou a imagem!", "error");
				}
				else{
					document.getElementById("altImgForm").submit();
				}
			});
		</script>
	</div>
</body>
</html>
