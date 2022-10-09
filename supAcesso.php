<?php require_once("com.inc.php"); ?>
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
		<?php require_once("header.inc.php"); ?>
        <br>
        <a id="voltSup" href="pagSuporte.php">< Voltar para suportes</a>
        <div id="one-body-part-supProd">
        <h1 id="title-supProd">Suporte para acesso</h1>
            <p class="parProduSup">Está com dúvidas sobre algum acesso ao nosso sistema? Veja se seu problema se encaixa nas perguntas frequentes abaixo, ou envie para a nossa equipe de suporte que lhe responderá em até 48 horas.</p>
        </div>
        <div id="second-body-part-supProd">
            <h2 class="titlepag">Perguntas Frequentes</h2>
            <p class="pergsPar"><b>1. Esqueci minha senha, e agora?
            </b></p>
            <p class="pergsParResp"><b>R:</b> Entre em contato conosco pelo e-mail ou número de telefone.
            <p class="pergsPar"><b>2. O e-mail cadastrado precisa ser existente?</b></p>
            <p class="pergsParResp"><b>R:</b> Sim, você pode precisar recuperar sua senha através desse e-mail ou receber e-mail importantes sobre nosso clube</p>
            <p id="viewMore">Mostrar mais...</p>
            <div id="hiddenPergs">
                <p class="pergsPar"><b>3. Como sei minha senha de associado?</b></p>
                <p class="pergsParResp"><b>R:</b> Você recebe a senha através de nossos funcionários quando os mesmos realizam o cadastro.</p>
                <p class="pergsPar"><b>4. Como me cadastro como associado do clube?</b></p>
                <p class="pergsParResp"><b>R:</b> Faça um plano ligando para nós ou indo em uma de nossas sedes, nossos funcionários realizaram seu cadatro como associado.</p>
                <p class="pergsPar"><b>5. Como acesso as minhas mensalidades de associado?</b></p>
                <p class="pergsParResp"><b>R:</b> Logue como associado e acesse seu perfil clicando no personagem no canto superior direito da tela, após isso clicando em "Meu perfil", após isso, role até em baixo da página.</p>
                <p class="pergsPar"><b>6. Caso o valor da mensalidade aumente, serei avisado antes?</b></p>
                <p class="pergsParResp"><b>R:</b> Enviaremos SMS e e-mail lhe informando em pelo menos dois meses de antecedência.</p>
                <p id="viewMenos">Mostrar menos...</p>
            </div>
        </div>
        <div id="thirty-body-part-supProd">
            <h2 class="titlepag">Fale Conosco</h2>
            <p class="parProduSup" id="parInform">Informe seu problema e suas informações de contato abaixo. Responderemos o mais rápido possível.</p>
            <form id="formSuport" action="submitSuport.php" method="POST">
                <label class="lblSup" for="nomeSup">Nome: </label><input type="text" name="nomeSup" id="nomeSup" class="inputSup"><br><br>
                <label class="lblSup" for="emailSup">E-mail: </label><input type="email" name="emailSup" id="emailSup" class="inputSup"><br><br>
                <label class="lblSup" for="telSup">Telefone: </label><input placeholder="ex:11924442542" type="number" name="telSup" id="telSup" class="inputSup"><br><br>
                <label class="lblSup" for="probSup" id="probDiv">Relate seu problema: </label><br><textarea maxlength="500" type="text" name="probSup" id="probSup" class="inputSup"></textarea><br>
                <p id="avisMax">Máx de 500 caracteres!</p>
                <br>
                <button type="button" id="btnSubProb">Enviar</button>
            </form>
        </div>
		<?php require_once("footer.inc.php"); ?>
		<script>
			synth.cancel();
			click = false;
			$("#acessImg").hide();
		</script>
</body>
</html>