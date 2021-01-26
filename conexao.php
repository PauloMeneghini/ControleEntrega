<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "cartao";

//Criar conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

//Checar conexao

/* if(!$conn){
    die("Falha na conexão: " . mysqli_connect_erro());
}else{
    echo "Conexão relizada com sucesso";
}*/