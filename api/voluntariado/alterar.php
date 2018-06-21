<?php
require_once '../../model/Voluntariado.php';
require_once '../../model/aplicacao/Resposta.php';

$voluntariado = new Voluntariado();

$voluntariado->setId($_POST['id_voluntariado']);
$voluntariado->setIdUsuario($_POST['id_usuario']);
$voluntariado->setDescricao($_POST['descricao']);
$voluntariado->setFeedback($_POST['feedback']);

$resposta = $voluntariado->atualizar();

if($resposta) 
    echo Resposta::respostaSemDados("sucesso","Dados alterados com sucesso");
else
    echo Resposta::respostaSemDados("erro","Falha ao alterar dados");