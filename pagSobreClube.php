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
						var utter = new SpeechSynthesisUtterance("SEBRAE ESPORTE CLUBE. História do clube. Fundado em 2021, a Sebrae Esporte Clube é um clube acâdemico dedicado profissionalmente aos esportes da bocha e da malha, participando e organizando campeonatos de seus respectivos esportes. A SEC foi fundada pela instituição de ensino ETEC Sebrae, através de um projeto interdisciplinar realizado pelo 1ºano dentro do curso técnico de desenvolvimento de sistemas, interligando as disciplinas técnicas de: Análise e Projeto de Sistemas, Design Digital, Programação Web, Técnicas de Programação de Algoritmos e Banco de Dados. Este projeto semestral tem como objetivo induzir os alunos a sua aplicação do conhecimento teórico obtido durante todo o até então decorrer do curso, visando a busca de soluções para problemas, se organizar em um ambiente de trabalho e o principal, o trabalho em equipe. Portanto, foi solicitado pelos orientadores a construção de um sistema para automação de clube, clube este onde teria seus dois esportes envolvidos: bocha e malha. O objetivo é realizar o desenvolvimento até o prazo solicitado, com toda a documentação do projeto, o produto final e por fim sua apresentação. Notavelmente um projeto que busca a proximidade de trabalho com o que seria então por parte do mundo profissional. Divulgação. Apesar de seu foco nos esportes de bocha e malha, o clube oferece também o seu espaço físico para visitantes com grandes piscinas, restaurantes e campos dos esportes de bocha e malha para jogos, acessível com a realização da carteirinha do clube que pode ser realizada tanto presencialmente, quanto remotamente. Também contamos com produtos personalizados do clube que podem ser adquiridos tanto em nosso clube físico quanto pelo nosso site, na página: www.sec.com/produtos. O clube se encontra aberto de quarta á sexta, dás 9:00 ás 16:00 e de fins de semana, dás 8:00 ás 18:00. Com nosso atendimento na recepção do clube, você pode realizar na hora a carteirinha do clube, ou sanar todas suas duvídas. Você também pode entrar em contato conosco através do número telefone: (11) 8221-9231, ou através de nosso e-mail: sebrae.ec@gmail.com"); // responsável pelo que vai falar!
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
		<div id="slider-sobreClube"><img src="img/sobclube.jpg"></div>
		<div id="one-body-part-sobreClube"> <!-- Primeira partição do corpo da página. -->
			<h2 id="title-pagSobreClube">SEBRAE ESPORTE CLUBE</h2>
			<h3 class="title-sobreClube">História do clube</h3>
			<div class="text-sobreClube" id="text-historia">
				<p>&nbsp A história sobre a nossa entidade Sebrae Esportes Clube começa a partir de sua fundação em 2021, uma época não muito distante, porém, vivendo radicalmente no final de uma grande pandemia, ocasionado no final de 2019. Momento de muita crise para todas as pessoas tanto com a saúde, pois poderia estar comprometendo a vida da pessoa em si, quanto na questão do financeiro, relacionado na questão do desemprego e fechamento de alguns locais de comércio. Em meio de tantos problemas, a dificuldade de saber se seria uma ótima maneira de continuar com a nossa sede diante dessa crise mundial, tornou-se um dilema para nós, porém, não desistimos e continuamos firmes com apoio de nossos colaboradores.<br>
				&nbsp Para introduzirmos sobre a importância e a tradicional história do nosso clube, começamos com a nossa primeira sede localizada em Aruanã, elaborado inicialmente para a organização de campeonatos visando ao entretenimento para a melhor idade, oferecendo duas modalidades esportivas, estas eram Bocha e Malha. Conforme a pandemia foi chegando, cumprimos com todos os protocolos do ministério da saúde, levando em mente a importância da saúde dos nossos frequentadores naquele tempo. Seguindo tudo corretamente, nossa sede não obteve nenhuma propagação do vírus, mas tivemos algumas quedas no setor financeiro, entretanto nós nos renovamos e nos adaptamos a situação sem prejudicar nossos funcionários.<br>
				&nbsp Com o ótimo aproveitamento que tivemos na época, decidimos cria uma outra sede campestre em Goiânia, que atualmente se tornou nossa sede principal. Neste tempo, a normalidade voltou com a segurança da saúde reforçada e abriu possibilidades para construirmos nossa nova sede com vigor. Implementamos novos esportes, novos negócios e novas instalações com novas infraestruturas e automatização. <br>
				&nbsp Para que o nosso novo local fosse um dos maiores clubes da região, nosso presidente aplicou o mesmo método usado em Aruanã, a política de incentivo à adesão de novos associados da entidade, todavia reforçando-a, pois era uma outra sede localizada em uma outra cidade. O resultante de nosso trabalho eficaz para promoção da sede não foi outra, ao não ser, o crescimento de associados que cresce a cada ano. Isto fez com que tivéssemos a ideia de informatizar nossa sede através deste site com a colaboração dos alunos da instituição ETEC SEBRAE que aplicaram seus conhecimentos agregados desde o 1° ano dentro do curso técnico de desenvolvimento de sistemas, interligando as disciplinas técnicas de: Análise e Projeto de Sistemas, Design Digital, Programação Web, Desenvolvimento de Sistemas e Banco de Dados. Chamando-o de Projeto Interdisciplinar.<br>
				&nbsp Este projeto seria demandado como semestral com o intuito de colaborar nos procedimentos de Cadastro dos Associados, Geração, Emissão e Controle de Mensalidades dos Associados, Controle de Entrada, Conta Financeira, Vendas, Controle de Estoque e Campeonatos. Buscando a proximidade de trabalho com o que seria então por parte do mundo profissional e organizar-se em um ambiente de trabalho e principalmente, o trabalho em equipe entre os alunos.<br>
				&nbsp O nosso clube que se designa ao benefício feito especialmente aos nossos clientes e associados que adoram nosso local para lazer ou treino esportivo, participando e colaborando em campeonatos de seus respectivos esportes. Oferecemos vantagens e benefícios para quem quiser conhecer nossas sedes.
				<br></p>
			</div> <!-- Informações sobre a história do clube. -->
			
		</div>
		<div id="second-body-part-sobreClube">
			<h3 class="title-sobreClube">Divulgação</h3>
			<div class="text-sobreClube"  id="text-divulgacao">
			<p>&nbsp Os nossos clubes oferecem também o seu espaço físico em torno de 5.000m² de área que é utilizada como área de lazer por todos os nossos associados com grandes piscinas, restaurantes e campos para diversas modalidades e exaltando a bocha e a malha, acessível com a realização da carteirinha do clube que pode ser realizada tanto presencialmente, quanto remotamente. Também contamos com produtos personalizados do clube que podem ser adquiridos tanto em nosso clube físico quanto pelo nosso site, na página: <a href="pagProdutos.php">ww.sec.com/produtos.</a><br>
			&nbsp O clube encontra-se aberto de quarta à sexta, das 09hs às 16hs, aos fins de semana, das 08hs às 18hs e feriados das 10hs às 16hs. Com nosso atendimento na recepção ou atendimento virtual do clube, você pode realizar na hora a carteirinha do clube, ou sanar todas suas dúvidas. Você também pode entrar em contato conosco através do número telefone: (11) 8221-9231, ou com o nosso amigo TucanoWeb ou através de nosso e-mail: <a href="">sebrae.ec@gmail.com</a>.</p>
			</div> <!-- Informações sobre divulgação. -->
			<img src="img/piscina.jpeg" title="Piscina do clube">
			<img src="img/espaco_clube.jpg" title="Área do clube">

		</div>
		<?php require_once("footer.inc.php"); ?>
		<script>
			synth.cancel();
			click = false;
		</script>
</body>
</body>
</html>