<?php
    include 'conexao.php';
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $codEnvelope = filter_input(INPUT_POST, 'codEnvelope', FILTER_SANITIZE_NUMBER_INT);
    $nomeEmpresa = filter_input(INPUT_POST, 'nomeEmpresa', FILTER_SANITIZE_STRING);
    $recebidor = filter_input(INPUT_POST, 'recebidor', FILTER_SANITIZE_STRING);
    $image_name = $_FILES['imagem']['name'];
    $image_tmp = $_FILES['imagem']['tmp_name'];
    $upload_folder = "imagens/";

    //Valida se o campo recebidor está vazio
    if(empty($recebidor)){
        echo "<script> alert('Recebidor não pode estar vazio') </script>";
        header('editaRegistro.php');
    }

    //Se já ouver imagem cadastrada ele não deixa alterar

    $consult = "SELECT dataEntrega FROM controlecartao WHERE id='$id'";
    $consulta = mysqli_query($conn, $consult);
    $row_consulta = mysqli_num_rows($consulta);

    if(!$row_consulta['dataEntrega']) { ?>
        <script>
            const msg = alert('Entrega já registrada');
            if(msg === undefined) {
                window.location.href = "index.php";
            };
        </script> <?php
        
    } else {

        $result_altera = "UPDATE controlecartao SET recebidor='$recebidor', dataEntrega=NOW(), imagem='$image_name' WHERE id='$id'";
        $resultado_altera = mysqli_query($conn, $result_altera);

        $moveFile = move_uploaded_file($image_tmp, $upload_folder .$image_name);

        if(mysqli_affected_rows($conn)){ ?>
            <script>
                const msg = alert('Entrega registrada');
                if(msg === undefined) {
                    window.location.href = "index.php";
                };
            </script> <?php
        } else { ?>
            <script>
                const msg = alert('Entrega não registrada');
                if(msg === undefined) {
                    window.history.back();
                }
            </script> <?php
        }
    }


    

?>