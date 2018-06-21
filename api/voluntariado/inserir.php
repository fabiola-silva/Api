<?php

require_once '../../model/Voluntariado.php';
require_once '../../model/aplicacao/Resposta.php';

$voluntariado = new Voluntariado();

$voluntariado->setDescricao($_POST['descricao']);
$voluntariado->setFeedback($_POST['feedback']);
$voluntariado->setIdUsuario($_POST['id_usuario']);

$resposta = $voluntariado->inserir();

if($resposta) 
    echo Resposta::respostaSemDados("sucesso","Dados inseridos com suceso");
else
    echo Resposta::respostaSemDados("erro","Falha ao inserir dados");