<?php
    session_start();
    include 'conexao.php';
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $result_codEnvelope = "SELECT * FROM controlecartao WHERE id = '$id'";
    $resultado_codEnvelope = mysqli_query($conn, $result_codEnvelope);
    $row_codEnvelope = mysqli_fetch_assoc($resultado_codEnvelope);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Editar entrega</title>
</head>
<body>

    <form action="validarEditaRegistro.php" method="POST" enctype="multipart/form-data">
        <div class="container" style="height: 500px">
            <input type="hidden" name="id" value="<?php echo $row_codEnvelope['id']; ?>" readonly>

            <div class="dados">
                <label for="codEnvelope">
                    <span>Código envelope: </span>
                </label>
                <input type="text" name="codEnvelope" value="<?php echo $row_codEnvelope['codEnvelope']; ?>" readonly required>
            </div>

            <div class="dados">
                <label for="nomeEmpresa">
                    <span>Nome da empresa: </span>
                </label>
                <input type="text" name="nomeEmpresa" value="<?php echo $row_codEnvelope['nomeEmpresa']; ?>" readonly required>
            </div>
            
            <div class="formulario">
                <input type="text" name="recebidor" required>
                <label for="recebidor" class="label-name">
                    <span class="content-name">Recebidor: </span>
                </label>
            </div>

            
            <label for="imagem">Canhoto assinado: </label>
            <input type="file" name="imagem" id="imagem">
            
            <button type="submit">Editar</button>
        </div>
    </form>
      
</body>
</html>