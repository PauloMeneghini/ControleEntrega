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
        <form action="pagImpressao.php" method="post">
            <input type="date" name="data"><br><br>
            <button name="enviaPesquisa" type="submit">Pesquisar</button>
        </form>
    </div>
</body>
</html>
