<?php
require_once '../../model/Monitoria.php';
require_once '../../model/aplicacao/Resposta.php';

$monitoria = new Monitoria();

$monitoria->setId($_POST['id_monitoria']);
$monitoria->setIdUsuario($_POST['id_usuario']);


$resposta = $monitoria->buscar();

if($resposta != null ) //retorna dados do usuario se sucesso e nulo se não econtrar usuário

    echo Resposta::respostaComDados("sucesso","Dados da monitoria", $resposta);
else
    echo Resposta::respostaSemDados("erro","Dados da monitoria não foram encontrados");