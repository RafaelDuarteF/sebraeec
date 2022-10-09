<?php
    session_start();
    include('conexao.php');
    $arquivo = $_FILES['arquivo'];
    if($arquivo['size'] > 2097152)
        die("Arquivo muito grande!! Max: 2MB");
    $pasta = "img/clientes/";
    $nomeDoArquivo = $arquivo['name'];
    $novoNomeDoArquivo = time();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
    if($extensao != 'jpg' && $extensao != 'png')
        die("Tipo de arquivo não aceito!!");
    $path = $pasta . $novoNomeDoArquivo . "." . $extensao;
    $salvarArq = move_uploaded_file($arquivo['tmp_name'], $pasta . $novoNomeDoArquivo . "." . $extensao);
    if($salvarArq){
        $mysqli->query("UPDATE cliente SET PATH = '$path' WHERE user = '" . $_SESSION['nome'] . "'");
        $_SESSION['pathClie'] = $path;
        header('location:pagPerfil.php');
    }
    else{
        echo "<p>Falha ao enviar arquivo</p>";
    }
?>