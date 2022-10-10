<?php require_once("com.inc.php"); ?>
<div id="menuMascote">
	<div id="fecharMasc"><img id="imgFechar" src="img/fechar.png"></div>
	<img src="img/balao1.png" class="balao">
	<img src="img/mascote.png?<?php echo time(); ?>" id="acessImg">
</div>
		<script>
			click = false;
			document.querySelector('html').addEventListener('keydown', () => {
 
				var tecla = event.keyCode;
		
				if(tecla == 27) {
					if(click == false){
						var utter = new SpeechSynthesisUtterance("MALHA. O jogo de Malha é extremamente similar ao jogo de Bocha, entretanto o objetivo deste esporte é arremessar um disco no intuito de derrubar ou deixar próximo ao um pino, este que muitas das vezes é feito de madeira e possui um circunferência demarcada por um giz, ou muitas das vezes um pedaço de tijolo. Esta modalidade pode ser praticada de forma individual, em duplas ou até mesmo em quartetos. Assim como o jogo de bocha, a malha é um jogo muito antigo e que não possui uma origem bem definida, acredita-se que era praticado na França e Itália, por volta de 1490. Porém, a prova da existência desse esporte vem de um documento francês de 1644. Um esporte como a malha ficou muito conhecido em Portugal, em que era feito o arremesso de ferraduras. Esse possuía alguns nomes, como “Chinquilho” e “jogo do fito”. Já no Brasil, não se sabe ao certo quem trouxe para cá, mas acredita-se que tenham sido os portugueses, que trouxeram o jogo do fito e esse sofreu alterações. O jogo era muito praticado em São Paulo."); // responsável pelo que vai falar!
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
		<?php require_once("header.inc.php"); ?>
		<div id="title-malhaPag-div"><img src="img/malhasl.png?<?php echo time(); ?>"></div>
		<div id="one-body-part-malhaPag"> <!-- Primeira partição do corpo da página. -->
			<div id="text-malhaPag-div">
				<br><br>
				<p class="text-bochaPag"><b>Malha</b><p class="text-bochaPag"><br>
				&nbsp O jogo de Malha é extremamente similar ao jogo de Bocha, entretanto o objetivo deste esporte é arremessar um disco no intuito de derrubar ou deixar próximo ao um pino, este que muitas das vezes é feito de madeira e possui um circunferência demarcada por um giz, ou muitas das vezes um pedaço de tijolo. Esta modalidade pode ser praticada de forma individual, em duplas ou até mesmo em quartetos.</p>
		
				<p class="text-bochaPag">&nbsp Assim como o jogo de bocha, a malha é um jogo muito antigo e que não possui uma origem bem definida, acredita-se que era praticado na França e Itália, por volta de 1490. Porém, a prova da existência desse esporte vem de um documento francês de 1644.</p>
				
				<p class="text-bochaPag">&nbsp Um esporte como a malha ficou muito conhecido em Portugal, em que era feito o arremesso de ferraduras. Esse possuía alguns nomes, como “Chinquilho” e “jogo do fito”. Já no Brasil, não se sabe ao certo quem trouxe para cá, mas acredita-se que tenham sido os portugueses, que trouxeram o jogo do fito e esse sofreu alterações. O jogo era muito praticado em São Paulo.</p><br>
			</div> <!-- Informações do esporte Bocha. -->
			<img class="bochaMalha-img" id="malha-img1" src="img/malha-img1.jpg">
			<img class="bochaMalha-img" id="malha-img2" src="img/malha-img2.jpg">
			<img class="bochaMalha-img" id="malha-img3" src="img/malha-img3.jpg">
		</div>
		<?php require_once("footer.inc.php"); ?>
		<script>
			synth.cancel();
			click = false;
		</script>
</body>
</html>