<?php
require_once '../../model/Usuario.php';
require_once '../../model/aplicacao/Resposta.php';

$usuario = new Usuario();

$usuario->setIdUsuario($_POST['id_usuario']);
$usuario->setNome($_POST['nome']);
$usuario->setMatricula($_POST['matricula']);
$usuario->setSenha($_POST['senha']);

$resposta = $usuario->atualizar();

if($resposta) 
    echo Resposta::respostaSemDados("sucesso","Dados alterados com sucesso");
else
    echo Resposta::respostaSemDados("erro","Falha ao alterar dados");