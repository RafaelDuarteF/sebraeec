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
<?php
    require_once("header.inc.php")
?>
<body>
<br>
<a id="voltIndex">< Voltar a página anterior</a>
    <table>
        <form name="submitCad" method="POST" id="submitCad" action="verificarLog.php">
            <br>
            <br>
            <br>
            <br>
            <tr class="tdtitle">
				<td class="titlece" colspan="4">Cadastrar Cliente<br></td>
			</tr>
            <tr>
                <td><br><label class="lblCad">Nome</label><br><input placeholder="Digite seu nome" class="campo" type="text" name="nome-cadastro" id="nome-cadastro"></td>
                <td><br><label class="lblCad">Email</label><br><input placeholder="Digite seu e-mail" class="campo" type="text" name="e-mail-cadastro" id="e-mail-cadastro"></td>
                <td><br><label class="lblCad">Telefone</label><br><input oninput="mascaraTEL(this)" placeholder="Ex: 11924254323" class="campo" type="text" name="tel-cadastro" id="tel-cadastro"></td>
                <td><br><label class="lblCad">Data de Nascimento</label><br><input class="campo" type="date" name="dataNas-cadastro" id="dataNas-cadastro"></td>
            </tr>
            <tr>
                <td colspan="2"><br><label class="lblCad">RG</label><br><input oninput="mascaraRG(this)" placeholder="Ex: 14.231.321-53" class="campo2" type="text" name="rg-cadastro" id="rg-cadastro"></td>
                <td colspan="2"><br><label class="lblCad">CPF</label><br><input oninput="mascaraCPF(this)" placeholder="Ex: 432.342.123-90" class="campo2" type="text" name="cpf-cadastro" id="cpf-cadastro"></td>
            </tr>
            <tr>
                <td colspan="2"><br><label class="lblCad">Senha</label><br><input class="campo2" type="password" name="senha-cadastro" id="senha-cadastro"></td>
                <td colspan="2"><br><label class="lblCad">Repetir senha</label><br><input class="campo2" type="password" name="senha-confirm-cadastro" id="senha-confirm-cadastro"></td>
            </tr>
            <tr>
                <td colspan="1"><button class="enviCad" id="cad" type="button">Enviar</button></td>
                <td colspan="1"><button class="enviCad" id="reset" type="button">Resetar</button></td>
            </tr>
        </form>
    </table>
</body>
<script>

function mascaraRG(i){
   
   var v = i.value;
   
   if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
      i.value = v.substring(0, v.length-1);
      return;
   }
   
   i.setAttribute("maxlength", "13");
   if (v.length == 2 || v.length == 6) i.value += ".";
   if (v.length == 10) i.value += "-";

}
function mascaraCPF(i){
   
   var v = i.value;
   
   if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
      i.value = v.substring(0, v.length-1);
      return;
   }
   
   i.setAttribute("maxlength", "14");
   if (v.length == 3 || v.length == 7) i.value += ".";
   if (v.length == 11) i.value += "-";

}
function mascaraTEL(i){
   
   var v = i.value;
   
   if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
      i.value = v.substring(0, v.length-1);
      return;
   }
   
   i.setAttribute("maxlength", "12");
   if (v.length == 2) i.value += "-";

}
</script>
<?php 
    require_once("footer.inc.php")
?>
</html>
