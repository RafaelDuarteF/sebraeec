<?php
    session_start();
    include 'conexao.php';
	if(isset($_SESSION['nomeAssoc']) && $_SESSION['nomeAssoc'] != ""){
		require_once("com.incLogAssoc.php"); 
	}
	else{
		require_once("com.incLog.php"); 
	}
    include 'header.incLog.php';
    $idProd = $_POST['prod'];
    $roundMediaAva = $_POST['mediaAva'];
    $mediaAva = $_POST['mediaAvaExat'];
    $codProdu = $_POST['codProd'];
?>
    <div class="one-body-part-produto">
        <div class="left-part">
            <h2 class="titleProdId"><?php echo $nomeProd[$idProd]; ?></h2>
            <img class="imgProdId" src="<?php echo $pathProd[$idProd]; ?>">
            <div class="coresProd">
                <div class="cor1 cores"></div>
                <div class="cor2 cores"></div>
            </div>
        </div>
        <div class="right-part">
            <?php
                if($roundMediaAva == 0){
                    ?>
                <div class="estrelasAvaId">
                    <img src="img/estrelaP.png">
                    <img src="img/estrelaP.png">
                    <img src="img/estrelaP.png">
                    <img src="img/estrelaP.png">
                    <img src="img/estrelaP.png">
                </div>
                <?php
                }
                else if($roundMediaAva == 1){
                ?>
                <div class="estrelasAvaId">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaP.png">
                    <img src="img/estrelaP.png">
                    <img src="img/estrelaP.png">
                    <img src="img/estrelaP.png">
                </div>
                <?php
                }
                else if($roundMediaAva == 2){
                    ?>
                <div class="estrelasAvaId">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaP.png">
                    <img src="img/estrelaP.png">
                    <img src="img/estrelaP.png">
                </div>
                <?php
                }
                else if($roundMediaAva == 3){
                    ?>
                <div class="estrelasAvaId">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaP.png">
                    <img src="img/estrelaP.png">
                </div>
                <?php
                }
                else if($roundMediaAva == 4){
                    ?>
                <div class="estrelasAvaId">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaP.png">
                </div>
                <?php
                }
                else if($roundMediaAva == 5){
                    ?>
                <div class="estrelasAvaId">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaAva.png">
                </div>
                <?php
                }
                ?>
            <p class="precoId">R$<?php echo $precoProd[$idProd]; ?></p>
            <p class="juros">Até 3x sem juros.</p>
            <p class="info">&#9679 <?php echo $info1[$idProd]; ?></p>
            <p class="info">&#9679 <?php echo $info2[$idProd]; ?></p>
            <p class="info">&#9679 <?php echo $info3[$idProd]; ?></p>
            <p class="info">&#9679 <?php echo $info4[$idProd]; ?></p>
            <form id="comprarProdEspec" method="POST" action="pagComprar.php">
                <input type="text" name="numberProd" id="numberProd" value="<?php echo $codProdu; ?>">
            </form>
            <button class="comprarProd"><b>Comprar</b></button>
            <script>
                numProd = $("#numberProd"); numProd.hide();
                $(".comprarProd").click(() => {
                    document.getElementById("comprarProdEspec").submit();
                });
            </script>
        </div>
    </div>
    <div class="second-body-part-produto">
    <div class="cartoesDiv">
        <p class="textCartoes"><b>Cartões de Crédito</b></p>
        <div class="cartoesCredito">
            <img class="cartao1" src="img/visa.png">
            <img class="cartao2" src="img/mastercard.png">
            <img class="cartao3" src="img/hipercard.png">
        </div>
        <br><br><br><br>
        <p class="textCartoes2"><b>Cartões de Débito</b></p>
        <div class="cartoesDebito">
            <img class="cartao4" src="img/visa.png">
            <img class="cartao5" src="img/mastercard.png">
            <img class="cartao6" src="img/elo.png">
        </div>
    </div>
        <div class="left-part-second">
            <h2 class="titleDescId">Descrição</h2> 
            <p class="descId"><?php echo $descProd[$idProd]; ?></p>
        </div>   
    </div>
    <div class="third-body-part-produto">
        <h2 class="titleDescId">Avaliação sobre <?php echo strtoupper($nomeProd[$idProd]); ?></h2>
        <p class="classTitle">Classificação</p>
        <p class="classNum"><?php echo substr($mediaAva, 0, 3); ?></p>
        <?php
        if($roundMediaAva == 0){
                ?>
                <div class="estrelasAvaNum">
                    <img src="img/estrelaP.png">
                    <img src="img/estrelaP.png">
                    <img src="img/estrelaP.png">
                    <img src="img/estrelaP.png">
                    <img src="img/estrelaP.png">
                </div>
                <?php
                }
                else if($roundMediaAva == 1){
                ?>
                <div class="estrelasAvaNum">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaP.png">
                    <img src="img/estrelaP.png">
                    <img src="img/estrelaP.png">
                    <img src="img/estrelaP.png">
                </div>
                <?php
                }
                else if($roundMediaAva == 2){
                    ?>
                <div class="estrelasAvaNum">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaP.png">
                    <img src="img/estrelaP.png">
                    <img src="img/estrelaP.png">
                </div>
                <?php
                }
                else if($roundMediaAva == 3){
                    ?>
                <div class="estrelasAvaNum">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaP.png">
                    <img src="img/estrelaP.png">
                </div>
                <?php
                }
                else if($roundMediaAva == 4){
                    ?>
                <div class="estrelasAvaNum">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaP.png">
                </div>
                <?php
                }
                else if($roundMediaAva == 5){
                    ?>
                <div class="estrelasAvaNum">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaAva.png">
                </div>
                <?php
                }
            ?>
        <div class="numAvaliacoes">
            <?php
                $consulta5 = "SELECT count(codProduto) FROM avaliacao WHERE codProduto = $codProd[$idProd] and estrelas = 5";
                $con5 = $mysqli->query($consulta5) or die($mysqli->error);
                while($quant5 = $con5->fetch_array()){
                    $quantAva5 = $quant5['count(codProduto)'];
                }
                $consulta4 = "SELECT count(codProduto) FROM avaliacao WHERE codProduto = $codProd[$idProd] and estrelas = 4";
                $con4 = $mysqli->query($consulta4) or die($mysqli->error);
                while($quant4 = $con4->fetch_array()){
                    $quantAva4 = $quant4['count(codProduto)'];
                }
                $consulta3 = "SELECT count(codProduto) FROM avaliacao WHERE codProduto = $codProd[$idProd] and estrelas = 3";
                $con3 = $mysqli->query($consulta3) or die($mysqli->error);
                while($quant3 = $con3->fetch_array()){
                    $quantAva3 = $quant3['count(codProduto)'];
                }
                $consulta2 = "SELECT count(codProduto) FROM avaliacao WHERE codProduto = $codProd[$idProd] and estrelas = 2";
                $con2 = $mysqli->query($consulta2) or die($mysqli->error);
                while($quant2 = $con2->fetch_array()){
                    $quantAva2 = $quant2['count(codProduto)'];
                }
                $consulta1 = "SELECT count(codProduto) FROM avaliacao WHERE codProduto = $codProd[$idProd] and estrelas = 1";
                $con1 = $mysqli->query($consulta1) or die($mysqli->error);
                while($quant1 = $con1->fetch_array()){
                    $quantAva1 = $quant1['count(codProduto)'];
                }
            ?>
            <p>5 estrelas... <?php echo $quantAva5;?> avaliações</p>
            <p>4 estrelas... <?php echo $quantAva4;?> avaliações</p>
            <p>3 estrelas... <?php echo $quantAva3;?> avaliações</p>
            <p>2 estrelas... <?php echo $quantAva2;?> avaliações</p>
            <p>1 estrelas... <?php echo $quantAva1;?> avaliações</p>
        </div>
        <div class="tiposAva">
            <p class="tipoAva" id="filterTodas">Todas</p>
            <p class="tipoAva" id="filterPositivas">Positivas</p>
            <p class="tipoAva" id="filterNegativas">Negativas</p>
        </div>
        <br>
        <br><br>
        <div class="coments" id="comentTodas">
            <?php include('verificarAvaTodas.php'); ?>
        </div>
        <div class="coments" id="comentPositivas">
            <?php include 'verificarAvaPosi.php'; ?>
        </div>
        <div class="coments" id="comentNegativas">
            <?php include 'verificarAvaNega.php'; ?>
        </div>
    </div>
    <script>
        comentPosi = $("#comentPositivas"); comentPosi.hide();
        comentNega = $("#comentNegativas"); comentNega.hide();
        comentTodas = $("#comentTodas");
        $("#filterTodas").click(() => {
            comentPosi.hide();
            comentNega.hide();
            comentTodas.show();
            $("#filterTodas").css('border-bottom', '1px solid blue');
            $("#filterTodas").css('color', 'blue');
            $("#filterPositivas").css('border-bottom', '0px');
            $("#filterPositivas").css('color', 'black');
            $("#filterNegativas").css('border-bottom', '0px');
            $("#filterNegativas").css('color', 'black');
        });
        $("#filterPositivas").click(() => {
            comentPosi.show();
            comentNega.hide();
            comentTodas.hide();
            $("#filterPositivas").css('border-bottom', '1px solid blue');
            $("#filterPositivas").css('color', 'blue');
            $("#filterTodas").css('border-bottom', '0px');
            $("#filterTodas").css('color', 'black');
            $("#filterNegativas").css('border-bottom', '0px');
            $("#filterNegativas").css('color', 'black');
        });
        $("#filterNegativas").click(() => {
            comentPosi.hide();
            comentNega.show();
            comentTodas.hide();
            $("#filterNegativas").css('border-bottom', '1px solid blue');
            $("#filterNegativas").css('color', 'blue');
            $("#filterPositivas").css('border-bottom', '0px');
            $("#filterPositivas").css('color', 'black');
            $("#filterTodas").css('border-bottom', '0px');
            $("#filterTodas").css('color', 'black');
        });
    </script>
<?php
    include 'footer.inc.php';
?>