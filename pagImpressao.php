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

    <?php
        if(isset($_POST['enviaPesquisa'])){
            $data = $_POST['data'];
            $result_consulta  = "SELECT * FROM controlecartao WHERE dataCadastro LIKE '%$data%'";
            $resultado_consulta = mysqli_query($conn, $result_consulta);
            while($row_consulta = mysqli_fetch_assoc($resultado_consulta)){ ?>

                <div class="container-resultado">
                    <div class="teste-resultado">
                        <div><?php echo "Fantasia/Razão: " .$row_consulta['nomeEmpresa']; ?></div>
                        <div class="teste">
                            <div><?php echo "Cidade: " .$row_consulta['cidade']; ?></div>
                            <div>Data: __/__/____</div>
                            <div>Prev. de entrega: __/__/____</div>
                        </div>
                        <div class="teste2">
                            <div>Assinatura (por extenso):</div>
                            <div><?php echo $row_consulta['codEnvelope'] ?></div>
                            <div><?php echo $row_consulta['qtdeCartao'] ?></div>
                        </div>
                    </div>
                </div> <?php
            } ?>
            <button onclick="imprimir()">Imprimir</button> <?php
        }
    ?>

    <script>
        function imprimir(){
            window.print();
        }
    </script>

</body>
</html>
