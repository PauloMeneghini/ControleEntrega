<?php
    session_start();
    include 'conexao.php';

    if(isset($_POST['enviar'])){
        if(empty($_POST['nomeEmpresa'] && $_POST['codEnvelope'])){
            echo "<script> alert('Nome da empresa ou código do envelope estão vazio, verifique e tente novamente') </script>";
        } else {
            $nomeEmpresa = $_POST['nomeEmpresa'];
            $codEnvelope = $_POST['codEnvelope'];
            $qtdeCartao = $_POST['qtdeCartao'];
            $cidade = $_POST['cidade'];

            $sql = "INSERT INTO controlecartao (nomeEmpresa, codEnvelope, qtdeCartao, cidade, dataCadastro) VALUES ('$nomeEmpresa', '$codEnvelope', '$qtdeCartao', '$cidade', NOW())";
            $insert = mysqli_query($conn, $sql);

            if($insert){
                echo "<script> alert('Dados cadastrados com sucesso') </script>";
            } else {
                echo "<script> alert('Erro ao cadastrar') </script>";
            }
            
        }
    }

?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Inserir envelope</title>
    </head>
    <body>

        <form action="cadEnvelope.php" method="POST">
            <div class="container" style="height: 550px">
                <div class="formulario">
                    <input type="text" name="nomeEmpresa" autocomplete="off" required>
                    <label for="nomeEmpresa" class="label-name">
                        <span class="content-name">Nome da empresa: </span>
                    </label>
                </div>

                <div class="formulario">
                    <input type="number" name="codEnvelope" autocomplete="off" required>
                    <label for="codEnvelope" class="label-name">
                        <span class="content-name">Código do envelope: </span>
                    </label>
                </div>

                <div class="formulario">
                    <input type="text" name="cidade" autocomplete="off" required>
                    <label for="cidade" class="label-name">
                        <span class="content-name">Cidade: </span>
                    </label>
                </div>
                
                <div class="formulario">
                    <input type="number" name="qtdeCartao" autocomplete="off" required>
                    <label for="qtdeCartao" class="label-name">
                        <span class="content-name">Quantidade de cartão no envelope</span>
                    </label>
                </div>

                <button type="submit" name="enviar">Enviar</button>
            </div>
        </form>
        
    </body>
</html>


