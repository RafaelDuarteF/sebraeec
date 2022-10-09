<?php
    require_once 'conexao.php';
    session_start();
    $codPostDel = intval($_POST['codPostDel']);
    $delPost = $mysqli->query("DELETE FROM postagem WHERE cod_post = $codPostDel") or die ($mysqli->error);
    $delComent = $mysqli->query("DELETE FROM comentario WHERE cod_post = $codPostDel") or die ($mysqli->error);
    header("location:pagForumLog.php");
?>