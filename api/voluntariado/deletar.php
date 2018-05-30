<?php
require_once '../../model/Voluntariado.php';
require_once '../../model/aplicacao/Resposta.php';

$voluntariado = new Voluntariado();

$voluntariado->setId($_POST['id']);
$voluntariado->setIdUsuario($_POST['id_usuario']);

$resposta = $voluntariado->deletar();

if($resposta) 
    echo Resposta::respostaSemDados("sucesso","Dados excluídos com sucesso");
else
    echo Resposta::respostaSemDados("erro","Falha ao ao excluir dados");