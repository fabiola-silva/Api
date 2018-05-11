<?php
require_once '../../model/Monitoria.php';
require_once '../../model/aplicacao/Resposta.php';

$monitoria = new Monitoria();

$monitoria->setId($_POST['id_monitoria']);
$monitoria->setIdUsuario($_POST['id_usuario']);

$resposta = $monitoria->deletar();

if($resposta) //retorna verdadeiro para sucesso e falso para falha
    echo Resposta::respostaSemDados("sucesso","Dados excluídos com sucesso");
else
    echo Resposta::respostaSemDados("erro","Falha ao ao excluir dados");