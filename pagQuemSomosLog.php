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
						var utter = new SpeechSynthesisUtterance("QUEM SOMOS? DESENVOLVEDORES DO PROJETO. Equipes. Análise e Projeto de Sistemas. Componentes do subgrupo da documentação: Rafael Duarte, Pedro Henrique Constantino, Mariana Oliveira, Vinicius Oliveira e Marcos Murilla. Componentes do subgrupo do levantamento e análise de requisitos: Caio Stefanoni, Maria Eduarda, Murilo dos Santos, Nicole Tunes, Raissa Marinho e Vinicius Cordeiro. Componentes geral do grupo de Análise e Projeto de Sistemas: Caio Stefanoni, Marcos Vinicius, Maria Eduarda, Mariana Oliveira, Murilo dos Santos, Nicole Tunes, Pedro Henrique Constantino, Rafael Duarte, Raissa Marinho, Vinicius Cordeiro e Vinicius Oliveira. Banco de Dados. Componentes do subgrupo de Interpretação: Isabelly Marcondes, Jonathan Andrade, Luiz Henrique e Juan Canuto. Componentes do subgrupo de Comunicação/Documentação: Isabella Freitas, Kaio Santana, Júlia Maria e João Victor. Componentes do subgrupo de Desenvolvimento do DER: Lhivya Lima, Gustavo Saraiva, Leticia Tierno e Igor Brisola. Componentes geral do grupo de Banco de Dados: Isabelly Marcondes, Jonathan Andrade, Luiz Henrique, Juan Canuto, Isabella Freitas, Kaio Santana, Júlia Maria, João Victor, Lhivya Lima, Gustavo Saraiva, Leticia Tierno e Igor Brisola. Design Digital. Componentes geral do grupo de Design Digital: Isabella Freitas, Giulia Vasconcelos, Mariana Oliveira, Pedro Henrique Constantino, Vinicius Cordeiro e Betsabe Aparecida. Programação Web. Componentes do subgrupo de design: Giulia Vasconcelos, Betsabe Aparecida, Gabriel Leal e Gabriel Cerejo. Componentes do subgrupo de programação: Amanda Alcântara, Erick de Ângelo, Emilly Lourenço, Henrique de Ângelo, Caio Stefanoni e Rafael Duarte. Componentes do subgrupo de documentação: Ana Caroline, Gabriel Hiroshi, Isabella Freitas, Bernnardo Francisco e André Fernandes. Componentes geral do grupo de Programação Web: Giulia Vasconcelos, Betsabe Aparecida, Gabriel Leal, Gabriel Cerejo, Amanda Alcântara, Erick de Ângelo, Emilly Lourenço, Henrique de Ângelo, Bernnardo Francisco, Ana Caroline, Gabriel Hirosh, Rafael Duarte, Caio Stefanoni, Isabella Freitas e André Fernandes. Técnicas de Programação de Algoritmos. Componentes do subgrupo de interpretação: Juan Canuto, Kaio Santana e João Victor. Componentes do subgrupo de documentação: Isabella Freitas, Júlia Maria e Igor Brisola. Componentes do subgrupo de programação: Lhivya Lima, Gustavo Saraiva, Leticia Tierno, Luiz Henrique e Isabelly Marcondes. Componentes geral do grupo de Técnicas de Programação de Algoritmos: Isabelly Marcondes, Jonathan Andrade, Luiz Henrique, Juan Canuto, Isabella Freitas, Kaio Santana, Júlia Maria, João Victor, Lhivya Lima, Gustavo Saraiva, Leticia Tierno e Igor Brisola. (ESC)"); // responsável pelo que vai falar!
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
		<div id="title-qSomos-div"> 
			<div id="title-qSomos">Quem somos?</div>
		</div>
			<div class="body-parts-qSomos" id="one-body-part-qSomos"> <!-- Primeira partição do corpo da página. -->
				<h3 class="text-title-qSomos"><br>Desenvolvedores do projeto</h3>
				<div class="devs-projeto">
					<div id="rafael-foto" class="fotos"><img src="img/participantes/rafael_duarte.png"></div>
					<p class="nome-devs">Rafael Duarte de Freitas</p>
					<p class="texts-devs">Análise e Projeto de Sistemas & Programação Web</p>
				</div>
				<div class="devs-projeto">
					<div id="pedro-foto" class="fotos"><img src="img/participantes/pedro_henrique.jpg"></div>
					<p class="nome-devs">Pedro Henrique Constantino</p>
					<p class="texts-devs">Análise e Projeto de Sistemas & Design Digital</p>
				</div>
				<div class="devs-projeto">
					<div id="jonathan-foto" class="fotos"><img src="img/participantes/jonathan_matos.jpg"></div>
					<p class="nome-devs">Jonathan Matos Andrade </p>
					<p class="texts-devs">Banco de Dados & Técnicas de Progração de Algortimos</p>
				</div>
				<div class="devs-projeto">
					<div id="mariana-foto" class="fotos"><img src="img/participantes/mariana_oliveira.jpg"></div>
					<p class="nome-devs">Mariana Oliveira de Castro</p>
					<p class="texts-devs">Análise e Projeto de Sistemas & Design Digital</p>
				</div>
				<div class="devs-projeto">
					<div id="lhivya-foto" class="fotos"><img src="img/participantes/lhivya_macedo.jpg"></div>
					<p class="nome-devs">Lhivya Macedo de Lima</p>
					<p class="texts-devs">Banco de Dados & Técnicas de Progração de Algortimos</p>
				</div>
				<div class="devs-projeto">
					<div id="isabella-foto" class="fotos"><img src="img/participantes/isabella_freitas.jpg"></div>
					<p class="nome-devs">Isabella Freitas Ribeiro</p>
					<p class="texts-devs">Banco de Dados & Técnicas de Progração de Algortimos<br>Programação Web & Design Digital</p>
				</div>
				<div class="devs-projeto">
					<div id="giulia-foto" class="fotos"><img src="img/participantes/giulia_vasconcelos.jpg"></div>
					<p class="nome-devs">Giulia Vasconcelos Ferreira</p>
					<p class="texts-devs">Programação Web</p>
				</div>
				<div class="devs-projeto">
					<div id="maria-foto" class="fotos"><img src="img/participantes/maria_eduarda.jpg"></div>
					<p class="nome-devs">Maria Eduarda de Araújo Silva</p>
					<p class="texts-devs">Análise e Projeto de Sistemas</p>
				</div>
				<div class="devs-projeto">
					<div id="raissa-foto" class="fotos"><img src="img/participantes/raissa_marinho.jpg"></div>
					<p class="nome-devs">Raissa Marinho Aguiar</p>
					<p class="texts-devs">Análise e Projeto de Sistemas</p>
				</div>
				<div class="devs-projeto">
					<div id="leticia-foto" class="fotos"><img src="img/participantes/leticia_tierno.jpg"></div>
					<p class="nome-devs">Leticia Tierno Firmino</p>
					<p class="texts-devs">Banco de Dados & Técnicas de Progração de Algortimos</p>
				</div>
				<div class="devs-projeto">
					<div id="betsabe-foto" class="fotos"><img src="img/participantes/betsabe_aparecida.jpg"></div>
					<p class="nome-devs">Betsabe Aparecida Jorge Ylla</p>
					<p class="texts-devs">Programação Web</p>
				</div>
				<div class="devs-projeto">
					<div id="nicole-foto" class="fotos"><img src="img/participantes/nicole_tunes.jpg"></div>
					<p class="nome-devs">Nicole Tunes de Medeiros</p>
					<p class="texts-devs">Análise e Projeto de Sistemas</p>
				</div>
				<div class="devs-projeto">
					<div id="marcos-foto" class="fotos"><img src="img/participantes/marcos_vinicius.jpg"></div>
					<p class="nome-devs">Marcos Vinicius Murilla</p>
					<p class="texts-devs">Análise e Projeto de Sistemas</p>
				</div>
				<div class="devs-projeto">
					<div id="gabriel_cerejo-foto" class="fotos"><img src="img/participantes/gabriel_cerejo.jpg"></div>
					<p class="nome-devs">Gabriel Cerejo Bellintani</p>
					<p class="texts-devs">Programação Web</p>
				</div>
				<div class="devs-projeto">
					<div id="emilly-foto" class="fotos"><img src="img/participantes/emilly_lourenco.jpg"></div>
					<p class="nome-devs">Emilly Lourenço da Silva</p>
					<p class="texts-devs">Programação Web</p>
				</div>
				<div class="devs-projeto">
					<div id="gabriel_hiroshi-foto" class="fotos"><img src="img/participantes/gabriel_hiroshi.jpg"></div>
					<p class="nome-devs">Gabriel Hiroshi Imanisi</p>
					<p class="texts-devs">Programação Web</p>
				</div>
				<div class="devs-projeto">
					<div id="gabriel_leal-foto" class="fotos"><img src="img/participantes/gabriel_leal.jpg"></div>
					<p class="nome-devs">Gabriel Leal Bonfim</p>
					<p class="texts-devs">Programação Web</p>
				</div>
				<div class="devs-projeto">
					<div id="isabelly-foto" class="fotos"><img src="img/participantes/isabelly_marcondes.jpg"></div>
					<p class="nome-devs">Isabelly Marcondes Mendes Costa</p>
					<p class="texts-devs">Banco de Dados & Técnicas de Progração de Algortimos</p>
				</div>
				<div class="devs-projeto">
					<div id="erick-foto" class="fotos"><img src="img/participantes/erick_angelo.jpg"></div>
					<p class="nome-devs">Erick de Ângelo Silva</p>
					<p class="texts-devs">Programação Web</p>
				</div>
				<div class="devs-projeto">
					<div id="henrique-foto" class="fotos"><img src="img/participantes/henrique_angelo.jpg"></div>
					<p class="nome-devs">Henrique de Ângelo</p>
					<p class="texts-devs">Programação Web</p>
				</div>
				<div class="devs-projeto">
					<div id="gustavo-foto" class="fotos"><img src="img/participantes/gustavo_saraiva.jpg"></div>
					<p class="nome-devs">Gustavo Saraiva Silva</p>
					<p class="texts-devs">Banco de Dados & Técnicas de Progração de Algortimos</p>
				</div>
				<div class="devs-projeto">
					<div id="caio-foto" class="fotos"><img src="img/participantes/caio_stefanoni.jpg"></div>
					<p class="nome-devs">Caio Stefanoni Domingos</p>
					<p class="texts-devs">Análise e Projeto de Sistemas & Programação Web</p>
				</div>
				<div class="devs-projeto">
					<div id="caio-foto" class="fotos"><img src="img/participantes/bernnardo_francisco.png"></div>
					<p class="nome-devs">Bernnardo Francisco de Oliveira Silva</p>
					<p class="texts-devs">Programação Web</p>
				</div>
				<div class="devs-projeto">
					<div id="ana-foto" class="fotos"><img src="img/participantes/ana_caroline.png"></div>
					<p class="nome-devs">Ana Caroline de Oliveira Ribeiro</p>
					<p class="texts-devs">Programação Web</p>
				</div>
				<div class="devs-projeto">
					<div id="igor-foto" class="fotos"><img src="img/participantes/igor_rodrigues.png"></div>
					<p class="nome-devs">Igor Rodrigues Brizola</p>
					<p class="texts-devs">Banco de Dados & Técnicas de Progração de Algortimos</p>
				</div>
				<div class="devs-projeto">
					<div id="vinicius_oliveira-foto" class="fotos"><img src="img/participantes/vinicius_oliveira.png"></div>
					<p class="nome-devs">Vinicius Oliveira Alexandre</p>
					<p class="texts-devs">Análise e Projeto de Sistemas</p>
				</div>
				<div class="devs-projeto">
					<div id="andre-foto" class="fotos"><img src="img/participantes/andre_fernandes.png"></div>
					<p class="nome-devs">André Fernardes de Araújo</p>
					<p class="texts-devs">Programação Web</p>
				</div>
				<div class="devs-projeto">
					<div id="amanda-foto" class="fotos"><img src="img/participantes/amanda_alcantara.png"></div>
					<p class="nome-devs">Amanda Alcântara da Silva</p>
					<p class="texts-devs">Análise e Projeto de Sistemas & Programação Web</p>
				</div>
				<div class="devs-projeto">
					<div id="juan-foto" class="fotos"><img src="img/participantes/juan_canuto.jpg"></div>
					<p class="nome-devs">Juan Canuto Ramos Machado</p>
					<p class="texts-devs">Banco de Dados & Técnicas de Progração de Algortimos</p>
				</div>
				<div class="devs-projeto">
					<div id="luiz-foto" class="fotos"><img src="img/participantes/luiz_henrique.png"></div>
					<p class="nome-devs">Luiz Henrique Vieira Santos</p>
					<p class="texts-devs">Banco de Dados & Técnicas de Progração de Algortimos</p>
				</div>
			</div>
			<div id="second-body-part-qSomos">
				<h3>Equipes</h3>
				<br><br>
				<p class="text-equipes"><b>Análise e Projeto de Sistemas</b></p><br>
				<p class="text-equipes">Componentes do subgrupo da documentação: Rafael Duarte, Pedro Henrique Constantino, Mariana Oliveira, Vinicius Oliveira e Marcos Murilla.</p>
				<p class="text-equipes">Componentes do subgrupo do levantamento e análise de requisitos: Caio Stefanoni, Maria Eduarda, Murilo dos Santos, Nicole Tunes, Raissa Marinho e Vinicius Cordeiro.</p>
				<p class="text-equipes">Componentes geral do grupo de Análise e Projeto de Sistemas: Caio Stefanoni, Marcos Vinicius, Maria Eduarda, Mariana Oliveira, Murilo dos Santos, Nicole Tunes, Pedro Henrique Constantino, Rafael Duarte, Raissa Marinho, Vinicius Cordeiro e Vinicius Oliveira.</p>
				<br><br>
				<p class="text-equipes"><b>Banco de Dados</b></p><br>
				<p class="text-equipes">Componentes do subgrupo de Interpretação: Isabelly Marcondes, Jonathan Andrade, Luiz Henrique e Juan Canuto.</p>
				<p class="text-equipes">Componentes do subgrupo de Comunicação/Documentação: Isabella Freitas, Kaio Santana, Júlia Maria e João Victor.</p>
				<p class="text-equipes">Componentes do subgrupo de Desenvolvimento do DER: Lhivya Lima, Gustavo Saraiva, Leticia Tierno e Igor Brisola.</p>
				<p class="text-equipes">Componentes geral do grupo de Banco de Dados: Isabelly Marcondes, Jonathan Andrade, Luiz Henrique, Juan Canuto, Isabella Freitas, Kaio Santana, Júlia Maria, João Victor, Lhivya Lima, Gustavo Saraiva, Leticia Tierno e Igor Brisola.</p>
				<br><br>
				<p class="text-equipes"><b>Design Digital</b></p><br>
				<p class="text-equipes">Componentes geral do grupo de Design Digital: Isabella Freitas, Giulia Vasconcelos, Mariana Oliveira, Pedro Henrique Constantino, Vinicius Cordeiro e Betsabe Aparecida.</p>
				<br><br>
				<p class="text-equipes"><b>Programação Web</b></p><br>
				<p class="text-equipes">Componentes do subgrupo de design: Giulia Vasconcelos, Betsabe Aparecida, Gabriel Leal e Gabriel Cerejo.</p>
				<p class="text-equipes">Componentes do subgrupo de programação: Amanda Alcântara, Erick de Ângelo, Emilly Lourenço, Henrique de Ângelo, Caio Stefanoni e Rafael Duarte.</p>
				<p class="text-equipes">Componentes do subgrupo de documentação: Ana Caroline, Gabriel Hiroshi, Isabella Freitas, Bernnardo Francisco e André Fernandes.</p>
				<p class="text-equipes">Componentes geral do grupo de Programação Web: Giulia Vasconcelos, Betsabe Aparecida, Gabriel Leal, Gabriel Cerejo, Amanda Alcântara, Erick de Ângelo, Emilly Lourenço, Henrique de Ângelo, Bernnardo Francisco, Ana Caroline, Gabriel Hirosh, Rafael Duarte, Caio Stefanoni, Isabella Freitas e André Fernandes.</p>
				<br><br>
				<p class="text-equipes"><b>Técnicas de Programação de Algoritmos</b></p><br>
				<p class="text-equipes">Componentes do subgrupo de interpretação: Juan Canuto, Kaio Santana e João Victor.</p>
				<p class="text-equipes">Componentes do subgrupo de documentação: Isabella Freitas, Júlia Maria e Igor Brisola.</p>
				<p class="text-equipes">Componentes do subgrupo de programação: Lhivya Lima, Gustavo Saraiva, Leticia Tierno, Luiz Henrique e Isabelly Marcondes.</p>
				<p class="text-equipes">Componentes geral do grupo de Técnicas de Programação de Algoritmos: Isabelly Marcondes, Jonathan Andrade, Luiz Henrique, Juan Canuto, Isabella Freitas, Kaio Santana, Júlia Maria, João Victor, Lhivya Lima, Gustavo Saraiva, Leticia Tierno e Igor Brisola.</p>
				<br><br>
			</div>
		<?php require_once("footer.inc.php"); ?>
		<script>
			synth.cancel();
			click = false;
		</script>
</body>
</html>