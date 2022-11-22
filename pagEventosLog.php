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
	<img src="img/balao3.png" class="balao">
	<img src="img/mascote.png?<?php echo time(); ?>" id="acessImg">
</div>
		<script>
			click = false;
			document.querySelector('html').addEventListener('keydown', () => {
 
				var tecla = event.keyCode;
		
				if(tecla == 27) {
					if(click == false){
						var utter = new SpeechSynthesisUtterance("Calendário sobre os nossos eventos. 5 de novembro. Torneio de Malha. Às 14 horas do dia 05, na quadra de número 3, estará ocorrendo o nosso quarto Torneio de Malha. O vencedor ganhará um prêmio em dinheiro e uma cesta de doces! 10 de novembro. Campeonato de Bocha. No dia 10, às 16 horas, ocorrerá o Campeonato de Bocha na quadra 1. O vencedor do Campeonato ganhará um prêmio em dinheiro e alguns brindes do clube. Dia 25 de Novembro. Campeonato de natação. Dia 25, às 11 horas, acontecerá o Campeonato de Natação no andar 4 do prédio. Os vencedores serão classificados para uma próxima competição, onde o vencedor ganhará um prêmio em dinheiro."); // responsável pelo que vai falar!
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
		<br><br>
		<h2 id="calendar">Calendário sobre os nossos eventos</h2>
		<br><br>
	<table id="tableEv" cellspacing="0" cellpadding="20">
	    <tbody>
		    <tr>
		        <td colspan="7" id="month">Novembro 2022</td>
		    </tr>
			<tr>
			    <td colspan="1" class="weekdays">Dom</td>
				<td colspan="1" class="weekdays">Seg</td>
				<td colspan="1" class="weekdays">Ter</td>
				<td colspan="1" class="weekdays">Qua</td>
				<td colspan="1" class="weekdays">Qui</td>
				<td colspan="1" class="weekdays">Sex</td>
				<td colspan="1" class="weekdays">Sab</td>
			</tr>
			<tr>
			    <td colspan="1" class="days"></td>
				<td colspan="1" class="days">1</td>
				<td colspan="1" class="days1" title="Dia de Finados">2</td>
				<td colspan="1" class="days">3</td>
				<td colspan="1" class="days">4</td>
				<td colspan="1" class="champ">5</td>
				<td colspan="1" class="days">6</td>
			</tr>
			<tr>
				<td colspan="1" class="days">7</td>
				<td colspan="1" class="days">8</td>
				<td colspan="1" class="days">9</td>
				<td colspan="1" class="champ">10</td>
				<td colspan="1" class="days">11</td>
				<td colspan="1" class="days">12</td>
				<td colspan="1" class="days">13</td>
			</tr>
			<tr>
				<td colspan="1" class="days">14</td>
				<td colspan="1" class="days1" title="Dia da Proclamação da República">15</td>
				<td colspan="1" class="days">16</td>
				<td colspan="1" class="days">17</td>
				<td colspan="1" class="days">18</td>
				<td colspan="1" class="days">19</td>
				<td colspan="1" class="days1" title="Dia da Consciência Negra">20</td>
			</tr>
			<tr>
				<td colspan="1" class="days">21</td>
				<td colspan="1" class="days">22</td>
				<td colspan="1" class="days">23</td>
				<td colspan="1" class="days">24</td>
				<td colspan="1" class="champ">25</td>
				<td colspan="1" class="days">26</td>
				<td colspan="1" class="days">27</td>
			</tr>
			<tr>
				<td colspan="1" class="days">28</td>
				<td colspan="1" class="days">29</td>
				<td colspan="1" class="days">30</td>
				<td colspan="4" class="days"></td>
			</tr>
		</tbody>
	</table>
		<p id="date"></p>
		<br><br>
		<div id="events-information">
			<div><img class="novdays" src="img/nov5.png"></div>
			<div class="descEvent">
			    <h2 class="titleDesc">Torneio de Malha</h2>
				<p class="subTitleDesc">Às 14 horas do dia 05, na quadra de número 3, estará ocorrendo o nosso quarto Torneio de Malha. O vencedor ganhará um prêmio em dinheiro e uma cesta de doces!</p>
			</div>
			<div><img class="novdays" src="img/nov10.png"></div>
			<div class="descEvent">
			    <h2 class="titleDesc">Campeonato de Bocha</h2>
				<p class="subTitleDesc">No dia 10, às 16 horas, ocorrerá o Campeonato de Bocha na quadra 1. O vencedor do Campeonato ganhará um prêmio em dinheiro e alguns brindes do clube.</p>
			</div>
			<div><img id="nov25" class="novdays" src="img/nov25.png"></div>
			<div class="descEvent">
			    <h2 class="titleDesc">Campeonato de Natação</h2>
				<p class="subTitleDesc">Dia 25, às 11 horas, acontecerá o Campeonato de Natação no andar 4 do prédio. Os vencedores serão classificados para uma próxima competição, onde o vencedor ganhará um prêmio em dinheiro.</p>
			</div>
		</div>
		<br><br><br>
		<?php require_once("footer.inc.php"); ?>
	<script>
		// DATA PÁGINA DO CALÉNDARIO DO CLUBE

		setDate()
		let interval = setInterval(setDate, 1000); //Seta o intervalo de tempo para executar a função em milisegundos (1000 = 1 segundo)
		function setDate() { 
		    const now = new Date(); 
		    const seconds = now.getSeconds();
		    const minutes = now.getMinutes();
		    const hour = now.getHours();
		    const weekDay = now.getDay();
		    const monthDay = now.getDate();
		   	const monthYear = now.getMonth()
		   	const year = now.getFullYear();

		    switch (weekDay) {
		    case  0:
		        document.getElementById("date").innerHTML = "Domingo, " + monthDay + "/" + monthYear + "/" + year + "<br>" + hour + ":" + minutes + ":" + seconds; //(Domingo = 0) em getDay().
		        break;
		    case  1:
		        document.getElementById("date").innerHTML = "Segunda, " + monthDay + "/" + monthYear+ "/" + year + "<br>" + hour + ":" + minutes + ":" + seconds; //(Segunda = 1) em getDay().
		        break;
		    case  2:
		        document.getElementById("date").innerHTML = "Terça, " + monthDay + "/" + monthYear + "/" + year + "<br>" + hour + ":" + minutes + ":" + seconds; //(Terça = 2) em getDay().
		        break;
		    case  3:
		        document.getElementById("date").innerHTML = "Quarta, " + monthDay + "/" + monthYear + "/" + year + "<br>" + hour + ":" + minutes + ":" + seconds; //(Quarta = 3) em getDay().
		        break;
		    case  4: 
		        document.getElementById("date").innerHTML = "Quinta, " + monthDay + "/" + monthYear + "/" + year + "<br>" + hour + ":" + minutes + ":" + seconds; //(Quinta = 4) em getDay().
		        break;
		    case  5:
		        document.getElementById("date").innerHTML = "Sexta, " + monthDay + "/" + monthYear + "/" + year + "<br>" + hour + ":" + minutes + ":" + seconds; //(Sexta = 5) em getDay().
		        break;
		    case  6:
		        document.getElementById("date").innerHTML = "Sábado, " + monthDay + "/" + monthYear + "/" + year + "<br>" + hour + ":" + minutes + ":" + seconds; //(Sábado = 6) em getDay().
		        break; 
			}    
		}  
	</script>
	<script>
		synth.cancel();
		click = false;
	</script>
</body>
</html>