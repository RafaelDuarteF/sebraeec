<?php
    $conAvas = "SELECT * FROM avaliacao WHERE codProduto = $codProd[$idProd] ORDER BY data_coment DESC";
    $consultaAvas = $mysqli->query($conAvas) or die ($mysqli->error);
    $avasData = 0;
    while($comentsAv = $consultaAvas->fetch_array()){
        $avasData++;
        $cpfClieAv = $comentsAv['cpfCliente'];
        $cpfAssocAv = $comentsAv['cpfAssociado'];
        if(strlen($cpfAssocAv) != 0){
            $nomeComentCon = $mysqli->query("SELECT nome, PATH FROM associado WHERE cpf = '" . $cpfAssocAv. "'") or die ($mysqli->error);
            while($vas = $nomeComentCon->fetch_array()){
                $nomeComent = $vas['nome'];
                $pathComent = $vas['PATH'];
            }
        }
        else if(strlen($cpfClieAv) != 0){
            $nomeComentCon = $mysqli->query("SELECT user, PATH FROM cliente WHERE cpf = '" . $cpfClieAv . "'") or die ($mysqli->error);
            while($vas = $nomeComentCon->fetch_array()){
                $nomeComent = $vas['user'];
                $pathComent = $vas['PATH'];
            }
        }
        else{
            $nomeComent = "Indefinido";
        }
        $estrelasComent = $comentsAv['estrelas'];
        $comentarioComent = $comentsAv['comentarioAva'];
        $dataCom = $comentsAv['data_coment'];
        ?>
        <div class="avaliacaoComent">
            <img class="imgComentAva" src="<?php echo $pathComent; ?>">
            <p class="nomeComentAva"><?php echo $nomeComent; ?></p>
            <?php
            if($estrelasComent == 0){
                    ?>
                    <div class="estrelasAvaComent">
                        <img src="img/estrelaP.png">
                        <img src="img/estrelaP.png">
                        <img src="img/estrelaP.png">
                        <img src="img/estrelaP.png">
                        <img src="img/estrelaP.png">
                    </div>
                    <?php
                    }
                    else if($estrelasComent == 1){
                    ?>
                    <div class="estrelasAvaComent">
                        <img src="img/estrelaAva.png">
                        <img src="img/estrelaP.png">
                        <img src="img/estrelaP.png">
                        <img src="img/estrelaP.png">
                        <img src="img/estrelaP.png">
                    </div>
                    <?php
                    }
                    else if($estrelasComent == 2){
                        ?>
                    <div class="estrelasAvaComent">
                        <img src="img/estrelaAva.png">
                        <img src="img/estrelaAva.png">
                        <img src="img/estrelaP.png">
                        <img src="img/estrelaP.png">
                        <img src="img/estrelaP.png">
                    </div>
                    <?php
                    }
                    else if($estrelasComent == 3){
                        ?>
                    <div class="estrelasAvaComent">
                        <img src="img/estrelaAva.png">
                        <img src="img/estrelaAva.png">
                        <img src="img/estrelaAva.png">
                        <img src="img/estrelaP.png">
                        <img src="img/estrelaP.png">
                    </div>
                    <?php
                    }
                    else if($estrelasComent == 4){
                        ?>
                    <div class="estrelasAvaComent">
                        <img src="img/estrelaAva.png">
                        <img src="img/estrelaAva.png">
                        <img src="img/estrelaAva.png">
                        <img src="img/estrelaAva.png">
                        <img src="img/estrelaP.png">
                    </div>
                    <?php
                    }
                    else if($estrelasComent == 5){
                        ?>
                    <div class="estrelasAvaComent">
                        <img src="img/estrelaAva.png">
                        <img src="img/estrelaAva.png">
                        <img src="img/estrelaAva.png">
                        <img src="img/estrelaAva.png">
                        <img src="img/estrelaAva.png">
                    </div>
                    <?php
                    }
                ?>
                <br><br>
                <p class="comentarioComent"><?php echo $comentarioComent; ?></p>
                <p class="dataCom"><?php echo str_replace('-', '/', date('d-m-Y', strtotime($dataCom))); ?></p>
        </div>
        <br><br>
<?php
    }
    if($avasData == 0){
        ?>
            <p class="semComent">Não há avaliações neste produto!</p>
        <?php
    }
?>