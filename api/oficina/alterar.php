<?php
require_once '../../model/Oficina.php';
require_once '../../model/aplicacao/Resposta.php';

$oficina = new Oficina();

$oficina->setId($_POST['id_oficina']);
$oficina->setIdUsuario($_POST['id_usuario']);
$oficina->setNome($_POST['nome']);

$resposta = $oficina->atualizar();

if($resposta) 
    echo Resposta::respostaSemDados("sucesso","Dados alterados com sucesso");
else
    echo Resposta::respostaSemDados("erro","Falha ao alterar dados");