<?php

require_once '../../model/Usuario.php';
require_once '../../model/aplicacao/Resposta.php';


$email = $_POST['email'];
$senha = $_POST["senha"];


$usuario = new Usuario();
$usuario->setEmail($email);
$usuario->setSenha($senha);

$resposta = $usuario->logar();

if($resposta !== null){ //retorna dados do usuario se sucesso e nulo se não econtrar usuário
   echo Resposta::respostaComDados("sucesso", "Login com sucesso", $resposta);
}else{
    echo Resposta::respostaSemDados("erro", "Email ou senha inválidos");
}


