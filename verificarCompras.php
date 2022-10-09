<?php
    $pedro = 0;
    $prods = 0;
    while($pedro < $beth){
        $pedro++;
        if($userComp[$pedro] == $_SESSION['cpf'] && $statusCompra[$pedro] != 'Entregue' && $statusCompra[$pedro] != 'Cancelado'){
            $prods++;
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
            <div class="compra compra<?php echo $prods; ?>">
                <img class="imgCompra imgCompra<?php echo $prods;?>" src="<?php echo $pathProdComp; ?>">
                <div class="infosProd">
                    <p class="nomeCompra"><b><?php echo $nomeProdComp; ?></b></p>
                    <p class="precoCompra">R$<?php echo $precoProdComp; ?></p>
                    <p><?php echo $frete; ?></p>
                    <p>Quantidade: <?php echo $quantCompra[$pedro]; ?></p>
                    <p>Prazo: <?php echo str_replace('-', '/', date('d-m-Y', strtotime($prazoCompra[$pedro]))); ?></p>
                    <p>Método de envio: <b><?php echo $metodoEnvio[$pedro]; ?></b></p>
                </div>
                <div class="statsCompra">
                    <div class="bolinhaStats" id="bolinhaStats<?php echo $prods; ?>"></div>
                    <p class="stats">Status: <?php echo $statusCompra[$pedro]; ?></p>
                    <p class="codPedido">Pedido: #<?php echo $codCompra[$pedro]; ?></p>
                    <p class="maisInfoComp maisInfoComp<?php echo $prods; ?>">Mais Informações</p>
                </div>
            </div>
            <div class="moreCompra moreCompra<?php echo $prods; ?>">
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
                    if($statusCompra[$pedro] == 'A enviar' || $statusCompra[$pedro] == 'Preparando'){
                ?>
                <p class="cancPedido">Cancelar Pedido</p>
                <form id="formCanPed" method="POST" action="cancelarCompra.php">
                    <input type="text" class="inCo" name="inCo" value="<?php echo $codCompra[$pedro]; ?>">
                </form>
                <?php
                    }
                ?>
                <p class="menosInfoComp menosInfoComp<?php echo $prods; ?>">Menos Informações</p>
            </div>
            <script>
                $(".maisInfoComp<?php echo $prods; ?>").click(() => {
                    $(".moreCompra<?php echo $prods;?>").css("display", "block");
                    $(".moreCompra<?php echo $prods;?>").css("visibility", "visible");
                    $(".compra<?php echo $prods;?>").css("border-bottom", "0px");
                    $(".imgCompra<?php echo $prods; ?>").css("border-bottom", "1px solid gray");
                    $(".imgCompra<?php echo $prods + 1; ?>").css("margin-top", "-1px")
                    $(".imgCompra<?php echo $prods + 1; ?>").css("border-top", "1px solid gray");
                    $(".maisInfoComp<?php echo $prods;?>").css("visibility", "hidden");
                    $(".maisInfoComp<?php echo $prods;?>").css("display", "none");
                });
                $(".menosInfoComp<?php echo $prods; ?>").click(() => {
                    $(".moreCompra<?php echo $prods;?>").css("display", "none");
                    $(".moreCompra<?php echo $prods;?>").css("visibility", "hidden");
                    $(".compra<?php echo $prods;?>").css("border-bottom", "1px solid gray");
                    $(".imgCompra<?php echo $prods; ?>").css("border-bottom", "0px");
                    $(".imgCompra<?php echo $prods + 1; ?>").css("margin-top", "0px")
                    $(".imgCompra<?php echo $prods + 1; ?>").css("border-top", "0px");
                    $(".maisInfoComp<?php echo $prods;?>").css("visibility", "visible");
                    $(".maisInfoComp<?php echo $prods;?>").css("display", "block");
                });
            </script>
            <?php
            if($statusCompra[$pedro] != 'Em trânsito'){
                ?>
                <script>
                    $("#bolinhaStats<?php echo $prods; ?>").css("background-color", "gray");
                </script>
                <?php
            }
        }
    }
    if($prods == 0){
        ?>
        <p class="semComp">Não há compras em andamento para serem exibidas nesta conta!</p>
        <?php
    }
?>