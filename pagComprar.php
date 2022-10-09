<?php
    session_start();
    if(isset($_SESSION['nomeAssoc']) && $_SESSION['nomeAssoc'] != ""){
        require_once("com.incLogAssoc.php"); 
    }
    else{
        require_once("com.incLog.php"); 
    }

    require_once 'header.incLog.php';
    $numProd = $_POST['numberProd'];
?>
    <body>
        <div class="one-body-part-compras">
        <form action="comprar.php" id="formComprar" method="POST">
            <div class="cadInformacoes">
                <h1 class="titlePagCompras">Forma de Pagamento</h1>
                <p class="subTitlePagCompras">Escolha o método de pagamento</p>
                <div class="metodsPag">
                    <div class="metod1"><img src="img/credito.png">Cartão de Crédito</div>
                    <div class="metod2"><img src="img/debito.png">Cartão de Débito</div>
                </div>
                    <table>
                        <tr>
                            <td colspan="4"><p class="subtitleCampos"><b>Preencha os campos abaixo</b></p></td>
                        </tr>
                        <tr>
                            <td colspan="2"><br><label class="lblCad">Nome no Cartão</label><br><input placeholder="Nome:" class="campoPag2" type="text" name="nomeCard-cadastro" id="nomeCard-cadastro"></td>
                            <td colspan="2"><br><label class="lblCad">CVV</label><br><input max="3" oninput="mascaraCVV(this)" placeholder="CVV:" class="campoPag2" type="text" name="CVV-cadastro" id="CVV-cadastro"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><br><label class="lblCad">Número do Cartão</label><br><input max="19" oninput="mascaraNCartao(this)" class="campoPag2" placeholder="Número:" type="text" name="numeroCard-cadastro" id="numeroCard-cadastro"></td>
                            <td colspan="1"><br><label class="lblCad">Mês (Vencimento)</label><br><input oninput="mascaraData(this)" class="campoPag1" placeholder="Mês:" type="text" name="mesCard-cadastro" id="mesCard-cadastro"></td>
                            <td colspan="1"><br><label class="lblCad">Ano (Vencimento)</label><br><input oninput="mascaraData(this)" class="campoPag1" placeholder="Ano:" type="text" name="anoCard-cadastro" id="anoCard-cadastro"></td>
                        </tr>
                    </table>
                <button type="button" id="buttonProximo">Próximo</button><br><br><br><br>
            </div>
                <div class="cadInformacoes2">
                    <h1 class="titlePagCompras2">Dados Pessoais</h1>
                    <p class="subTitlePagCompras2"><b>Preencha os campos abaixo</b></p>
                    <table>
                        <tr>
                            <td colspan="2"><br><label class="lblCad">Nome</label><br><input placeholder="Nome:" class="campoPag2" type="text" name="nomeComp-cadastro" id="nomeComp-cadastro"></td>
                            <td colspan="2"><br><label class="lblCad">Sobrenome</label><br><input placeholder="Sobrenome:" class="campoPag2" type="text" name="sobrenomeComp-cadastro" id="sobrenomeComp-cadastro"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><br><label class="lblCad">CEP</label><br><input oninput="mascaraCEPComp(this)" placeholder="CEP:" class="campoPag2" type="text" name="cepComp-cadastro" id="cepComp-cadastro"></td>
                            <td colspan="2"><br><label class="lblCad">Cidade</label><br><input placeholder="Cidade:" class="campoPag2" type="text" name="cidadeComp-cadastro" id="cidadeComp-cadastro"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><br><label class="lblCad">Rua</label><br><input class="campoPag2" placeholder="Rua:" type="text" name="ruaComp-cadastro" id="ruaComp-cadastro"></td>
                            <td colspan="1"><br><label class="lblCad">Número</label><br><input class="campoPag1" placeholder="Número:" type="text" name="numeroComp-cadastro" id="numeroComp-cadastro"></td>
                            <td colspan="1"><br><label class="lblCad">Complemento</label><br><input class="campoPag1" placeholder="Complemento:" type="text" name="complementoComp-cadastro" id="complementoComp-cadastro"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><br><label class="lblCad">Celular</label><br><input oninput="mascaraNumComp(this)" placeholder="Celular:" class="campoPag2" type="text" name="celularComp-cadastro" id="celularComp-cadastro"></td>
                            <td colspan="2"><br><label class="lblCad">E-Mail</label><br><input placeholder="E-Mail:" class="campoPag2" type="email" name="emailComp-cadastro" id="emailComp-cadastro"></td>
                        </tr>
                    </table>
                    <button type="button" id="buttonComprarComp">Comprar</button>
                    <button type="button" id="buttonVoltarComp">Voltar</button><br><br><br><br>
                </div>
                <input type="text" name="credDeb" id="credDeb" value="Crédito">
                <input type="text" name="numProd" id="numProd" value="<?php echo $numProd; ?>">
                <script>
                     n = $("#numProd"); n.hide();
                </script>
            </form>
        </div>
        <script>
            function mascaraCVV(i){
   
                var v = i.value;
   
                if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
                    i.value = v.substring(0, v.length-1);
                    return;
                }
                
                i.setAttribute("maxlength", "3");

            }
            function mascaraNCartao(i){
    
                var v = i.value;

                if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
                    i.value = v.substring(0, v.length-1);
                    return;
                }
                i.setAttribute("maxlength", "19");
                if (v.length == 4) i.value += " ";
                if (v.length == 9) i.value += " ";
                if (v.length == 14) i.value += " ";

            }
            function mascaraData(i){
   
                var v = i.value;

                if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
                    i.value = v.substring(0, v.length-1);
                    return;
                }
                
                i.setAttribute("maxlength", "2");

            }
            function mascaraNumComp(i){
   
                var v = i.value;
                
                if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
                    i.value = v.substring(0, v.length-1);
                    return;
                }
                
                i.setAttribute("maxlength", "12");
                if (v.length == 2) i.value += "-";

            }
            function mascaraCEPComp(i){
   
                var v = i.value;

                if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
                    i.value = v.substring(0, v.length-1);
                    return;
                }
                
                i.setAttribute("maxlength", "9");
                if(v.length == 5) i.value += "-";
            }
        </script>
    </body>
<?php
    require_once 'footer.inc.php';
    $_SESSION['envComp'] = true;
?>