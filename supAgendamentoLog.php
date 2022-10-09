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
             <h1 id="title-supProd">Suporte para agendamentos</h1>
            <p class="parProduSup">Está com dúvidas com algum agendamento ou calendário do clube? Veja se seu problema se encaixa nas perguntas frequentes abaixo, ou envie para a nossa equipe de suporte que lhe responderá em até 48 horas.</p>
        </div>
        <div id="second-body-part-supProd">
            <h2 class="titlepag">Perguntas Frequentes</h2>
            <p class="pergsPar"><b>1. Como remarcar um agendamento?</b></p>
            <p class="pergsParResp"><b>R:</b> Entre em contato com nosso número: (11) 8221-9231. Pediremos seus dados e reagendaremos seu compromisso.
            <p class="pergsPar"><b>2. O agendamento é pago?</b></p>
            <p class="pergsParResp"><b>R:</b> Apenas em alguns jogos importantes de campeonato. Os mesmos serão informados na hora do agendamento.</p>
            <p id="viewMore">Mostrar mais...</p>
            <div id="hiddenPergs">
                <p class="pergsPar"><b>3. Como apresento meu agendamento na entrada do clube?</b></p>
                <p class="pergsParResp"><b>R:</b> Apenas apresente o comprovante em pdf no e-mail recebido pós-agendamento aos nossos funcionários.</p>
                <p class="pergsPar"><b>4. Como desmarco meu agendamento?</b></p>
                <p class="pergsParResp"><b>R:</b> Ligue no número: (11) 8221-9231 ou envie um e-mail para: sebrae.ec@gmail.com, para que ocorra o desmarcamento.</p>
                <p class="pergsPar"><b>5. Quanto tempo antes do dia preciso agendar a presença ao clube?</b></p>
                <p class="pergsParResp"><b>R:</b> Pelo menos 24 horas antes do dia da visita.</p>
                <p class="pergsPar"><b>6. Clientes com carteirinha pagam agendamentos?</b></p>
                <p class="pergsParResp"><b>R:</b> Nos pagos, sim, porém detém 15% de desconto.</p>
                <p class="pergsPar"><b>7. O agendamento do clube consta transporte?</b></p>
                <p class="pergsParResp"><b>R:</b> Não, a responsabilidade de se locomover a sede do clube é sua.</p>
                <p class="pergsPar"><b>8. A visita ao clube está disponível à que horas do dia?</b></p>
                <p class="pergsParResp"><b>R:</b> De 10:00 às 18:00.</p>
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