<?php
require_once '../../model/Voluntariado.php';
require_once '../../model/aplicacao/Resposta.php';

$voluntariado = new Voluntariado();

$voluntariado->setId($_POST['id_voluntariado']);
$voluntariado->setIdUsuario($_POST['id_usuario']);


$resposta = $voluntariado->buscar();

if($resposta != null ) 

    echo Resposta::respostaComDados("sucesso","Dados de voluntariado", $resposta);
else
    echo Resposta::respostaSemDados("erro","Dados de voluntariado não foram encontrados");