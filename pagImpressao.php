<?php
    include_once 'conexao.php';

    //Verifica se está sendo passado na URL a página atual, senão é atribuido a pagina
    $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;

    //Seleciona todos os resutlados da tabela
    $data = $_POST['data'];
    $result_consulta  = "SELECT * FROM controlecartao WHERE dataCadastro LIKE '%$data%'";
    $resultado_consulta = mysqli_query($conn, $result_consulta);

    //Conta o total de resultados
    $total_consulta = mysqli_num_rows($resultado_consulta);

    //Seta a quantidade de resultados por pagina
    $quantidade_pag = 8;

    //Calcular o número de pagina necessárias para aprensentar os resultados
    $num_pagina = ceil($total_consulta/$quantidade_pag);

    //calcula o inicio da visualização
    $inicio = ($quantidade_pag*$pagina)-$quantidade_pag;

    //Seleciona os resultados a serem exibidos na pagina
    $result_consult = "SELECT * FROM controlecartao LIMIT $inicio, $quantidade_pag";
    $resultado_consult = mysqli_query($conn, $result_consult);
    $total_consult = mysqli_num_rows($resultado_consult);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Impressão</title>
</head>
<body>

    <div class="page">
        <?php
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
                </div>
                <?php
            }
        ?>
    </div>

</body>
</html>
