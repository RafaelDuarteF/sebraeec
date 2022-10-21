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
				<p class="text-bochaPag"><b>Bocha</b><br><br>
				<p class="text-bochaPag"><b>O que é?</b></p>
				<p class="text-bochaPag"><br>
					&nbsp A modalidade Bocha abrange conhecimentos em concentração, habilidade e coordenação, ela é muito conhecida por ser um esporte de precisão que também abre portas á pessoas e jogadores com grau severo de comprometimento motor e/ou múltiplo e está em mais de 50 países em todo o mundo. A maioria das pessoas que praticam este esporte é composto pelos idosos, mas o quadro vem mudando nos últimos anos com a adesão de jovens ao esporte. Normalmente, é disputado em campeonatos em quadras que possuem uma superfície lisa, onde permitem o lançamento das bolas denominadas “bochas”, sendo elas de madeira ou resina sintética, tendo como alvo uma bola menor chamada “bolim”. Este esporte tem uma relação com a inclusão, visto que é muito praticado nas Paraolimpíadas. 
				</p><br><br>
				<p class="text-bochaPag"><b>Origem</b></p>
				<p class="text-bochaPag"><br>
					&nbsp A origem da Bocha vem com a sua fama de jogo da terceira idade, mas acredita-se que esse esporte tenha surgido entre 3 mil e 4 mil a.C. e, há séculos, é disputado no mundo todo. Existem algumas especulações de que esse esporte tenha sido praticado no Antigo Egito e na Antiga Grécia, em que se usavam objetos de formatos esféricos, ou seja, pedras redondas e tornou-se um esporte na Itália, em seu período imperial, onde era conhecida por “bocce” e era praticado no gramado. 
					No início do século XVI o esporte começou a ficar famoso entre países da Europa, dentre esses: Portugal, Inglaterra, França e Espanha. Porém, o esporte só foi chegar ao Brasil em meados do século XX, com a chegada dos italianos no Rio Grande do Sul, a modalidade conseguiu ser reconhecida como esporte pela Confederação Brasileira de Desporto (CBD) em 1943. O primeiro Campeonato Mundial de Bocha aconteceu em 1983 e, na ocasião, representantes de 13 países, incluindo o Brasil, decidiram criar a CBI (Confederação Internacional de Bocha).
				</p><br><br>
				<p class="text-bochaPag"><b>Como jogar</b></p>
				<p class="text-bochaPag"><br>
					&nbsp A Bocha pode ser jogada por qualquer pessoa, pode ser jogada individualmente, em duplas ou em equipes de até 4 pessoas, e é mista. Ele é jogado entre duas pessoas ou duas equipes, cada jogador recebe quatro bochas (bolas) para lançar durante a partida, ou seja, duas para cada jogador. O objetivo do jogo é o mesmo, arremessar as bolas coloridas o mais perto da bola branca (jack ou bolim) sendo ele previamente lançado ou para afastar a bocha de seu oponente. O adversário por sua vez, tentará situar as suas bolas mais perto ainda do bolim. Pontua a equipe que tiver a bocha mais próxima do bolim. As partidas acabam com de 11 a 15 pontos, dependendo da regra do campeonato.
				</p><br><br>
				<p class="text-bochaPag"><b>Bocha Paraolímpica</b></p>
				<p class="text-bochaPag"><br>
					&nbsp Na Bocha paraolímpica, é permitido usar as mãos, os pés, possíveis instrumentos de auxílio, como rampa para lançar as bochas e em alguns casos até ajudantes (colheiros) para fazer os lançamentos. Nesse caso seria especificamente para atletas com deficiências mais graves. A modalidade faz parte dos Jogos Paralímpicos desde 1984, os atletas na época ficavam em cadeiras de roda e em um espaço limitado. 
					Na classificação funcional atual, os atletas de bocha são divididos em 3 tipos de eventos: individual, dupla ou equipe, nas categorias masculina e feminina. Os atletas também divididos em quatro classes de acordo com suas deficiências e necessidades, são classificados em BC1, BC2, BC3 e BC4, estas são apresentadas abaixo:<br>
					<b>Na classe BC1</b>, está direcionada a apenas para atletas PC, que podem jogar com as mãos ou com os pés e é permitido a opção do auxílio de ajudantes, podendo realizar o ajuste ou a estabilização da cadeira do atleta e entregar a bola;<br>
					<b>Na classe BC2</b>, está relacionado a atletas em quadro de paralisia cerebral, mas não é permitido nenhum tipo de assistência e um suporte ou cesto para bola pode ser adaptado;<br>
					<b>Na classe BC3</b>, são atletas com deficiências mais severas, com maior grau de comprometimento motor, permitindo assim a utilização de ferramentas de auxílio e colheiros que tem a função de direcionar a calha seguindo exatamente as indicações do atleta;<br>
					<b>Na classe BC4</b>, possuem atletas com deficiências mais severas com qualquer outro quadro de origem não cerebral, como distrofia muscular progressiva, esclerose múltipla, lesão medular com tetraplegia, etc., porém, não recebem nenhum tipo de assistência. 

				</p><br><br>
				<p class="text-bochaPag"><b>Campo, equipamentos e regras</b></p>
				<p class="text-bochaPag"><br>
					&nbsp Um dos equipamentos mais usados nesta modalidade são as bochas e o bolim, no total são 13, sendo seis azuis, seis vermelhas e uma branca, todas elas são confeccionadas com fibra sintética e pesam cerca de 280g. As bochas têm entre 112 mm e 115 mm de diâmetro e pesam entre 1,05 kg e 1,15 kg. O bolim tem 45 mm e pesa de 45 g a 65 g.
					Vale ressaltar que as bochas são os únicos equipamentos utilizados nessa modalidade, além do espaço retangular adequado para jogá-las. O espaço retangular utilizado para a realização dos jogos é chamado de cancha-padrão (sintética) que possui um comprimento de 24 m x 4 m. 
					Na Bocha Paraolímpica, a quadra contém um comprimento de 12,5 m x 6 m. Os atletas ficam em uma área de lançamento dividida em 6 casas. As bolas possuem o peso de 275 g, contêm uma circunferência de 270 mm e são feitas de vinil, poliuretano, couro, couro sintético, camurça ou de outro material semelhante a estes.

					Basicamente, a modalidade Bocha são jogos amistosos, de intercâmbios, campeonatos abertos e internos. Precisam de habilidade e eficiência, além, é claro, de suas técnicas e táticas adequadas. Com disto dito, visite a nossa programação em nosso clube e tenha acesso às informações e horários da modalidade. Seja um de nossos atletas, participe e venha com a família ou amigos e se divirta com gente.


				</p>
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