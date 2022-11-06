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
	</script>
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
						var utter = new SpeechSynthesisUtterance("BOCHA. O jogo de Bocha é muito conhecido por ser um esporte de precisão, normalmente disputado em campeonatos em quadras que possuem uma superfície lisa, onde permitem o lançamento das bolas denominadas “bochas”, sendo elas de madeira ou resina sintética, tendo como alvo uma bola menor chamada bolim. MALHA. O jogo de Malha é extremamente similar ao jogo de Bocha, entretanto o objetivo deste esporte é arremessar um disco no intuito de derrubar ou deixar próximo ao um pino, este que muitas das vezes é feito de madeira e possui um circunferência demarcada por um giz, ou muitas das vezes um pedaço de tijolo. SOBRE O CLUBE. Constantemente organizamos campeonatos visando o entreterimento para a melhor idade, oferecendo as duas modalidades esportivas: bocha e malha. Também possuimos nossos produtos! Ideal para você que pratica esses esportes e acompanha nosso clube!"); // responsável pelo que vai falar!
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
		<!-- <div id="setasDiv">
			<div class="setas" id="seta"><img src="img/seta.png"></div>
			<div class="setas" id="seta2"><img src="img/seta2.png"></div>  
		</div> -->	<!-- Imagens responsáveis pelas setas do slider -->
		<div id="slider-body-part">
			<div id="slider">
				<img class="slidersImg" id="slider-img4Log" src="img/slider2.jpg?<?php echo time(); ?>" alt="Faça seu agendamento ao clube.">
				<img class="slidersImg" id="slider-img3Log" src="img/slider3.jpg?<?php echo time(); ?>" alt="Nossas modalidades."> 
				<img class="slidersImg" id="slider-img2Log" src="img/slider4.jpg?<?php echo time(); ?>" alt="Nossos produtos.">
				<img class="slidersImg" id="slider-img1Log" src="img/slider1.jpg?<?php echo time(); ?>" alt="Associe-se ao clube.">  <!-- A imagem emitida pelo slider -->
			</div>
		</div>
		<div id="one-body-part"> <!-- Primeira partição do corpo da página. -->
			<div id="bocha-malha">
			<div id="bocha">
				<div id="title-bochaInfo"><img src="img/bocha.png" id="img-bocha"></div> 
				<div class="text-bocha-malha">O jogo de <a href="pagBochaLog.php">Bocha</a> é muito conhecido por ser um esporte de precisão, 
					normalmente disputado em campeonatos em quadras que possuem uma superfície lisa, onde permitem 
					o lançamento das bolas denominadas “bochas”, sendo elas de madeira ou resina sintética, tendo como 
					alvo uma bola menor chamada “bolim”. </div>
			</div>
			<div id="malha">
				<div id="title-malhaInfo"><img src="img/malha.png" id="img-malha"></div>
				<div class="text-bocha-malha">O jogo de <a href="pagMalhaLog.php">Malha</a> é extremamente similar ao jogo de Bocha, entretanto o 
					objetivo deste esporte é arremessar um disco no intuito de derrubar ou deixar próximo ao um pino, 
					este que muitas das vezes é feito de madeira e possui um circunferência demarcada por um giz, ou 
					muitas das vezes um pedaço de tijolo.</div>
			</div>
		</div>
		</div>
		<div id="second-body-part"> <!-- Segunda partição do corpo da página. -->
			<div id="text-information-for-club">Constantemente organizamos campeonatos visando o entretenimento para a 
				<br>melhor idade, oferecendo as duas modalidades esportivas: bocha e malha.<br> Também possuimos nossos
				<a href="pagProdutosLog.php">produtos</a>! Ideal para você que pratica esses esportes<br>e acompanha <a href="pagSobreClubeLog.php">nosso clube</a>!
			</div>
			<div><img id="img-clube" src="img/clube.png?<?php echo time(); ?>"></div>
		</div>
		<?php require_once("footer.inc.php"); ?>
		<script>
			synth.cancel();
			click = false;
		</script>
</body>
</html>
<script>
	$("#teste").click(function(){
		location.assign("verificarAssociado.php");
	})
</script>
