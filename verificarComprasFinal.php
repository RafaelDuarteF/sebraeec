<?php
 $pedro = 0;
 $prodsFin = $prods;
 $prot = 0;
 while($pedro < $beth){
     $pedro++;
     if($userComp[$pedro] == $_SESSION['cpf'] && ($statusCompra[$pedro] == 'Entregue' || $statusCompra[$pedro] == 'Cancelado')){
         $prodsFin++;
         $prot++;
         $conCompEspec = $mysqli->query("SELECT nomeProduto, preco, path FROM produto WHERE codProduto = '". $codProdutoCompra[$pedro]. "'");
         while($dadosComp = $conCompEspec->fetch_array()){
             $nomeProdComp = $dadosComp['nomeProduto'];
             $precoProdComp = $dadosComp['preco'];
             $pathProdComp = $dadosComp['path'];
         }
         if($valorFrete[$pedro] == 0){
             $frete = 'Frete Grátis';
         }
         else{
             $frete = 'Frete: R$' . $valorFrete[$pedro];
         }
         ?>
         <div class="compra compra<?php echo $prodsFin; ?>">
             <img class="imgCompra imgCompra<?php echo $prodsFin; ?>" src="<?php echo $pathProdComp; ?>">
             <div class="infosProd">
                 <p class="nomeCompra"><b><?php echo $nomeProdComp; ?></b></p>
                 <p class="precoCompra">R$<?php echo $precoProdComp; ?></p>
                 <p><?php echo $frete; ?></p>
                 <p>Quantidade: <?php echo $quantCompra[$pedro]; ?></p>
                 <p>Prazo: <?php echo str_replace('-', '/', date('d-m-Y', strtotime($prazoCompra[$pedro]))); ?></p>
                 <p>Método de envio: <b><?php echo $metodoEnvio[$pedro]; ?></b></p>
             </div>
             <div class="statsCompra">
                 <div class="bolinhaStats" id="bolinhaFinStats<?php echo $prodsFin; ?>"></div>
                 <p class="stats">Status: <?php echo $statusCompra[$pedro]; ?></p>
                 <p class="codPedido">Pedido: #<?php echo $codCompra[$pedro]; ?></p>
                 <p class="maisInfoComp maisInfoComp<?php echo $prodsFin; ?>">Mais Informações</p>
             </div>
         </div>
         <div class="moreCompra moreCompra<?php echo $prodsFin; ?>">
                <h3 class="titleMComp">Enviado para: <?php echo $nomeComp[$pedro] . " " . $sobrenomeComp[$pedro]; ?></h3>
                <div class="infosComp">
                    <div class="infosEnd">
                        <p>Endereço: <?php echo $ruaComp[$pedro]; ?></p>
                        <p>Número: <?php echo $numComp[$pedro]; ?></p>
                        <p>CEP: <?php echo $cepComp[$pedro]; ?></p>
                        <p>Complemento: <?php echo $complementoComp[$pedro]; ?></p>
                    </div>
                    <div class="infosPagCont">
                        <p>Método de Pagamento: <?php echo $pagComp[$pedro]; ?></p>
                        <p>Final: ***<?php echo substr($cartaoComp[$pedro], -3); ?></p>
                        <p>Contato: <?php echo $contatoComp[$pedro]; ?></p>
                        <p>E-Mail: <?php echo $emailComp[$pedro]; ?></p>
                    </div>
                </div>
                <?php
                    if($statusCompra[$pedro] == 'Entregue'){
                        if($avaliadoComp[$pedro] == 0){
                ?>
                <div class="avaComp">
                    <h2 class="titleAvaComp">Avalie seu produto!</h2>
                    <div class="estrelasAvaComp">
                        <img id="estrela1Comp" class="estrelasImgCom" src="img/estrelaP.png">
                        <img id="estrela2Comp" class="estrelasImgCom" src="img/estrelaP.png">
                        <img id="estrela3Comp" class="estrelasImgCom" src="img/estrelaP.png">
                        <img id="estrela4Comp" class="estrelasImgCom" src="img/estrelaP.png">
                        <img id="estrela5Comp" class="estrelasImgCom" src="img/estrelaP.png">
                    </div>
                    <form class="formAvaComp" id="formAvaComp<?php echo $prodsFin; ?>" method="POST" action="envAvaliacao.php">
                        <input name="codComp" class="codComp" type="text" value="<?php echo $codCompra[$pedro]; ?>">
                        <input name="codProd" class="codProd" type="text" value="<?php echo $codProdutoCompra[$pedro]; ?>">
                        <input name="comentComp" maxlength="125" class="comentComp"id="comentComp<?php echo $prodsFin;?>" type="text" placeholder="Deixe seu comentário">
                        <button type="button" class="btnAvaComp" id="<?php echo $prodsFin;?>" onclick="envForm(this.id)">Avaliar</button>
                    </form>
                </div>
                <?php
                        }
                        else if($avaliadoComp[$pedro] == 1){
                            $conEsComp = $mysqli->query("SELECT estrelas, comentarioAva, data_coment FROM avaliacao WHERE codCompra = '$codCompra[$pedro]'") or die ($mysqli->error);
                            while($estrelasAvaAR = $conEsComp->fetch_array()){
                                $estrelasAvaCm = $estrelasAvaAR['estrelas'];
                                $comn = $estrelasAvaAR['comentarioAva'];
                                $dat = $estrelasAvaAR['data_coment'];
                            }
                        ?>
                            <div class="avaComp">
                            <h2 class="titleAvaComp">Sua avaliação</h2>
                            <?php 
                                if($estrelasAvaCm == 0){
                                    ?>
                                <div class="estrelasAvaComp">
                                    <img src="img/estrelaP.png">
                                    <img src="img/estrelaP.png">
                                    <img src="img/estrelaP.png">
                                    <img src="img/estrelaP.png">
                                    <img src="img/estrelaP.png">
                                </div>
                                <?php
                                }
                                else if($estrelasAvaCm == 1){
                                ?>
                                <div class="estrelasAvaComp">
                                    <img src="img/estrelaAva.png">
                                    <img src="img/estrelaP.png">
                                    <img src="img/estrelaP.png">
                                    <img src="img/estrelaP.png">
                                    <img src="img/estrelaP.png">
                                </div>
                                <?php
                                }
                                else if($estrelasAvaCm == 2){
                                    ?>
                                <div class="estrelasAvaComp">
                                    <img src="img/estrelaAva.png">
                                    <img src="img/estrelaAva.png">
                                    <img src="img/estrelaP.png">
                                    <img src="img/estrelaP.png">
                                    <img src="img/estrelaP.png">
                                </div>
                                <?php
                                }
                                else if($estrelasAvaCm == 3){
                                    ?>
                                <div class="estrelasAvaComp">
                                    <img src="img/estrelaAva.png">
                                    <img src="img/estrelaAva.png">
                                    <img src="img/estrelaAva.png">
                                    <img src="img/estrelaP.png">
                                    <img src="img/estrelaP.png">
                                </div>
                                <?php
                                }
                                else if($estrelasAvaCm == 4){
                                    ?>
                                <div class="estrelasAvaComp">
                                    <img src="img/estrelaAva.png">
                                    <img src="img/estrelaAva.png">
                                    <img src="img/estrelaAva.png">
                                    <img src="img/estrelaAva.png">
                                    <img src="img/estrelaP.png">
                                </div>
                                <?php
                                }
                                else if($estrelasAvaCm == 5){
                                    ?>
                                <div class="estrelasAvaComp">
                                    <img src="img/estrelaAva.png">
                                    <img src="img/estrelaAva.png">
                                    <img src="img/estrelaAva.png">
                                    <img src="img/estrelaAva.png">
                                    <img src="img/estrelaAva.png">
                                </div>
                                <?php
                                }
                                ?>
                            <p class="comePar"><?php echo $comn; ?></p>
                            <p class="datPar"><?php echo str_replace('-', '/', date('d-m-Y', strtotime($dat)))?></p>
                        </div>
                        <?php
                        }
                    }
                ?>
                <p class="menosInfoComp menosInfoComp<?php echo $prodsFin; ?>">Menos Informações</p>
            </div>
            <script>
                $(".maisInfoComp<?php echo $prodsFin; ?>").click(() => {
                    $(".moreCompra<?php echo $prodsFin;?>").css("display", "block");
                    $(".moreCompra<?php echo $prodsFin;?>").css("visibility", "visible");
                    $(".compra<?php echo $prodsFin;?>").css("border-bottom", "0px");
                    $(".imgCompra<?php echo $prodsFin; ?>").css("border-bottom", "1px solid gray");
                    $(".imgCompra<?php echo $prodsFin + 1; ?>").css("margin-top", "-1px")
                    $(".imgCompra<?php echo $prodsFin + 1; ?>").css("border-top", "1px solid gray");
                    $(".maisInfoComp<?php echo $prodsFin;?>").css("visibility", "hidden");
                    $(".maisInfoComp<?php echo $prodsFin;?>").css("display", "none");
                });
                $(".menosInfoComp<?php echo $prodsFin; ?>").click(() => {
                    $(".moreCompra<?php echo $prodsFin;?>").css("display", "none");
                    $(".moreCompra<?php echo $prodsFin;?>").css("visibility", "hidden");
                    $(".compra<?php echo $prodsFin;?>").css("border-bottom", "1px solid gray");
                    $(".imgCompra<?php echo $prodsFin; ?>").css("border-bottom", "0px");
                    $(".imgCompra<?php echo $prodsFin + 1; ?>").css("margin-top", "0px")
                    $(".imgCompra<?php echo $prodsFin + 1; ?>").css("border-top", "0px");
                    $(".maisInfoComp<?php echo $prodsFin;?>").css("visibility", "visible");
                    $(".maisInfoComp<?php echo $prodsFin;?>").css("display", "block");
                    $("#estrela1Comp").prop('src', 'img/estrelaP.png');
                    $("#estrela2Comp").prop('src', 'img/estrelaP.png');
                    $("#estrela3Comp").prop('src', 'img/estrelaP.png');
                    $("#estrela4Comp").prop('src', 'img/estrelaP.png');
                    $("#estrela5Comp").prop('src', 'img/estrelaP.png');
     
                    $(".quantEstrelasIn").remove();
                    ava = 0;
                });
            </script>
            <?php
                if($prodsFin == $prods + 1){
                ?>
                <script>
                    $(".compra<?php echo $prodsFin;?>").css("border-top", "1px solid gray");
                </script>
                <?php
                }
                ?>
         <?php
         if($statusCompra[$pedro] == 'Entregue'){
            ?>
            <script>
                $("#bolinhaFinStats<?php echo $prodsFin; ?>").css("background-color", "green");
            </script>
            <?php
         }
         if($statusCompra[$pedro] == 'Cancelado'){
             ?>
             <script>
                 $("#bolinhaFinStats<?php echo $prodsFin; ?>").css("background-color", "red");
             </script>
             <?php
         }
     }
 }
 if($prot == 0){
     ?>
     <p class="semComp">Não há compras finalizadas para serem exibidas nesta conta!</p>
     <?php
 }
?>