<?php
    session_start();
    include 'conexao.php';

    $nomeEmpresa = $_POST['nomeEmpresa'];
    $codEnvelope = $_POST['codEnvelope'];

    if(empty($nomeEmpresa && $codEnvelope)){
        echo "<script> alert('Nome da empresa ou código do envelope estão vazio, verifique e tente novamente') </script>";
    } else {
        echo "Dados cadastrados com sucesso";
    }

?>