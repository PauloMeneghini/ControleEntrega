<?php
    include_once 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Impressão</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <input type="date" name="data"><br><br>
            <button name="enviaPesquisa" type="submit">Pesquisar</button>
        </form>
    </div>

    <?php
        if(isset($_POST['enviaPesquisa'])){
            $data = $_POST['data'];
            $result_consulta  = "SELECT * FROM controlecartao WHERE dataCadastro LIKE '%$data%'";
            $resultado_consulta = mysqli_query($conn, $result_consulta);
            while($row_consulta = mysqli_fetch_assoc($resultado_consulta)){ ?>

                <table style="border: 2px solid black">
                    <tr>
                        <td><?php echo "Fantasia/Razão: " .$row_consulta['nomeEmpresa']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo "Cidade: " .$row_consulta['cidade']; ?></td>
                    </tr>
                </table>
                
                <button onclick="imprimir()">Imprimir</button> <?php

            }
        }
    ?>

    <script>
        function imprimir(){
            window.print();
        }
    </script>

</body>
</html>
