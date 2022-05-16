<?php
require "classresposta.php";
require "configBancoDados.php";
IF($_SERVER["REQUEST_METHOD"]=="POST"){
        if($_POST["senha"] == $_POST["senha_confirmada"]){
        $novo_adm = new Respostas($mysql);
        $novo_adm->cadastrar($_POST["login"],$_POST["senha"]);
        header("location: ..\index.php");
       }else{
           echo ('<div class="aviso"><p>Senhas inválidas</p><button class="botao_erro" onclick="excluir_aviso()">Tentar novamente</buttton></div>');            
       }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="../admin/styles/style_cadastro.css">
</head>

<body>
    <div id="container">
        <form method="post">
            <h2>Cadastro</h2>
            <p>
                <label for="codigo">Digite o LOGIN</label>
                <input class="input_login" type="text" name="login" id="codigo" required/>
            </p>
            <p>
                <label for="resposta">Digite a SENHA</label>
                <input class="input_senha" type="password" name="senha" id="codigo" required/>
            </p>
            <p>
                <label for="resposta">Digite a SENHA novamente</label>
                <input class="input_senha" type="password" name="senha_confirmada" id="codigo" required/>
            </p>
                <button class="botao" type="submit">Cadastrar-se</button>
            </p>
        </form>
    </div>
    <script src="verificacao.js"></script>
</body>
</html>