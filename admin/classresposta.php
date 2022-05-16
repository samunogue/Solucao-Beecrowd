<?php
class Respostas{
    private $mysql;
    
    public function __construct(mysqli $mysql){
        $this->mysql = $mysql;
    }
    public function exibir_respostas():array{
        $lista_respostas = $this->mysql->query("SELECT `id`,`CODIGO ITEM`,`RESPOSTA` FROM `problemas`");
        $respostas = $lista_respostas->fetch_all(MYSQLI_ASSOC);
        return $respostas; 
    }
    public function busca_por_ID(string $id): array{
        $seleciona_questao = $this->mysql->prepare("SELECT `id`,`CODIGO ITEM`,`RESPOSTA` FROM `problemas` WHERE `id`= ?");
        $seleciona_questao->bind_param("s", $id);
        $seleciona_questao->execute();
        $questao_selecionada = $seleciona_questao->get_result()->fetch_assoc();
        return $questao_selecionada;
    }
    public function adicionar_resposta(string $codigo_item,string $resposta_item): void{
        $adicionar_questao = $this->mysql->prepare("INSERT INTO `problemas`(`CODIGO ITEM`,`RESPOSTA`) VALUES (?,?)");
        $adicionar_questao->bind_param("ss", $codigo_item,$resposta_item);
        $adicionar_questao->execute();
    }
    public function remover_resposta(string $codigo_item):void{
        $excluir_questao = $this->mysql->prepare("DELETE FROM `problemas` WHERE `CODIGO ITEM` = ?");
        $excluir_questao->bind_param("s", $codigo_item);
        $excluir_questao->execute();
    }
    public function verificar_login(string $lOGIN, string $SENHA){
        $login = $this->mysql->real_escape_string($lOGIN);
        $senha = $this->mysql->real_escape_string($SENHA);
        $pesquisa = $this->mysql->query("SELECT * FROM adm WHERE LOGIN = '$login'");
        $usuario = $pesquisa->fetch_assoc();
        $linhas = $pesquisa->num_rows;
        if($linhas and password_verify($senha,$usuario["SENHA"]) == 1){
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION["usuario"] = $usuario["LOGIN"];
            header("location: index.php"); 
        }else{
            echo ('<div class="aviso"><p>Login ou senha inválidos</p><button class="botao_erro" onclick="excluir_aviso()">Tentar novamente</buttton></div>');            
        }
    }
    public function editar_resposta(string $codigo_item,string $resposta_item): void{
        $adicionar_questao = $this->mysql->prepare("UPDATE `problemas` SET `RESPOSTA`=? WHERE `CODIGO ITEM`=?");
        $adicionar_questao->bind_param("ss",$resposta_item,$codigo_item);
        $adicionar_questao->execute();
    }
    public function cadastrar(string $login,string $senha): void{
        $adicionar_adm = $this->mysql->prepare("INSERT INTO `adm`(`LOGIN`,`SENHA`) VALUES (?,?)");
        $senha_cripto = password_hash($senha, PASSWORD_DEFAULT);
        $adicionar_adm->bind_param("ss", $login,$senha_cripto);
        $adicionar_adm->execute();
    }
}
?>             