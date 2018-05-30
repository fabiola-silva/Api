<?php

require_once '../../model/Usuario.php';
require_once '../../model/aplicacao/Resposta.php';


$usuario->setIdUsuario($_POST['id_usuario']);
$usuario->setSenha($_POST['senha']);

$resposta = $usuario->alterar();

if($resposta) 
    echo Resposta::respostaSemDados("sucesso","Dado alterado com sucesso");
else
    echo Resposta::respostaSemDados("erro","Falha ao alterar dado");
