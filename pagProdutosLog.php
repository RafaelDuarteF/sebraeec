<div id="menuMascote">
	<div id="fecharMasc"><img id="imgFechar" src="img/fechar.png"></div>
	<img src="img/balao2.png" class="balao">
	<img src="img/mascote.png?<?php echo time(); ?>" id="acessImg">
</div>
<?php 
	session_start();
	if(isset($_SESSION['nomeAssoc']) && $_SESSION['nomeAssoc'] != ""){
		require_once("com.incLogAssoc.php"); 
	}
	else{
		require_once("com.incLog.php"); 
	}
	
	?>

		<script>
			click = false;
			document.querySelector('html').addEventListener('keydown', () => {
 
				var tecla = event.keyCode;
		
				if(tecla == 27) {
					if(click == false){
						var utter = new SpeechSynthesisUtterance("PRODUTOS DO CLUBE."); // responsável pelo que vai falar!
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
		<?php require_once("header.incLog.php"); ?>
		<div id="one-body-part-pds">
			<h2 class="titlePagProds">Produtos do Clube</h2>
			<p class="parOrder">Ordenar por <b><?php echo $_SESSION['order']; ?></b><img class="setaOrder" src="img/seta.png"></p>
			<div class="menuOrder">
				<p class="order" id="az">A-Z</p>
				<p class="order" id="maiorPreco">Maior Preço</p>
				<p class="order" id="menorPreco">Menor Preço</p>
			</div>
			<div class="produtos">
				<?php include 'verificarProdutosLog.php'; ?>
			</div>
			<br><br><br>
		</div>
		<?php require_once("footer.inc.php"); ?>
		<script>
			synth.cancel();
			click = false;
			$("#az").click(() => {
				location.assign('orderAZ.php');
			});
			$("#maiorPreco").click(() => {
				location.assign('orderMaiorPreco.php');
			});
			$("#menorPreco").click(() => {
				location.assign('orderMenorPreco.php');
			});
			function produto(id){
				document.getElementById(id).submit();
			}
		</script>
</body>
</html>