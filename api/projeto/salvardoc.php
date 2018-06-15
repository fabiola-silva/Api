<?php
    require_once '../../model/aplicacao/Resposta.php';

    $local_arquivo = "../../upload/projetos/";

    $local_arquivo = $local_arquivo . basename($_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$local_arquivo)){
        echo Resposta::respostaSemDados("sucesso","Arquivo enviado com sucesso");
    }else{
        echo Resposta::respostaSemDados("erro","Falha ao enviar o arquivo");
    }


