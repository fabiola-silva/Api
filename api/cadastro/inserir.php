<?php

require_once '../../model/Usuario.php';
require_once '../../model/aplicacao/Resposta.php';

$usuario = new Usuario();

$usuario->setNome($_POST['nome']);
$usuario->setMatricula($_POST['matricula']);
$usuario->setSenha($_POST['senha']);
$usuario->setIdUsuario($_POST['id_usuario']);

$resposta = $usuario->inserir();

if($resposta) 
    echo Resposta::respostaSemDados("sucesso","Dados inseridos com suceso");
else
    echo Resposta::respostaSemDados("erro","Falha ao inserir dados");