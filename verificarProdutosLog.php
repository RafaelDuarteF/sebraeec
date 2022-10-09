<?php  
    $isa = 0;
    while($isa < $rafa){
        $isa++;
        $consultaProdAva = "SELECT count(codProduto) FROM avaliacao GROUP BY codProduto having codProduto = $codProd[$isa]";
        $conProdAva = $mysqli->query($consultaProdAva) or die ($mysqli->error);
        $consultaEstrelasAva = "SELECT sum(estrelas) FROM avaliacao where codProduto = $codProd[$isa]";
        $conEstrelasAva = $mysqli->query($consultaEstrelasAva) or die ($mysqli->error);
        while($dadoAva = $conProdAva->fetch_array()){
            $numAva = $dadoAva['count(codProduto)'];
        }
        while($dadoEstrelas = $conEstrelasAva->fetch_array()){
            $numEstrelas = $dadoEstrelas['sum(estrelas)'];
        }
        if($numEstrelas != 0 && $numAva != 0){
            $mediaAva = $numEstrelas / $numAva;
        }
        else{
            $mediaAva = 0;
            $numEstrelas = 0;
            $numAva = 0;
        }
        $roundMediaAva = round($mediaAva);
        ?>
        <form action="produtoLog.php" method="POST" class="formProds" id="<?php echo $isa;?>" onclick="produto(this.id)">
            <div class="produto">
                <img class="imgProd" src="<?php echo $pathProd[$isa]; ?>">
                <div class="part1Prod">
                    <h2 class="titleProduto"><b><?php echo $nomeProd[$isa]; ?></b></h2>
                    <p class="precoProd">R$<?php echo $precoProd[$isa]; ?></p>
                </div>
                <?php 
                if($roundMediaAva == 0){
                    ?>
                <div class="estrelasAva">
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
                <div class="estrelasAva">
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
                <div class="estrelasAva">
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
                <div class="estrelasAva">
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
                <div class="estrelasAva">
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
                <div class="estrelasAva">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaAva.png">
                    <img src="img/estrelaAva.png">
                </div>
                <?php
                }
                ?>

                <p class="numAva"><?php echo $numAva;?></p>
            </div>
            <input type="number" name="prod" class="idProd" value="<?php echo $isa; ?>">
            <input type="number" name="mediaAva" class="idProd" value="<?php echo $roundMediaAva; ?>">
            <input type="number" name="mediaAvaExat" class="idProd" value="<?php echo $mediaAva; ?>">
        </form>
        <?php
    }
?>