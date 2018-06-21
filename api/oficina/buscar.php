<?php
require_once '../../model/Oficina.php';
require_once '../../model/aplicacao/Resposta.php';

$oficina = new Oficina();

$oficina->setId($_POST['id_oficina']);
$oficina->setIdUsuario($_POST['id_usuario']);


$resposta = $oficina->buscar();

if($resposta != null ) 

    echo Resposta::respostaComDados("sucesso","Dados da oficina", $resposta);
else
    echo Resposta::respostaSemDados("erro","Dados da oficina não foram encontrados");