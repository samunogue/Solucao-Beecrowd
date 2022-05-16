<?php
require "classresposta.php";
require "configBancoDados.php";
require "session.php";
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $editar = new Respostas($mysql);
    $editar->editar_resposta($_POST["codigo_item"],$_POST["resposta"]);
    header("Location: index.php");
    die();
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Resposta</title>
    <link rel="stylesheet" href="../admin/styles/style_editar.css">
</head>

<body>
    <div id="container">
        <form method="post">
            <h1>Editar Resposta</h1>
            <p>
                <label for="codigo">Digite o código da questão</label>
                <input class="input_codigo" type="number" name="codigo_item" id="codigo" required/>
            </p>
            <p>
                <label for="resposta">Digite a resposta da questão</label>
                <textarea class="input_resposta" type="text" name="resposta" id="resposta" required></textarea>
            </p>
                <button class="botao">Editar Resposta</button>
            </p>
        </form>
    </div>
</body>

</html>