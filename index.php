<?php
require"admin\classresposta.php";
require "admin\configBancoDados.php";

$respostas = new Respostas($mysql);
$questoes = $respostas->exibir_respostas();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Solução Beecrowd</title>
</head>
<body>
    <header>
        <a href="index.php" class="titulo">Solução Beecrowd</a>
        <a href="../projetoblog/admin/login.php"><button class="botao_login_cabeca">Login</button></a>
    </header>
    <main>
        <section class="section_inicio">
            <div class="div_texto_login_cadastro">
                
                    <p class="texto_inicio">Olá somos a Solução Beecrowd, um site criado para reunir as respostas do Beecrowd na linguagem Javascript para fins didáticos, venha nos ajudar também, faça seu cadastro e envie suas respostas</p>
                      
                <div class="div_area_login_cadastro">
                    <a href="../projetoblog/admin/login.php"><button class="botao_login_cadastro">Login</button></a>
                    <div class="div_linha_ou_linha">
                        <div class="linha_esquerda"></div>
                            <p class="ou">ou</p>
                        <div class="linha_direita"></div>
                    </div>
                        <a href="../projetoblog/admin/cadastro.php"><button class="botao_login_cadastro">Cadastre-se</button></a>
                </div>
            </div>            
        </section>
        <section class="section_questoes">
            <div class="flexbox_questoes">
                <?php foreach($questoes as $questao):?>
                        <a class="codigo_resposta" href="resposta.php?id=<?php echo $questao["id"] ?>"><div class="questao"><?php echo $questao["CODIGO ITEM"]; ?></div></a>
                <?php endforeach ?>
            </div>
        </section>
    </main>
    <footer>
        <p>Desenvolvido por Samuel Nogueira &copy; 2022</p>
    </footer>    
</body>
</html>