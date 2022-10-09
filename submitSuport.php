<?php
    include("conexao.php");
    $nomeSub = $_POST['nomeSup'];
    $emailSub = $_POST['emailSup'];
    $telSub = $_POST['telSup'];
    $desc = $_POST['probSup'];
    $_POST['nomeSup'] = 0;
    $_POST['emailSup'] = 0;
    $_POST['telSup'] = 0;
    $_POST['probSup'] = 0;
    if($nomeSub != 0){
        $sub = "INSERT INTO suporte VALUES('$nomeSub', '$telSub', '$emailSub', '$desc')";
        $subEnv = $mysqli->query($sub) or die($mysqli<-error);
    }
    require_once("com.inc.php");
    require_once("header.inc.php");
?>
        <script>
                document.querySelector('html').addEventListener('keydown', () => {
                var tecla = event.keyCode;
        
                if(tecla == 27) {
                    if(click == false){
                        var utter = new SpeechSynthesisUtterance("Pedido à suporte enviado com sucesso! Retornaremos em até 48 horas nos contatos informados..."); // responsável pelo que vai falar!
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
		<h2 id="titleSubmitEnv">Pedido à suporte enviado com sucesso! Retornaremos em até 48 horas nos contatos informados...</h2>
        <br>
        <p id="subVoltSup">Voltar à página de suporte.</p>
        <script>
            $("#subVoltSup").click(() => {
                location.assign("pagSuporte.php");
            });
        </script>
		<?php require_once("footer.inc.php"); ?>
		<script>
			synth.cancel();
			click = false;
			$("#acessImg").hide();
		</script>
</body>
</html>