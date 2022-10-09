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
        <br>
        <a id="voltSup" href="pagSuporteLog.php">< Voltar para suportes</a>
        <div id="one-body-part-supProd">
            <h1 id="title-supProd">Suporte para acesso</h1>
            <p class="parProduSup">Está com dúvidas sobre algum acesso ao nosso sistema? Veja se seu problema se encaixa nas perguntas frequentes abaixo, ou envie para a nossa equipe de suporte que lhe responderá em até 48 horas.</p>
        </div>
        <div id="second-body-part-supProd">
            <h2 class="titlepag">Perguntas Frequentes</h2>
            <p class="pergsPar"><b>1. Os produtos possuem devolução pós compra?</b></p>
            <p class="pergsParResp"><b>R:</b> Sim, 30 dias após a entrega do produto você poderá solicitar a devolução.
            <p class="pergsPar"><b>2. O frete dos produtos são grátis?</b></p>
            <p class="pergsParResp"><b>R:</b> Apenas para o estado de São Paulo e Goiás</p>
            <p id="viewMore">Mostrar mais...</p>
            <div id="hiddenPergs">
                <p class="pergsPar"><b>3. Meu produto chegou danificado, e agora?</b></p>
                <p class="pergsParResp"><b>R:</b> Entre em contato conosco abaixo dessa página e envie-nos um relatório</p>
                <p class="pergsPar"><b>4. Posso trocar meu produto?</b></p>
                <p class="pergsParResp"><b>R:</b> Não. Apenas solicitar sua devolução e retomar o dinheiro gasto.</p>
                <p class="pergsPar"><b>5. Qual o prazo de entrega?</b></p>
                <p class="pergsParResp"><b>R:</b> Nossa estimativa geral é de até 15 dias para todo o Brasil.</p>
                <p class="pergsPar"><b>6. Clientes com carteirinha possuem descontos?</b></p>
                <p class="pergsParResp"><b>R:</b> Sim, até 15% de desconto nas compras.</p>
                <p class="pergsPar"><b>7. Qual a transportadora dos pedidos?</b></p>
                <p class="pergsParResp"><b>R:</b> Nossa transportadora oficial é a JR Express.</p>
                <p class="pergsPar"><b>8. É possível rastrear meu pedido?</b></p>
                <p class="pergsParResp"><b>R:</b> Por enquanto não. Mas qualquer anormalidade é informada em seu telefone e e-mail.</p>
                <p id="viewMenos">Mostrar menos...</p>
            </div>
        </div>
        <div id="thirty-body-part-supProd">
            <h2 class="titlepag">Fale Conosco</h2>
            <p class="parProduSup" id="parInform">Informe seu problema e suas informações de contato abaixo. Responderemos o mais rápido possível.</p>
            <form id="formSuport" action="submitSuportLog.php" method="POST">
                <label class="lblSup" for="nomeSup">Nome: </label><input type="text" name="nomeSup" id="nomeSup" class="inputSup"><br><br>
                <label class="lblSup" for="emailSup">E-mail: </label><input type="email" name="emailSup" id="emailSup" class="inputSup"><br><br>
                <label class="lblSup" for="telSup">Telefone: </label><input placeholder="ex:11924442542" type="number" name="telSup" id="telSup" class="inputSup"><br><br>
                <label class="lblSup" for="probSup" id="probDiv">Relate seu problema: </label><br><textarea maxlength="500" type="text" name="probSup" id="probSup" class="inputSup"></textarea><br><br>
                <button type="button" id="btnSubProb">Enviar</button>
            </form>
        </div>
		<?php require_once("footer.inc.php"); ?>
		<script>
			synth.cancel();
			click = false;
			$("#acessImgLog").hide();
		</script>
</body>
</html>