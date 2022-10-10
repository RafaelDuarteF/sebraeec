<?php 
session_start();
	if(isset($_SESSION['nomeAssoc']) && $_SESSION['nomeAssoc'] != ""){
		require_once("com.incLogAssoc.php"); 
	}
	else{
		require_once("com.incLog.php"); 
	}
	
	?>
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
						var utter = new SpeechSynthesisUtterance("BOCHA. O jogo de Bocha é muito conhecido por ser um esporte de precisão, normalmente disputado em campeonatos em quadras que possuem uma superfície lisa, onde permitem o lançamento das bolas denominadas “bochas”, sendo elas de madeira ou resina sintética, tendo como alvo uma bola menor chamada “bolim”. Este esporte tem uma relação com a inclusão, visto que é muito praticado nas Paraolimpíadas. Existem algumas especulações de que esse esporte tenha sido praticado na Grécia e Egito Antigo e foi se tornar um esporte na Itália, em seu período imperial, onde era conhecida por “bocce” e era praticado no gramado. No início do século XVI o esporte começou a ficar famoso entre países da Europa, dentre esses: Portugal, Inglaterra, França e Espanha. Porém o esporte só foi chegar ao Brasil em meados do século XX, com a chegada dos italianos no Rio Grande do Sul. Como outros esportes, a bocha também busca a inclusão com sua adaptação de jogo, a bocha paraolímpica. O objetivo do jogo é o mesmo, arremessar as bolas coloridas o mais perto da bola branca (jack ou bolim). Mas nesse caso, os atletas ficam sentados em cadeiras de rodas limitados a uma demarcação para a realização dos arremessos. Na bocha paraolímpica, é permitido usar as mãos, os pés, possíveis instrumentos de auxílio e em alguns casos até ajudantes (colheiros). Nesse caso seria especificamente para atletas com deficiências mais graves. Na classificação funcional, os atletas de bocha são divididos em quatro classes de acordo com suas deficiências e necessidades: Na classe BC1, é permitido a opção do auxílio de ajudantes, podendo realizar o ajuste ou a estabilização da cadeira do atleta e entregar a bola; Na classe BC2, não é permitido nenhum tipo de assistência; Na classe BC3, são atletas com deficiências mais severas, permitindo assim a utilização de ferramentas de auxílio e colheiros; Por fim, na classe BC4 também atletas com deficiências mais severas, porém que não recebem nenhum tipo de assistência."); // responsável pelo que vai falar!
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
		<div id="title-bochaPag-div"><img src="img/bochasl.png?<?php echo time(); ?>"></div>
		<div id="one-body-part-bochaPag"> <!-- Primeira partição do corpo da página. -->
			<div id="text-bochaPag-div">
				<br><br>
				<p class="text-bochaPag"><b>Bocha</b><p class="text-bochaPag"><br>
				&nbsp O jogo de Bocha é muito conhecido por ser um esporte de precisão, normalmente disputado em campeonatos em quadras que possuem uma superfície lisa, onde permitem o lançamento das bolas denominadas “bochas”, sendo elas de madeira ou resina sintética, tendo como alvo uma bola menor chamada “bolim”. Este esporte tem uma relação com a inclusão, visto que é muito praticado nas Paraolimpíadas.</p>
		
				<p class="text-bochaPag">&nbsp Existem algumas especulações de que esse esporte tenha sido praticado na Grécia e Egito Antigo e foi se tornar um esporte na Itália, em seu período imperial, onde era conhecida por “bocce” e era praticado no gramado. No início do século XVI o esporte começou a ficar famoso entre países da Europa, dentre esses: Portugal, Inglaterra, França e Espanha. Porém o esporte só foi chegar ao Brasil em meados do século XX, com a chegada dos italianos no Rio Grande do Sul.</p>
				
				<p class="text-bochaPag">&nbsp Como outros esportes, a bocha também busca a inclusão com sua adaptação de jogo, a bocha paraolímpica. O objetivo do jogo é o mesmo, arremessar as bolas coloridas o mais perto da bola branca (jack ou bolim). Mas nesse caso, os atletas ficam sentados em cadeiras de rodas limitados a uma demarcação para a realização dos arremessos. Na bocha paraolímpica, é permitido usar as mãos, os pés, possíveis instrumentos de auxílio e em alguns casos até ajudantes (colheiros). Nesse caso seria especificamente para atletas com deficiências mais graves. Na classificação funcional, os atletas de bocha são divididos em quatro classes de acordo com suas deficiências e necessidades:</p><br>
				<p class="text-bochaPag">Na classe BC1, é permitido a opção do auxílio de ajudantes, podendo realizar o ajuste ou a estabilização da cadeira do atleta e entregar a bola;</p>
				<p class="text-bochaPag"> Na classe BC2, não é permitido nenhum tipo de assistência;</p>
				<p class="text-bochaPag"> Na classe BC3, são atletas com deficiências mais severas, permitindo assim a utilização de ferramentas de auxílio e colheiros;</p>
				<p class="text-bochaPag">Por fim, na classe BC4 também atletas com deficiências mais severas, porém que não recebem nenhum tipo de assistência.</p>
				<img class="bochaMalha-img" id="bocha-img1" src="img/bocha-img1.jpg">
				<img class="bochaMalha-img" id="bocha-img2" src="img/bocha-img2.jpg">
				<img class="bochaMalha-img" id="bocha-img3" src="img/bocha-img3.jpg">
			</div> <!-- Informações do esporte Bocha. -->
		</div>
		<?php require_once("footer.inc.php"); ?>
		<script>
			synth.cancel();
			click = false;
		</script>
</body>
</html>