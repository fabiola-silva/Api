<?php
require_once '../../model/Voluntariado.php';
require_once '../../model/aplicacao/Resposta.php';

$voluntariado = new Voluntariado();

$voluntariado->setIdUsuario($_POST['id_usuario']);

$resposta = $voluntariado->listar();

if($resposta != null ) 

    echo Resposta::respostaComDados("sucesso","Lista de monitoria", $resposta);
else
    echo Resposta::respostaSemDados("erro","Lista de monitoria vazia");