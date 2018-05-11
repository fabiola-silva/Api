<?php
require_once '../../model/Monitoria.php';
require_once '../../model/aplicacao/Resposta.php';

$monitoria = new Monitoria();

$monitoria->setId($_POST['id_monitoria']);
$monitoria->setIdUsuario($_POST['id_usuario']);
$monitoria->setDescricao($_POST['descricao']);
$monitoria->setFeedback($_POST['feedback']);

$resposta = $monitoria->atualizar();

if($resposta) //retorna verdadeiro para sucesso e falso para falha
    echo Resposta::respostaSemDados("sucesso","Dados alterados com sucesso");
else
    echo Resposta::respostaSemDados("erro","Falha ao alterar dados");