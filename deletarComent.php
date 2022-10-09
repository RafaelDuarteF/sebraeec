<?php
    require_once 'conexao.php';
    session_start();
    $codComentDel = intval($_POST['codComentDel']);
    $delComent = $mysqli->query("DELETE FROM comentario WHERE cod_coment = $codComentDel") or die ($mysqli->error);
    header("location:pagForumLog.php");
?>