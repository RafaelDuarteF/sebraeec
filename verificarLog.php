<?php 
	include("conexao.php");
	error_reporting(0);
	date_default_timezone_set('America/Sao_Paulo');
	session_start();
		$nomeLog = $_POST["user-login"];
		$senhaLog = $_POST["senha-login"];
		$nomeCad = $_POST['nome-cadastro'];
		$senhaCad = $_POST['senha-cadastro'];
		$telCad = $_POST["tel-cadastro"];
		$emailCad = $_POST['e-mail-cadastro'];
		$rgCad = $_POST['rg-cadastro'];
		$cpfCad = $_POST['cpf-cadastro'];
		$data_nasCad = $_POST['dataNas-cadastro'];
		if((strlen($nomeLog) == 0 && strLen($senhaLog) == 0) && (strlen($nomeCad) != 0 && strLen($senhaCad) != 0 && strlen($telCad) != 0 && strLen($data_nasCad) != 0 && strLen($emailCad) != 0 && strLen($rgCad) != 0 && strLen($cpfCad) != 0)){
			$cad = false;
			$a = 0;
			while($a < $i){
				$a++;
				if($nomeCad == $users[$a] || $emailCad == $email[$a] || $telCad == $telefone[$a] || $cpfCad == $cpf[$a]){
					$cad = true;
				}
			}
			if($cad != true){
				$nome = $nomeCad;
				$_SESSION['nome'] = $nomeCad;
				$_SESSION['senha'] = $senhaCad;
				$_SESSION['tel'] = $telCad;
				$_SESSION['email'] = $emailCad;
				$_SESSION['cpf'] = $cpfCad;
				$_SESSION['rg'] = $rgCad;
				$_SESSION['dataNasc'] = $data_nasCad;
				$_SESSION['pathClie'] = "img/acesso-icon.png";
				$_SESSION['signIn'] = true;
				setcookie("logado", 1, time()+432000);
				setcookie("nome", $_SESSION['nome'], time()+432000);
				$_SESSION['log'] = true;
				$adc = "INSERT INTO cliente VALUES('$emailCad', '$nomeCad', '$senhaCad', '$telCad', '$rgCad', '$cpfCad', '$data_nasCad', 'img/acesso-icon.png')";
				$con = $mysqli->query($adc) or die($mysqli->error);
			}
			else{
				setcookie("logado", 0);
			?>
			<script>
				alert("Nome de usuário, telefone, cpf ou e-mail já cadastrados!");
				location.assign("pagCadastro.php");
			</script>
			<?php
			}
		
		}
		else if((strlen($nomeLog) != 0 && strLen($senhaLog) != 0) && (strlen($nomeCad) == 0 && strLen($senhaCad) == 0)){
			$e = 0;
			$validacao = false;
			while($e < $i){
				$e++;
				if($nomeLog == $users[$e] && $senhaLog == $senhaUser[$e]){
					$_SESSION['log'] = true;
					$_SESSION['signIn'] = true;
					$nome = $nomeLog;
					$_SESSION['nome'] = $nomeLog;
					$_SESSION['senha'] = $senhaLog;
					$_SESSION['email'] = $email[$e];
					$_SESSION['tel'] = $telefone[$e];
					$_SESSION['cpf'] = $cpf[$e];
					$_SESSION['rg'] = $rg[$e];
					$_SESSION['dataNasc'] = $dataUser[$e];
					$_SESSION['pathClie'] = $pathClie[$e];
					setcookie("logado", 1, time()+432000);
					setcookie("nome", $_SESSION['nome'], time()+432000);
					$validacao = true;
				}
			}
			if($validacao != true){
				setcookie("logado", 0);

	?>
	<script>
		alert("Usuário ou senha incorretas!");
		window.location.replace("index.php")
	</script>
	<?php
			}
		}		
		else{
			setcookie("logado", 0);
	?>
	<script>
		alert("Usuário ou senha incorretas!");
		window.location.replace("index.php")
	</script>
	<?php
		}
		$validacao = false;

	?>
<script>location.assign("pagPerfil.php");</script>