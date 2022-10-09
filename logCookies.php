<?php
	session_start();
	include("conexao.php");
	if(isset($_COOKIE['logado']) && isset($_COOKIE['nome']) && $_COOKIE['logado'] == 1){
		$t = 0;
		while($t < $i){
			$t++;
			if($_COOKIE['nome'] == $users[$t]){
				$_SESSION['nome'] = $users[$t];
				$_SESSION['senha'] = $senhaUser[$t];
				$_SESSION['tel'] = $telefone[$t];
				$_SESSION['email'] = $email[$t];
				$_SESSION['cpf'] = $cpf[$t];
				$_SESSION['rg'] = $rg[$t];
				$_SESSION['dataNasc'] = $dataUser[$t];
				$_SESSION['pathClie'] = $pathClie[$t];
				$_SESSION['logWithCookies'] = true;
				$_SESSION['log'] = true;
				switch ($_SESSION['url']) {
					case '/site_proj_bd/index.php':
						header("location:index_log.php");
						break;
					case '/site_proj_bd/pagBocha.php':
						header("location:pagBochaLog.php");
						break;
					case '/site_proj_bd/pagMalha.php':
						header("location:pagMalhaLog.php");
						break;
					case '/site_proj_bd/pagEventos.php':
						header("location:pagEventosLog.php");
						break;
					case '/site_proj_bd/pagIdVisual.php':
						header("location:pagIdVisualLog.php");
						break;
					case '/site_proj_bd/pagProdutos.php':
						header("location:pagProdutosLog.php");
						break;
					case '/site_proj_bd/pagQuemSomos.php':
						header("location:pagQuemSomosLog.php");
						break;
					case '/site_proj_bd/pagSobreClube.php':
						header("location:pagSobreClubeLog.php");
						break;
					case '/site_proj_bd/pagSuporte.php':
						header("location:pagSuporteLog.php");
						break;
					case '/site_proj_bd/supAcesso.php':
						header("location:supAcessoLog.php");
						break;
					case '/site_proj_bd/supAgendamento':
						header("location:supAgendamentoLog.php");
						break;
					case '/site_proj_bd/supProdutos.php':
						header("location:supProdutosLog.php");
						break;
					default:
						header("location:index_log.php");
						break;
				}
			}
		}
	}
	else{
		setcookie("logado", 0);
		setcookie("nome", "");
		if($_SESSION['url'] == '/site_proj_bd/index.php'){
			header("location:index.php");
		}
		else if($_SESSION['url'] == '/site_proj_bd/pagBocha.php'){
			header("location:pagBocha.php");
		}
		else if($_SESSION['url'] == '/site_proj_bd/pagMalha.php'){
				header("location:pagMalha.php");
		}
		else if($_SESSION['url'] == '/site_proj_bd/pagEventos.php'){
			header("location:pagEventos.php");
		}
		else if($_SESSION['url'] == '/site_proj_bd/pagIdVisual.php'){
			header("location:pagIdVisual.php");
		}
		else if($_SESSION['url'] == '/site_proj_bd/pagProdutos.php'){
			header("location:pagProdutos.php");
		}
		else if($_SESSION['url'] == '/site_proj_bd/pagQuemSomos.php'){
			header("location:pagQuemSomos.php");
		}
		else if($_SESSION['url'] == '/site_proj_bd/pagSobreClube.php'){
			header("location:pagSobreClube.php");
		}
	}

?>