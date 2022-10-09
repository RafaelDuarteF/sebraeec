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
                     var utter = new SpeechSynthesisUtterance("Suporte para produtos. Está com dúvidas com seu produto ou com a compra dele? Veja se seu problema se encaixa nas perguntas frequentes abaixo, ou envie para a nossa equipe de suporte que lhe responderá em até 48 horas. Perguntas Frequentes. 1. Os produtos possuem devolução pós compra? Resposta: Sim, 30 dias após a entrega do produto você poderá solicitar a devolução. 2. O frete dos produtos são grátis? Resposta: Apenas para o estado de São Paulo e Goiás. 3. Meu produto chegou danificado, e agora? Resposta: Entre em contato conosco abaixo dessa página e envie-nos um relatório. 4. Posso trocar meu produto? Resposta: Não, apenas solicitar sua devolução e retomar o dinheiro gasto. 5. Qual o prazo de entrega? Resposta: Nossa estimativa geral é de até 15 dias para todo o Brasil. 6. Clientes com carteirinha possuem descontos? Resposta: Sim, até 15% de desconto nas compras. 7. Qual a transportadora dos pedidos? Resposta: Nossa transportadora oficial é a JR Express. 8. É possível rastrear meu pedido? Resposta: Por enquanto não. Mas qualquer anormalidade é informada em seu telefone e e-mail. Fale Conosco. Informe seu problema e suas informações de contato abaixo. Responderemos o mais rápido possível. Nome. Telefone. E-mail. Relate seu problema."); // responsável pelo que vai falar!
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
            <h1 id="title-supProd">Suporte para produtos</h1>
            <p class="parProduSup">Está com dúvidas com seu produto ou com a compra dele? Veja se seu problema se encaixa nas perguntas frequentes abaixo, ou envie para a nossa equipe de suporte que lhe responderá em até 48 horas.</p>
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
                <label class="lblSup" for="emailSup">E-mail: </label><input placeholder="ex: marcos.antonio@email.com" type="email" name="emailSup" id="emailSup" class="inputSup"><br><br>
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