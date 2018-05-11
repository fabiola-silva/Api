<?php


class Resposta
{
    public static function respostaSemDados($status, $mensagem)
    {

        $resposta = array();

        $resposta['status'] = $status;
        $resposta['mensagem'] = $mensagem;

        return json_encode($resposta, JSON_UNESCAPED_UNICODE);
    }

    public static function respostaComDados($status, $mensagem, $dados)
    {

        $resposta = array();

        $resposta['status'] = $status;
        $resposta['mensagem'] = $mensagem;
        $resposta['dados'] = $dados;

        return json_encode($resposta, JSON_UNESCAPED_UNICODE);
    }

}