<?php

require_once '../../model/Oficina.php';
require_once '../../model/aplicacao/Resposta.php';

$oficina = new Oficina();

$oficina->setNome($_POST['nome']);
$oficina->setIdUsuario($_POST['id_usuario']);

$resposta = $oficina->inserir();

if($resposta)
    echo Resposta::respostaSemDados("sucesso","Dados inseridos com suceso");
else
    echo Resposta::respostaSemDados("erro","Falha ao inserir dados");