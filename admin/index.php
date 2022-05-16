<?php
require "session.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles\style_adm.css" type="text/css">
    <title>Soluçâo Beecrowd</title>
</head>
<body>        
    <main>
        <p>Olá <?php echo $_SESSION["usuario"] ?></p>
            <section>
                <a href="adicionar_resposta.php"><div>Adicionar Resposta</div></a>
                <a href="editar_resposta.php"><div>Editar Resposta</div></a>
                <a href="excluir_resposta.php"><div>Excluir Resposta</div></a>
                <a href="logout.php"><div>Sair da conta</div></a>
            </section>
    </main>
</body>
</html>