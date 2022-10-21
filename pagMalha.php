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
				<p class="text-bochaPag"><b>Malha</b><br><br>
				<p class="text-bochaPag"><b>O que é?</b></p>
				<p class="text-bochaPag"><br>
					&nbsp A modalidade Malha, conhecido também como jogo do fito, é extremamente similar ao jogo de Bocha, exige treinamento e muita concentração, entretanto o objetivo deste esporte consiste em arremessar um disco de metal (malha) no intuito de derrubar ou deixar próximo ao um pino sem que o disco toque nas paredes que delimitam o campo, este disco é muitas vezes feito de madeira e possui uma circunferência demarcada por um giz, ou muitas das vezes um pedaço de tijolo. Esta modalidade pode ser praticada de forma individual, em duplas, em quartetos ou turma. Cada membro do time fica em uma ponta do campo (a cabeceira). A maioria dos jogadores de malha é formada por idosos, porém, também está sendo adotado pelos jovens. 
				</p><br><br>
				<p class="text-bochaPag"><b>Origem</b></p>
				<p class="text-bochaPag"><br>
					&nbsp Assim como o jogo de bocha, a malha é um jogo muito antigo e que não possui uma origem bem definida, o esporte, ou pelo menos modelos de jogo parecidos com o que hoje chamamos de malha, são conhecidos desde a época do império romano. Sua prática foi relatada desde que começaram a ferrar os cavalos do exército romano. Para ocupar-se nas horas de lazer nos acampamentos, os soldados tiveram a ideia de aproveitar as ferraduras imprestáveis de seus cavalos e os atiravam contra as estacas. Com o tempo ela difundiu-se por toda a Europa sendo introduzido mais amplamente pelos colonizadores ingleses. O seu objetivo inicial era de laçar a ferradura na estaca ou deixar a ferradura o mais perto possível da mesma. Assim, acabou organizando-se como uma atividade esportiva.
					Acredita-se que este esporte era praticado na França e Itália, por volta de 1490. Porém, a prova da existência desse esporte vem de um documento francês de 1644. Em Portugal, esse esporte ficou muito conhecido, era praticado em forma de arremesso de ferraduras. Esse possuía alguns nomes, como “Chinquilho” e “jogo do fito”. Já no Brasil, não se sabe ao certo quem trouxe para cá, mas acredita-se que tenham sido os portugueses, que trouxeram o jogo do fito e esse sofreu alterações, cujo os documentos apontam que no período colonial jogava-se malha em todo o país.
					O esporte era muito praticado em São Paulo, na região central foi a que recebeu as primeiras disputas da malha, desde o final do século IX. Os trabalhadores em horário de descanso ou após o trabalho improvisavam com pedaços de pedras e chapas de metal, para jogar como as malhas e se divertiam derrubando os pinos. Com isto, a Federação Paulista de Malha foi fundada em 1933 e desde então é quem organiza os campeonatos na capital paulista.
					Atualmente em nosso país a modalidade Malha é praticada com mais intensidade que qualquer outro país do mundo tendo uma organização própria da Confederação Brasileira de Malha (CBM), que promovem os campeonatos regionais, estaduais e a nível nacional, como a Taça Brasil e o Campeonato Brasileiro.
				</p><br><br>

				<p class="text-bochaPag"><b>Como jogar e regras</b></p>
				<p class="text-bochaPag"><br>
					&nbsp A Malha pode ser jogada por equipes de forma, individual, em duplas e em quartetos ou turmas, como dissemos anteriormente, porém, caso a disputa da partida for individual, cada jogador ficará em uma só ponta da cabeceira (campo), havendo troca de cabeceira até o término da jogada, serão efetuadas 6 jogadas completas com arremessos de duas malhas em cada cabeceira num total de 24 malhas por cada atleta. Se a partida for em dupla, os parceiros iram colocam-se em cada ponta da cabeceira, de modo que fiquem lado a lado com o adversário, ou se for jogado em quarteto ou turma, os parceiros colocam-se em duplas em cada cabeceira, juntamente com a dupla adversária, nas três maneiras serão efetuadas em 12 jogadas completas de 24 malhas por atleta.
					A equipe que mais acerta, ou que consegue deixar a malha mais perto dos pinos, vence. Cada arremesso certo conta com quatro pontos, para o arremesso, o atleta tem um espaço de 2 metros para se movimentar e lançar a malha, caso ultrapasse o limite (linha demarcatória), o arremesso será cancelado. Cada acerto no pino garante a equipe 4 pontos e a malha que mais se aproximar do pino, sem derrubá-lo, garante 2 pontos. Os jogos terminam quando um dos times alcançar 30 pontos, mas essa regra depende de cada campeonato, podendo também ser 24 a pontuação total, para verificação dos pontos há juízes arbitrando os jogos nas laterais da cabeceira.
					A jogada em uma cabeceira será considerada completa quando todos os jogadores tiverem efetuado seus arremessos de um dos lados do campo, porém a jogada será completa totalmente, quando todos jogadores de uma e de outra cabeceira tiverem arremessado suas respectivas malhas.
				</p><br><br>
				<p class="text-bochaPag"><b>Campo e equipamentos</b></p>
				<p class="text-bochaPag"><br>
					&nbsp Um dos equipamentos usados neste esporte é a malha, um disco de aço que pesa de 600 a 800 gramas, tem um diâmetro de 9 centímetros a 11 centímetros e contém uma espessura do centro de 135 milímetros aproximadamente. O outro equipamento é os pinos, que podem ser de madeira ou material plástico, cilíndrico e cônico com a ponta arredondada, tendo um comprimento total de 18 centímetros, diâmetro de 3 centímetros, o comprimento da parte cilíndrica com 13 centímetros a partir da base, o comprimento cônico de 5 centímetros partindo da parte superior da parte cilíndrica até o limite superior total do pino e o raio da ponta com 2,5 milímetros.
					O campo do esporte que ocorre a partida contém um comprimento no mínimo total na parte externa de 40,20 metros, sendo ele retangular, a distância de pino a pino é de 34,30 metros e a largura 2 metros, na parte interna para o arremesso do atleta o espaço terá o comprimento mínimo de 2,50 e o comprimento de 36 metros exatamente.
				</p><br>
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