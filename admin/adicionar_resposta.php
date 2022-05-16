<?php
require "classresposta.php";
require "configBancoDados.php";
require "session.php";
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $nova_resposta = new Respostas($mysql);
    $nova_resposta->adicionar_resposta($_POST["codigo_item"],$_POST["resposta"]);
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
    <link rel="stylesheet" href="../admin/styles/style_add_resposta.css" type="text/css">
    <title>Adicionar Resposta</title>
</head>

<body>
    <div id="container">
        <form method="post">
            <h1>Adicionar Resposta</h1>
            <p>
                <label for="codigo">Digite o código da questão</label>
                <input class="input_codigo" type="number" name="codigo_item" id="codigo" required/>
            </p>
            <p>
                <label for="resposta">Digite a resposta da questão</label>
                <textarea class="input_resposta" type="text" name="resposta" id="resposta" required></textarea>
            </p>
            <p>
                <button class="botao">Adicionar resposta</button>
            </p>
        </form>
    </div>
</body>

</html>