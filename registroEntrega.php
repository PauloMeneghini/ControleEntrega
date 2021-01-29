<?php
    session_start();
    include 'conexao.php';

    if(isset($_POST['salvar'])){
        if(empty($_POST['recebidor'])){
            echo "<script> alert('O Recebidor não pode ser vazio') </script>";
        } else {
            echo "<script> alert('Cadastro alterado') </script>";

        }
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registrar entrega</title>
</head>
<body>

    <form action="" method="POST">
        <div class="container">
            <div class="formulario">
                <input type="number" name="codEnvelope" autocomplete="off" required>
                <label for="codEnvelope" class="label-name">
                    <span class="content-name">Código do envelope: </span>
                </label>
            </div>

            <button name="enviaPesquisa" type="submit">Pesquisar</button>
        </div>
    </form><br><br>

    <?php
        if(isset($_POST['enviaPesquisa'])){
            $codEnvelope = filter_input(INPUT_POST, 'codEnvelope', FILTER_SANITIZE_NUMBER_INT);
            $result_codEnvelope = "SELECT * FROM controlecartao WHERE codEnvelope LIKE '$codEnvelope'";
            $resultado_codEnvelope = mysqli_query($conn, $result_codEnvelope);
            while($row_codEnvelope = mysqli_fetch_assoc($resultado_codEnvelope)){ ?>
                <table class="resultado">
                    <tr>
                        <td>Código envelope: <?php echo $row_codEnvelope['codEnvelope'] ?></td>
                    </tr>
                    <tr>
                        <td>Empresa: <?php echo $row_codEnvelope['nomeEmpresa'] ?></td>
                    </tr>
                    <tr>
                        <td><a href="editaRegistro.php?id=<?php echo $row_codEnvelope['id']; ?>"><button>Registrar entrega</button></a></td>
                    </tr>
                </table><?php
            }
        }

    ?>

</body>
</html>