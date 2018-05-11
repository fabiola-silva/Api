<?php
require_once '../../model/Monitoria.php';
require_once '../../model/aplicacao/Resposta.php';

$monitoria = new Monitoria();

$monitoria->setIdUsuario($_POST['id_usuario']);

$resposta = $monitoria->listar();

if($resposta != null ) //retorna dados do usuario se sucesso e nulo se não econtrar usuário

    echo Resposta::respostaComDados("sucesso","Lista de monitoria", $resposta);
else
    echo Resposta::respostaSemDados("erro","Lista de monitoria vazia");