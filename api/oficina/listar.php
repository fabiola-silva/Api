<?php
require_once '../../model/Oficina.php';
require_once '../../model/aplicacao/Resposta.php';

$oficina = new Oficina();

$oficina->setIdUsuario($_POST['id_usuario']);

$resposta = $oficina->listar();

if($resposta != null ) 

    echo Resposta::respostaComDados("sucesso","Lista de oficina", $resposta);
else
    echo Resposta::respostaSemDados("erro","Lista de oficina vazia");