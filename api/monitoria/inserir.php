<?php

require_once '../../model/Monitoria.php';
require_once '../../model/aplicacao/Resposta.php';

$monitoria = new Monitoria();

$monitoria->setDescricao($_POST['descricao']);
$monitoria->setFeedback($_POST['feedback']);
$monitoria->setIdUsuario($_POST['id_usuario']);

$resposta = $monitoria->inserir();

if($resposta) //retorna verdadeiro para sucesso e falso para falha
    echo Resposta::respostaSemDados("sucesso","Dados inseridos com suceso");
else
    echo Resposta::respostaSemDados("erro","Falha ao inserir dados");