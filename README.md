<h1 align="center">CMS</h1>
<p align="center">
  <img src="http://img.shields.io/static/v1?label=STATUS&message=EM%20DESENVOLVIMENTO&color=GREEN&style=for-the-badge"/>
</p>

## Projeto 🪧
Esse projeto é uma aplicação de um ``CMS(Sistema de Gerenciamento de Conteúdo)`` para reunir as respostas do BEECROWD na linguagem javascript, o ``Solução Beecrowd`` tem
a proposta de usúarios do site de exercicíos de progamação ``BEECROWD``, possam realizar seu cadastro e compartilhar suas respostas com os outros usúarios.

![solucao_desktop](https://user-images.githubusercontent.com/84748999/168932975-eae2b0df-3312-47d0-a220-fcb3ecff7602.jpeg)

## Tecnologias 🛠️

- ``PHP``
- ``MySQL``
- ``HTML``
- ``CSS``
- ``JAVASCRIPT``
- ``POO``

## Estrutura
- index.php ``Pagina inicial com a lista de respostas e as opções de realizar login ou cadastrar-se``
- resposta.php ``Pagina que exibe a resposta da questão``
- cadastro.php ``Pagina para realizar o cadastro``
- login.php ``Pagina de login``
- admin.php ``Pagina do administrador onde pode realizar as funções de adicionar,editar e excluir a resposta além de ter a opção de fazer logout da conta``
- adicionar_resposta.php ``Pagina de adicionar resposta``
- editar_resposta.php ``Pagina de editar resposta``
- excluir_resposta.php ``Pagina de excluir resposta``
- logout.php ``Pagina do script do logout para encerrar a sessão``

![Captura de tela de 2022-05-17 21-19-45](https://user-images.githubusercontent.com/84748999/168932924-0f36634b-fda7-462b-b86d-0813320a2b74.png)


## Segurança 🛡️
- Os usúarios que realizam seu cadastro tem suas senhas armazenadas criptografadas através da função ``password_hash()``, a verificação do Login ocorre usando
a função ``password_verify()`` que consegue verificar senhas criptografadas com o ``password_hash()``.
- As consultas ao banco ``MySQL`` ocorre usando as funções ``prepare()`` ➡️ ``bind_param()`` ➡️ ``execute()``, pois ao usar a função ``query()`` para realizar a consulta
o sistema fica vulnerável ao ``MySQL Injection`` deixando o Banco De Dados em risco.

- prepare() ``Prepara a consulta SQL com variáveis no código da consulta``
- bind_param() ``Atribui os valores as variáveis da consulta``
- execute() ``Executa a consulta que foi preparada`` 
