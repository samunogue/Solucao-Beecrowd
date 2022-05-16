<?php
require "classresposta.php";
require "configBancoDados.php";
if($_SERVER["REQUEST_METHOD"]==="POST"){    
    if(empty($_POST["login"])== false && empty($_POST["senha"]) == false){
        $login = new Respostas($mysql);
        $login->verificar_login($_POST["login"],$_POST["senha"]);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin/styles/style_login.css">
    <title>Login</title>
</head>
<body>
    <main>
        <section>
            <h2>Login</h2>
            <form method="POST">
                <input type="text" name="login" placeholder="Login" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <button type="submit">Entrar</button>
            </form>
        </section>
        <script src="verificacao.js"></script>
    </main>
</body>
</html>