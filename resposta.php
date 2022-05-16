<?php 
require "admin\classresposta.php";
require "admin\configBancoDados.php";
$questao = new Respostas($mysql);
$questao_selecionada = $questao->busca_por_ID($_GET["id"]);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_resposta.css" type="text/css">
    <title> <?php echo $questao_selecionada["CODIGO ITEM"] ?></title>
</head>
<body>
    <main>
        <section class="div_questao">
            <div class="div_codigo_questao">
                <p class="codigo_questao"><?php echo $questao_selecionada["CODIGO ITEM"] ?></p>
            </div>
            <div class="div_resposta_questao">
                <p class="resposta_questao"> <?php echo nl2br($questao_selecionada["RESPOSTA"]) ?> </p>
            </div>
        </section>
    </main>
</body>
</html>