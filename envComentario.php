<?php
	include('conexao.php');
	session_start();
	if($_SESSION['logAssoc'] != true){
		?>
		<script>alert('Você precisa estar logado como associado do clube!'); location.assign('pagForum.php');</script>
		<?php
	}
	else{
		$yt = $l + 1;
		while($yt > 0){
			$yt--;
			$testePost = 'coment' . strval($yt);
			if(isset($_POST[$testePost])){
				$codPostComent = $codPost[$yt];
				$envComentario = "INSERT INTO  comentario VALUES(".  substr(time(), -7) . ", " . $codPostComent . ", '". $_SESSION['nomeAssoc']."', '". date('Y-m-d')."', '". $_POST[$testePost]. "', '". $_SESSION['cpfAssoc'] ."')";
				$conPost = $mysqli->query($envComentario) or die ($mysqli->error);
				$_SESSION['envComentario'] = true;
				header('location: pagForumLog.php');
			}
		}
	}
?>