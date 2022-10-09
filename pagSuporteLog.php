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
						var utter = new SpeechSynthesisUtterance("Suporte ao clube. Suporte para produtos. Suporte para agendamentos. Suporte para acesso. Compre os produtos do nosso clube. Adquira agora os nossos produtos, com desconto para clientes com carteirinha! Sobre o nosso clube. Saiba mais sobre o nosso clube e não perca tempo para nos apoiar!"); // responsável pelo que vai falar!
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
		<div id="sliderSuporte"></div>
		<div id="one-body-part-suporte">
			<h2 id="title-suporte">Suporte ao clube</h2>
			<div id="redirects-suport">
				<div class="divSuportes-icon">
					<img class="suporte-icon" id="produtoLog-icon" src="img/produto-icon.png?<?php echo rand(1, 1000);?>">
					<p class="par-icon">Suporte para produtos.</p>
				</div>
				<div class="divSuportes-icon">
					<img class="suporte-icon" id="agendamentoLog-icon" src="img/agendamento-icon.png?<?php echo rand(1, 1000);?>">
					<p class="par-icon">Suporte para agendamentos.</p>
				</div>
				<div class="divSuportes-icon">
					<img class="suporte-icon" id="acessoLog-icon" src="img/acesso-icon.png?<?php echo rand(1, 1000);?>">
					<p class="par-icon">Suporte para acesso.</p>
				</div>
			</div>
		</div>
		<div id="second-body-part-suporte">
			<div class="anunc-prop">
				<div class="img-prop" id="img-produto"><img class="imgAnuncio1" src="img/produtos/anuncio1.png"></div>
				<h2 class="title-anunc"><b>Compre os produtos do nosso clube.</b></h2>
				<p class="par-prop">Adquira agora os nossos produtos, com desconto para clientes com carteirinha!</p>
			</div>
			<div class="anunc-prop">
				<div class="img-prop"><img class="imgAnuncio2" src="img/produtos/anuncio2.png"></div>
				<h2 class="title-anunc"><b>Sobre o nosso clube.</b></h2>
				<p class="par-prop">Saiba mais sobre o nosso clube e não perca tempo para nos apoiar!</p>
			</div>
		</div>
		<?php require_once("footer.inc.php"); ?>
		<script>
			synth.cancel();
			click = false;
			$("#acessImgLog").hide();
		</script>
</body>
</html>