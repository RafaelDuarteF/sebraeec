<?php
    $hostname = "127.0.0.1:3306";
    $bd = "proj";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bd);
    if($mysqli->connect_errno){
        echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $i = 0;
    $consulta = "SELECT * FROM cliente";
	$con = $mysqli->query($consulta) or die($mysqli->error);
    $consultaMensalidade = "SELECT * FROM mensalidade order by 3";
    $conMen = $mysqli->query($consultaMensalidade) or die($mysqli->error);
    $consultaAssociado = "SELECT * FROM associado";
    $conAssoc = $mysqli->query($consultaAssociado) or die ($mysqli->error);
    $consultaPost = "SELECT * FROM postagem order by 5";
    $conPost = $mysqli->query($consultaPost) or die ($mysqli->error);
    $consultaComent = "SELECT * FROM comentario";
    $conComent = $mysqli->query($consultaComent) or die ($mysqli->error);
    $consultaCompra = "SELECT * FROM compra ORDER BY prazo";
    $conCompra = $mysqli->query($consultaCompra) or die ($mysqli->error);
    if(!isset($_SESSION['order'])){
        $_SESSION['order'] = 'A-Z';
    }
    if($_SESSION['order'] == 'A-Z'){
        $consultaProds = "SELECT * FROM produto ORDER BY 1";
    }
    else if($_SESSION['order'] == 'Maior Preço'){
        $consultaProds = "SELECT * FROM produto ORDER BY 3 desc";
    }
    else if($_SESSION['order'] == "Menor Preço"){
        $consultaProds = "SELECT * FROM produto ORDER BY 3";
    }
    $conProds = $mysqli->query($consultaProds) or die ($mysqli->error);
    $consultaAva = "SELECT * FROM avaliacao ORDER BY 6";
    $conAva = $mysqli->query($consultaAva) or die ($mysqli->error);

    while($dado = $con->fetch_array()){
        $i++;
        $users[$i] = $dado['user'];
        $senhaUser[$i] = $dado['senha'];
        $email[$i] = $dado['email'];
        $telefone[$i] = $dado['telefone'];
        $cpf[$i] = $dado['cpf'];
        $rg[$i] = $dado['rg'];
        $dataUser[$i] = $dado['dataNas'];
        $pathClie[$i] = $dado['PATH'];
    }
    $f = 0;
    while($dado = $conAssoc->fetch_array()){
        $f++;
        $nomeAssoc[$f] = $dado['nome'];
        $rgAssoc[$f] = $dado['rg'];
        $cpfAssoc[$f] = $dado['cpf'];
        $telefoneAssoc[$f] = $dado['telefone'];
        $enderecoAssoc[$f] = $dado['endereco'];
        $banco[$f] = $dado['banco'];
        $agencia[$f] = $dado['agencia'];
        $conta[$f] = $dado['conta'];
        $tipoAssoc[$f] = $dado['tipo'];
        $senhaAssoc[$f] = $dado['senha'];
        $emailAssoc[$f] = $dado['email'];
        $pathAssoc[$f] = $dado['PATH'];
    }
    $e = 0;
    while($dado2 = $conMen->fetch_array()){
        $e++;
        $numMen[$e] = $dado2['num_mensalidade'];
        $valor[$e] = $dado2['valor'];
        $dataMen[$e] = $dado2['data_venc'];
        $cpfAssocMen[$e] = $dado2['cpf_assoc'];
        $situacao[$e] = $dado2['situacao'];
    }
    $l = 0;
    while($dado3 = $conPost->fetch_array()){
        $l++;
        $codPost[$l] = $dado3['cod_post'];
        $mensagem[$l] = $dado3['mensagem'];
        $nomeAssocPost[$l] = $dado3['nome_assoc'];
        $cpfAssocPost[$l] = $dado3['cpf_assoc'];
        $dataPost[$l] = $dado3['data_post'];
    }
    $u = 0;
    while($dado4 = $conComent->fetch_array()){
        $u++;
        $cod_coment[$u] = $dado4['cod_coment'];
        $cod_post[$u] = $dado4['cod_post'];
        $nomeAssocComent[$u] = $dado4['nome_assoc'];
        $dataComent[$u] = $dado4['data_coment'];
        $comentario[$u] = $dado4['comentario'];
        $cpfComent[$u] = $dado4['cpf_coment'];
    }
    $rafa = 0;
    while($dado5 = $conProds->fetch_array()){
        $rafa++;
        $nomeProd[$rafa] = $dado5['nomeProduto'];
        $codProd[$rafa] = $dado5['codProduto'];
        $precoProd[$rafa] = $dado5['preco'];
        $descProd[$rafa] = $dado5['descricao'];
        $pathProd[$rafa] = $dado5['path'];
        $info1[$rafa] = $dado5['info1'];
        $info2[$rafa] = $dado5['info2'];
        $info3[$rafa] = $dado5['info3'];
        $info4[$rafa] = $dado5['info4'];
    }
    $mari = 0;
    while($dado6 = $conAva->fetch_array()){
        $mari++;
        $codAva[$mari] = $dado6['codAvaliacao'];
        $codProdAva[$mari] = $dado6['codProduto'];
        $cpfClieCompra[$mari] = $dado6['cpfCliente'];
        $cpfAssocCompra[$mari] = $dado6['cpfAssociado'];
        $estrelasAva[$mari] = $dado6['estrelas'];
        $comentAva[$mari] = $dado6['comentarioAva'];
        $dataAva[$mari] = $dado6['data_coment'];
        $codComA[$mari] = $dado6['codCompra'];
    }
    $beth = 0;
    while($dado7 = $conCompra->fetch_array()){
        $beth++;
        $codCompra[$beth] = $dado7['codCompra'];
        $codProdutoCompra[$beth] = $dado7['codProduto'];
        $valorFrete[$beth] = $dado7['valorFrete'];
        $dataCompra[$beth] = $dado7['dataCompra'];
        $prazoCompra[$beth] = $dado7['prazo'];
        $quantCompra[$beth] = $dado7['quantidade'];
        $metodoEnvio[$beth] = $dado7['metodoEnvio'];
        $statusCompra[$beth] = $dado7['statusCompra'];
        $userComp[$beth] = $dado7['cpfClie'];
        $assocComp[$beth] = $dado7['cpfAssoc'];
        $avaliadoComp[$beth] = $dado7['avaliado'];
        $ruaComp[$beth] = $dado7['rua'];
        $numComp[$beth] = $dado7['numero'];
        $cepComp[$beth] = $dado7['cep'];
        $complementoComp[$beth] = $dado7['complemento'];
        $pagComp[$beth] = $dado7['pagamento'];
        $cartaoComp[$beth] = $dado7['cartao'];
        $contatoComp[$beth] = $dado7['contato'];
        $emailComp[$beth] = $dado7['email'];
        $nomeComp[$beth] = $dado7['nome'];
        $sobrenomeComp[$beth] = $dado7['sobrenome'];
    }
?>