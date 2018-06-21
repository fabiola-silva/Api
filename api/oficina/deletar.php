<?php
require_once '../../model/Oficina.php';
require_once '../../model/aplicacao/Resposta.php';

$oficina = new Oficina();

$oficina->setId($_POST['id_oficina']);
$oficina->setIdUsuario($_POST['id_usuario']);

$resposta = $monitoria->deletar();

if($resposta) 
    echo Resposta::respostaSemDados("sucesso","Dados excluídos com sucesso");
else
    echo Resposta::respostaSemDados("erro","Falha ao ao excluir dados");