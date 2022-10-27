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
					var utter = new SpeechSynthesisUtterance("IDENTIDADE VISUAL DO CLUBE. A identidade visual de uma marca ou instituição é fundamental para o uso de elementos de forma correta, padronizada e legítima. O clube Sebrae Esporte Clube disponibiliza tal documento com o intuito de em casos de usos comerciais, ocorra o seguimento de critérios pré-definidos em nosso design. Faça o download: IdentidadeVisual.pdf. Ou acompanhe abaixo a identidade visual do clube:"); // responsável pelo que vai falar!
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
		<br><h2 id="title-pagIdvisual">Identidade Visual</h2>
		<div id="one-body-part-Idvisual">
			<p id="text-one-Idvisual">&nbsp A identidade visual de uma marca ou instituição é fundamental para o uso de elementos de forma correta, padronizada e legítima. O clube Sebrae Esporte Clube disponibiliza tal documento com o intuito de em casos de usos comerciais, ocorra o seguimento de critérios pré-definidos em nosso design.</p>
			<br>
			<br>
			<p class="text-pagIdvisual">Faça o download:</p>
			<br>
			<br>
			<div id="download-idVisual">
				<img src="img/pdf.png">
				<br><a href="docs/IdentidadeVisual.pdf?<?php echo time(); ?>" target="_blank">IdentidadeVisual.pdf</a>
			</div>
			<p class="text-pagIdvisual" id="text-Idvisual">Ou acompanhe abaixo a identidade visual do clube:</p>
			<div id="docIdVisual"><object data="docs/IdentidadeVisual.pdf?<?php echo time(); ?>" type="application/pdf" width="1000px" height="1000px"></object></div> 
		</div>
		<?php require_once("footer.inc.php"); ?>
		<script>
			synth.cancel();
			click = false;
		</script>
</body>
</html>