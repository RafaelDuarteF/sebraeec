<?php
	session_start();
	$_SESSION['nome'] = "";
	$_SESSION['senha'] = "";
	$_SESSION['email'] = "";
	$_SESSION['tel'] = "";
	$_SESSION['cpf'] = "";
	$_SESSION['rg'] = "";
	$_SESSION['dataNasc'] = "";
	$_SESSION['nomeAssoc'] = "";
	$_SESSION['senhaAssoc'] = "";
	$_SESSION['enderecoAssoc'] = "";
	$_SESSION['telAssoc'] = "";
	$_SESSION['cpfAssoc'] = "";
	$_SESSION['rgAssoc'] = "";
	$_SESSION['tipoAssoc'] = "";
	$_SESSION['banco'] = "";
	$_SESSION['agencia'] = "";
	$_SESSION['pathClie'] = "";
	$_SESSION['pathAssoc'] = "";
	$_SESSION['conta'] = "";
	$_SESSION['log'] = false;
	$_SESSION['logAssoc'] = false;
	setcookie('logado', 0);
	setcookie('logadoAssoc', 0);
	setcookie('nome', 0);
	setcookie('cpfAssoc', 0);
	if($_SESSION['url'] == '/site_proj_bd/index_log.php'){
		header("location:index.php");
	}
	else if($_SESSION['url'] == '/site_proj_bd/pagBochaLog.php'){
		header("location:pagBocha.php");
	}
	else if($_SESSION['url'] == '/site_proj_bd/pagMalhaLog.php'){
		header("location:pagMalha.php");
	}
	else if($_SESSION['url'] == '/site_proj_bd/pagEventosLog.php'){
		header("location:pagEventos.php");
	}
	else if($_SESSION['url'] == '/site_proj_bd/pagIdVisualLog.php'){
		header("location:pagIdVisual.php");
	}
	else if($_SESSION['url'] == '/site_proj_bd/pagProdutosLog.php'){
		header("location:pagProdutos.php");
	}
	else if($_SESSION['url'] == '/site_proj_bd/pagQuemSomosLog.php'){
		header("location:pagQuemSomos.php");
	}
	else if($_SESSION['url'] == '/site_proj_bd/pagSobreClubeLog.php'){
		header("location:pagSobreClube.php");
	}
	else if($_SESSION['url'] == '/site_proj_bd/pagSuporteLog.php'){
		header("location:pagSuporte.php");
	}
	else if($_SESSION['url'] == '/site_proj_bd/supAcessoLog.php'){
		header("location:supAcesso.php");
	}
	else if($_SESSION['url'] == '/site_proj_bd/supAgendamentoLog.php'){
		header("location:supAgendamento.php");
	}
	else if($_SESSION['url'] == '/site_proj_bd/supProdutosLog.php'){
		header("location:supProdutos.php");
	}
	else{
		header("location:index.php");
	}
?>
