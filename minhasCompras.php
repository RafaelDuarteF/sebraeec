<?php
    include 'conexao.php';
    session_start();
    if(isset($_SESSION['nomeAssoc']) && $_SESSION['nomeAssoc'] != ""){
		require_once("com.incLogAssoc.php"); 
	}
	else{
		require_once("com.incLog.php"); 
	}
    include('header.incLog.php');
?>
    <div id="one-body-part-mCompras">
        <h2 class="titleMCompras">Minhas Compras</h2>
        <div class="selecComps">
            <p class="selecP" id="emAnd"><b>Em Andamento</b></p>
            <p class="selecP" id="final"><b>Finalizados</b></p>
        </div>
        <div class="comprasAndamento">
        <?php
            include 'verificarCompras.php';
        ?>
        </div>
        <div class="comprasFinalizadas">
        <?php
            include 'verificarComprasFinal.php';
        ?>
        </div>
    </div>
    <script>
        boFinal = false;
        and = $(".comprasAndamento"); 
        final = $(".comprasFinalizadas"); final.hide();
        $("#final").click(() => {
            and.hide();
            final.show();
            $("#emAnd").css("background-color", "#d1d1d1");
            $("#final").css("background-color", "rgb(160, 158, 158)");
            $("#final").css("opacity", "100%");
            $("#final").css("cursor", "default");
            boFinal = true;
        });
        $("#emAnd").click(() => {
            and.show();
            final.hide();
            $("#final").css("background-color", "#d1d1d1");
            $("#emAnd").css("background-color", "rgb(160, 158, 158)");
            $("#emAnd").css("opacity", "100%");
            $("#emAnd").css("cursor", "default");
            boFinal = false;
        });
        $("#emAnd").hover(() => {
            if(boFinal == true){
                $("#emAnd").css("opacity", "60%");
                $("#emAnd").css("cursor", "pointer");
            }
        }, () => {
            $("#emAnd").css("opacity", "100%");
            $("#emAnd").css("cursor", "default");
        });
        $("#final").hover(() => {
            if(boFinal == false){
                $("#final").css("opacity", "60%");
                $("#final").css("cursor", "pointer");
            }
        }, () => {
            $("#final").css("opacity", "100%");
            $("#final").css("cursor", "default");
        });
    </script>

<?php
    include('footer.inc.php');
?>