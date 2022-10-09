<?php
	session_start();
	include("conexao.php");
	$logT = false;
	if(isset($_COOKIE['logadoAssoc']) && isset($_COOKIE['cpfAssoc']) && $_COOKIE['logadoAssoc'] == 1){
		$t = 0;
		while($t < $f){
			$t++;
			if($_COOKIE['cpfAssoc'] == $cpfAssoc[$t]){
				$_SESSION['nomeAssoc'] = $nomeAssoc[$t];
				echo "ta0";
				$_SESSION['senhaAssoc'] = $senhaAssoc[$t];
				$_SESSION['telAssoc'] = $telefoneAssoc[$t];
				$_SESSION['emailAssoc'] = $emailAssoc[$t];
				$_SESSION['cpfAssoc'] = $cpfAssoc[$t];
                $_SESSION['enderecoAssoc'] = $enderecoAssoc[$t];
				$_SESSION['rgAssoc'] = $rgAssoc[$t];
				$_SESSION['banco'] = $banco[$t];
                $_SESSION['agencia'] = $agencia[$t];
                $_SESSION['conta'] = $conta[$t];
				$_SESSION['pathAssoc'] = $pathAssoc[$t];
				$_SESSION['tipoAssoc'] = $tipoAssoc[$t];
				$_SESSION['logWithCookiesAssoc'] = true;
				$_SESSION['logAssoc'] = true;
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
			else if($t == $i && !isset($_SESSION['logAssoc'])){
				setcookie('logadoAssoc', 0);
				setcookie('cpfAssoc', 0);
				header("location:index.php");
			}
		}
	}
	else{
		setcookie("logadoAssoc", 0);
		setcookie("cpfAssoc", "");
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