<?php
require "classresposta.php";
require "configBancoDados.php";
require "session.php";
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $excluir_resposta = new Respostas($mysql);
    $excluir_resposta->remover_resposta($_POST["codigo_item"]);
    //redirecionar para uma pagina
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
    <title>Excluir Resposta</title>
    <link rel="stylesheet" href="../admin/styles/style_excluir.css">
</head>

<body>
    <div id="container">
        <form method="post">
            <h1>Excluir Resposta</h1>
            <p>
                <label for="codigo">Digite o código da questão</label>
                <input class="input_codigo" type="number" name="codigo_item" id="codigo" required/>
            </p>
                <button class="botao">Excluir Resposta</button>
            </p>
        </form>
    </div>
</body>

</html>