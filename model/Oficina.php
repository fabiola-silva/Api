<?php

require_once 'config/Conexao.php';

class Oficina extends Conexao
{
    private $table = 'oficina';
    private $id;
    private $data_cadastro;
    private $nome;
    private $idUsuario;

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

     /**
     * @param mixed $data_cadastro
     */
    public function setdata_cadastro($data_cadastro)
    {
        $this->data_cadastro = $data_cadastro;
    }


    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @param mixed $idUsuario
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    public function inserir(){
        $sql = "INSERT INTO $this->table SET nome = ?, id_usuario = ?";
        $stmt = Conexao::prepare($sql);
        $stmt->execute(array($this->nome, $this->idUsuario));
        if($stmt->rowCount() > 0)
            return true;
        else
            return false;

    }

    public function deletar(){
        $sql = "DELETE  FROM $this->table WHERE id = ? AND id_usuario = ?";
        $stmt = Conexao::prepare($sql);
        $stmt->execute(array($this->id,$this->idUsuario));
        if($stmt->rowCount() > 0)
            return true;
        else
            return false;
    }

    public function atualizar(){
        $sql = "UPDATE $this->table SET nome = ? WHERE id = ? AND id_usuario = ?";
        $stmt = Conexao::prepare($sql);
        $stmt->execute(array($this->nome, $this->id,$this->idUsuario));
        if($stmt->rowCount() > 0)
            return true;
        else
            return false;
    }

    public function buscar(){
        $sql = "SELECT id, data_cadastro, nome FROM $this->table WHERE id = ? AND id_usuario = ?";
        $stmt = Conexao::prepare($sql);
        $stmt->execute(array($this->id,$this->idUsuario));
        if($stmt->rowCount() > 0)
            return $stmt->fetch();
        else
            return null;
    }

    public function listar(){
        $sql = "SELECT id, data_cadastro, nome FROM $this->table WHERE id_usuario = ?";
        $stmt = Conexao::prepare($sql);
        $stmt->execute(array($this->idUsuario));
        if($stmt->rowCount() > 0)
            return $stmt->fetchAll();
        else
            return null;
    }
}